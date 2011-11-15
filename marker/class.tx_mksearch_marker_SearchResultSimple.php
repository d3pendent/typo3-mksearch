<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 das Medienkombinat
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

require_once(t3lib_extMgm::extPath('rn_base') . 'class.tx_rnbase.php');

tx_rnbase::load('tx_rnbase_util_BaseMarker');

/**
 * Renders a search result straightforward with all its data, adding a link, if available
 * This class can be extended for other content types e.g. to change the behavior of $this->prepareLinks().
 */
class tx_mksearch_marker_SearchResultSimple extends tx_rnbase_util_BaseMarker {

	/**
	 * @param string $template HTML template
	 * @param tx_mksearch_model_SearchHit $item search hit
	 * @param tx_rnbase_util_FormatUtil $formatter
	 * @param string $confId path of typoscript configuration
	 * @param string $marker name of marker
	 * @return string readily parsed template
	 */
	public function parseTemplate($template, &$item, &$formatter, $confId, $marker = 'ITEM') {
		if(!is_object($item)) {
			// On default use an empty instance.
			$item = self::getEmptyInstance('tx_mkcontact_models_SearchHit');
		}
		
		//wenn wir ein array haben, holen wir uns dazu eine 
		//kommaseparierte Liste um damit einfach im FE arbeiten zu können
		foreach ($item->record as &$mValue){
			if(is_array($mValue)) $mValue = implode(', ', $mValue);
		}
		
		// Fill MarkerArray
		$ignore = self::findUnusedCols($item->record, $template, $marker);
		$markerArray = $formatter->getItemMarkerArrayWrapped($item->record, $confId , $ignore, $marker.'_',$item->getColumnNames());
		$subpartArray = array(); $wrappedSubpartArray = array();
		
		$this->prepareLinks($item, $marker, $markerArray, $subpartArray, $wrappedSubpartArray, $confId, $formatter, $template);
		
		$out = $formatter->cObj->substituteMarkerArrayCached($template, $markerArray, $subpartArray, $wrappedSubpartArray);
		return $out;
	}
	
	/**
	 * Prepare links
	 *
	 * @param tx_mksearch_model_SearchHit $item
	 * @param string $marker
	 * @param array $markerArray
	 * @param array $wrappedSubpartArray
	 * @param string $confId
	 * @param tx_rnbase_util_FormatUtil $formatter
	 * @param string $template
	 */
	public function prepareLinks(&$item, $marker, &$markerArray, &$subpartArray, &$wrappedSubpartArray, $confId, &$formatter, $template) {
		$config = $formatter->getConfigurations();
		
		$linkId = 'show';
		$linkConfId = $confId.'links.'.$linkId.'.';
		//cObject Daten sichern und durch unseren solr record ersetzen
		$sCObjTempData = $config->getCObj()->data;
		$config->getCObj()->data = $item->record;
		
		$pid = $config->getCObj()->stdWrap($config->get($linkConfId.'pid'), $config->get($linkConfId.'pid.'));
		
		// Link entfernen, wenn nicht gesetzt
		if(empty($pid)) {
			$linkMarker = $marker . '_' . strtoupper($linkId).'LINK';
			self::disableLink($markerArray, $subpartArray, $wrappedSubpartArray, $linkMarker, true);
		} else {
		
			// Try to get parameter name from TS
			$paramName = $config->get($linkConfId.'paramName');
			if (!$paramName) $paramName = $item->record['contentType'];
			// Try to get value field name from TS
			$paramField = $config->get($linkConfId.'paramField');
			if (!$paramField) $paramField = 'uid';
			
			$addParams = $config->get($linkConfId.'additionalParams.');
			if (!is_array($addParams)) $addParams = array();
			$addParams[$paramName] = $item->record[$paramField];
			
			self::initLink($markerArray, $subpartArray, $wrappedSubpartArray, $formatter, $confId, $linkId, $marker, $addParams, $template);
		}
		//cObject Daten wieder zurück
		$config->getCObj()->data = $sCObjTempData;
	}
}
if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mksearch/marker/class.tx_mksearch_marker_SearchResultSimple.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mksearch/marker/class.tx_mksearch_marker_SearchResultSimple.php']);
}