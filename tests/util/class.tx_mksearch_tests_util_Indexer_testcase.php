<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 das Medienkombinat GmbH
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
tx_rnbase::load('tx_mksearch_tests_Testcase');

/**
 *
 *
 * @package tx_mksearch
 * @subpackage tx_mksearch_tests
 * @author Hannes Bochmann <hannes.bochmann@dmk-ebusiness.de>
 * @author Michael Wagner <michael.wagner@dmk-ebusiness.de>
 * @license http://www.gnu.org/licenses/lgpl.html
 *          GNU Lesser General Public License, version 3 or later
 */
class tx_mksearch_tests_util_Indexer_testcase
	extends tx_mksearch_tests_Testcase {

	/**
	 * @group unit
	 */
	public function testGetDateTimeWithTimestamp() {
		$dateTime = tx_mksearch_util_Indexer::getInstance()
			->getDateTime('@2');
		$this->assertEquals('1970-01-01T00:00:02Z', $dateTime);
	}

	/**
	 * @group unit
	 */
	public function testIsOnIndexablePageReturnsTrueIfNoInOrExcludesSet() {
		$sourceRecord = array('pid' => 2);
		$options = array();

		$isOnIndexablePage = tx_mksearch_util_Indexer::getInstance()
			->isOnIndexablePage($sourceRecord, $options);

		$this->assertTrue($isOnIndexablePage,'Seite nicht indizierbar');
	}

	/**
	 * @group unit
	 */
	public function testIsOnIndexablePageReturnsTrueIfPidIsInIncludePages() {
		$sourceRecord = array('pid' => 1);
		$options = array(
			'include.' => array(
				'pages' => 1
			)
		);

		$isOnIndexablePage = tx_mksearch_util_Indexer::getInstance()
			->isOnIndexablePage($sourceRecord, $options);

		$this->assertTrue($isOnIndexablePage,'Seite nicht indizierbar');
	}

	/**
	 * @group unit
	 */
	public function testIsOnIndexablePageReturnsFalseIfPidIsNotInIncludePages() {
		$sourceRecord = array('pid' => 2);
		$options = array(
			'include.' => array(
				'pages' => 1
			)
		);

		$isOnIndexablePage = tx_mksearch_util_Indexer::getInstance()
			->isOnIndexablePage($sourceRecord, $options);

		$this->assertFalse($isOnIndexablePage,'Seite indizierbar');
	}

	/**
	 * @group unit
	 */
	public function testIsOnIndexablePageReturnsFalseIfPidIsInExcludePageTrees() {
		$sourceRecord = array('pid' => 3);
		$options = array(
			'exclude.' => array(
				'pageTrees' => 1
			)
		);

		$rootline = array(
			2 => array('uid' => 3, 'pid' => 2),
			1 => array('uid' => 2, 'pid' => 1),
			0 => array('uid' => 1, 'pid' => 0),
		);
		$utilIndexer = $this->getMockClassForIsOnIndexablePageTests($rootline);

		$isOnIndexablePage = $utilIndexer->isOnIndexablePage($sourceRecord, $options);

		$this->assertFalse($isOnIndexablePage,'Seite indizierbar');
	}

	/**
	 * @group unit
	 */
	public function testIsOnIndexablePageReturnsTrueIfPidIsInIncludePageTrees() {
		$sourceRecord = array('pid' => 3);
		$options = array(
			'include.' => array(
				'pageTrees' => 2
			)
		);

		$rootline = array(
			1 => array('uid' => 3, 'pid' => 2),
			0 => array('uid' => 2, 'pid' => 0),
		);
		$utilIndexer = $this->getMockClassForIsOnIndexablePageTests($rootline);

		$isOnIndexablePage = $utilIndexer->isOnIndexablePage($sourceRecord, $options);

		$this->assertTrue($isOnIndexablePage,'Seite nicht indizierbar');
	}

	/**
	 * @group unit
	 */
	public function testIsOnIndexablePageReturnsFalseIfPidIsNotInIncludePageTrees() {
		$sourceRecord = array('pid' => 3);
		$options = array(
			'include.' => array(
				'pageTrees' => 1
			)
		);

		$rootline = array(
			1 => array('uid' => 3, 'pid' => 2),
			0 => array('uid' => 2, 'pid' => 0),
		);
		$utilIndexer = $this->getMockClassForIsOnIndexablePageTests($rootline);

		$isOnIndexablePage = $utilIndexer->isOnIndexablePage($sourceRecord, $options);

		$this->assertFalse($isOnIndexablePage,'Seite indizierbar');
	}

	/**
	 * @group unit
	 */
	public function testIsOnIndexablePageReturnsFalseIfPidIsInExcludePages() {
		$sourceRecord = array('pid' => 1);
		$options = array(
			'exclude.' => array(
				'pages' => 1
			)
		);

		$isOnIndexablePage = tx_mksearch_util_Indexer::getInstance()
			->isOnIndexablePage($sourceRecord, $options);

		$this->assertFalse($isOnIndexablePage,'Seite indizierbar');
	}

	/**
	 * @group unit
	 */
	public function testIsOnIndexablePageReturnsTrueIfPidIsNotInExcludePages() {
		$sourceRecord = array('pid' => 2);
		$options = array(
			'exclude.' => array(
				'pages' => 1
			)
		);

		$isOnIndexablePage = tx_mksearch_util_Indexer::getInstance()
			->isOnIndexablePage($sourceRecord, $options);

		$this->assertTrue($isOnIndexablePage,'Seite nicht indizierbar');
	}

	/**
	 * @group unit
	 */
	public function testIsOnIndexablePageReturnsFalseIfPidIsIncludePageTreesButAlsoInExcludePages() {
		$sourceRecord = array('pid' => 3);
		$options = array(
			'include.' => array(
				'pageTrees' => 1
			),
			'exclude.' => array(
				'pages' => 3
			)
		);

		$rootline = array(
			2 => array('uid' => 3, 'pid' => 2),
			1 => array('uid' => 2, 'pid' => 1),
			0 => array('uid' => 1, 'pid' => 0),
		);
		$utilIndexer = $this->getMockClassForIsOnIndexablePageTests($rootline);

		$isOnIndexablePage = $utilIndexer->isOnIndexablePage($sourceRecord, $options);

		$this->assertFalse($isOnIndexablePage,'Seite indizierbar');
	}

	/**
	 * @group unit
	 */
	public function testIsOnIndexablePageReturnsTrueIfPidIsIncludePageTreesAndNotExcludePages() {
		$sourceRecord = array('pid' => 3);
		$options = array(
			'include.' => array(
				'pageTrees' => 1
			),
			'exclude.' => array(
				'pages' => 2
			)
		);

		$rootline = array(
			2 => array('uid' => 3, 'pid' => 2),
			1 => array('uid' => 2, 'pid' => 1),
			0 => array('uid' => 1, 'pid' => 0),
		);
		$utilIndexer = $this->getMockClassForIsOnIndexablePageTests($rootline);

		$isOnIndexablePage = $utilIndexer->isOnIndexablePage($sourceRecord, $options);

		$this->assertTrue($isOnIndexablePage,'Seite indizierbar');
	}

	/**
	 * @group unit
	 */
	public function testIsOnIndexablePageReturnsFalseIfPidIsIncludePageTreesButAnExcludePageTreesIndexIsCloserToThePid() {
		$sourceRecord = array('pid' => 3);
		$options = array(
			'include.' => array(
				'pageTrees' => 1
			),
			'exclude.' => array(
				'pageTrees' => 2
			)
		);

		$rootline = array(
			2 => array('uid' => 3, 'pid' => 2),
			1 => array('uid' => 2, 'pid' => 1),
			0 => array('uid' => 1, 'pid' => 0),
		);
		$utilIndexer = $this->getMockClassForIsOnIndexablePageTests($rootline);

		$isOnIndexablePage = $utilIndexer->isOnIndexablePage($sourceRecord, $options);

		$this->assertFalse($isOnIndexablePage,'Seite indizierbar');
	}


	/**
	 *
	 */
	public function testIndexModelByMapping() {
		$indexDoc = tx_rnbase::makeInstance(
			'tx_mksearch_model_IndexerDocumentBase', '', ''
		);
		$indexer = tx_rnbase::makeInstance('tx_mksearch_tests_fixtures_indexer_Dummy');
		$model = tx_rnbase::makeInstance(
			'tx_rnbase_model_base', array('recordField' => 123)
		);

		tx_mksearch_util_Indexer::getInstance()->indexModelByMapping(
			$model, array('recordField' => 'documentField'), $indexDoc
		);
		$docData = $indexDoc->getData();

		$this->assertEquals(
			123, $docData['documentField']->getValue(), 'model falsch indiziert'
		);
	}

	/**
	 *
	 */
	public function testIndexModelByMappingDoesNotIndexHiddenModelsByDefault() {
		$indexDoc = tx_rnbase::makeInstance(
			'tx_mksearch_model_IndexerDocumentBase', '', ''
		);
		$indexer = tx_rnbase::makeInstance('tx_mksearch_tests_fixtures_indexer_Dummy');
		$model = tx_rnbase::makeInstance(
			'tx_rnbase_model_base', array('recordField' => 123, 'hidden' => 1)
		);

		tx_mksearch_util_Indexer::getInstance()->indexModelByMapping(
			$model, array('recordField' => 'documentField'), $indexDoc
		);
		$docData = $indexDoc->getData();

		$this->assertFalse(
			isset($docData['documentField']), 'model doch indiziert'
		);
	}

	/**
	 *
	 */
	public function testIndexModelByMappingIndexesHiddenModelsIfSet() {
		$indexDoc = tx_rnbase::makeInstance(
			'tx_mksearch_model_IndexerDocumentBase', '', ''
		);
		$indexer = tx_rnbase::makeInstance('tx_mksearch_tests_fixtures_indexer_Dummy');
		$model = tx_rnbase::makeInstance(
			'tx_rnbase_model_base', array('recordField' => 123, 'hidden' => 1)
		);

		tx_mksearch_util_Indexer::getInstance()->indexModelByMapping(
			$model, array('recordField' => 'documentField'), $indexDoc, '',
			array(), FALSE
		);
		$docData = $indexDoc->getData();

		$this->assertEquals(
			123, $docData['documentField']->getValue(), 'model falsch indiziert'
		);
	}

	/**
	 *
	 */
	public function testIndexModelByMappingWithPrefix() {
		$indexDoc = tx_rnbase::makeInstance(
			'tx_mksearch_model_IndexerDocumentBase', '', ''
		);
		$indexer = tx_rnbase::makeInstance('tx_mksearch_tests_fixtures_indexer_Dummy');
		$model = tx_rnbase::makeInstance(
			'tx_rnbase_model_base', array('recordField' => 123)
		);

		tx_mksearch_util_Indexer::getInstance()->indexModelByMapping(
			$model, array('recordField' => 'documentField'), $indexDoc, 'test_'
		);
		$docData = $indexDoc->getData();

		$this->assertEquals(
			123, $docData['test_documentField']->getValue(), 'model falsch indiziert'
		);
	}

	/**
	 *
	 */
	public function testIndexModelByMappingMapsNotEmptyFields() {
		$indexDoc = tx_rnbase::makeInstance(
			'tx_mksearch_model_IndexerDocumentBase', '', ''
		);
		$indexer = tx_rnbase::makeInstance('tx_mksearch_tests_fixtures_indexer_Dummy');
		$model = tx_rnbase::makeInstance(
			'tx_rnbase_model_base', array('recordField' => '')
		);

		tx_mksearch_util_Indexer::getInstance()->indexModelByMapping(
			$model, array('recordField' => 'documentField'), $indexDoc
		);
		$docData = $indexDoc->getData();

		$this->assertFalse(
			isset($docData['documentField']), 'model doch indiziert'
		);
	}

	/**
	 *
	 */
	public function testIndexModelByMappingMapsEmptyFieldsIfKeepEmptyOption() {
		$indexDoc = tx_rnbase::makeInstance(
				'tx_mksearch_model_IndexerDocumentBase', '', ''
		);
		$indexer = tx_rnbase::makeInstance('tx_mksearch_tests_fixtures_indexer_Dummy');
		$model = tx_rnbase::makeInstance(
				'tx_rnbase_model_base', array('recordField' => '')
		);

		tx_mksearch_util_Indexer::getInstance()->indexModelByMapping(
			$model, array('recordField' => 'documentField'), $indexDoc, '',
			array('keepEmpty' => 1)
		);
		$docData = $indexDoc->getData();

		$this->assertEquals(
			'', $docData['documentField']->getValue(), 'model falsch indiziert'
		);
	}

	/**
	 *
	 */
	public function testIndexArrayOfModelsByMapping() {
		$indexDoc = tx_rnbase::makeInstance(
			'tx_mksearch_model_IndexerDocumentBase', '', ''
		);
		$indexer = tx_rnbase::makeInstance('tx_mksearch_tests_fixtures_indexer_Dummy');
		$models = array(
			tx_rnbase::makeInstance(
				'tx_rnbase_model_base', array('recordField' => 123)
			),
			tx_rnbase::makeInstance(
				'tx_rnbase_model_base', array('recordField' => 456)
			)
		);

		tx_mksearch_util_Indexer::getInstance()->indexArrayOfModelsByMapping(
			$models, array('recordField' => 'documentField'), $indexDoc
		);
		$docData = $indexDoc->getData();

		$this->assertEquals(
			array(123, 456), $docData['documentField']->getValue(),
			'models falsch indiziert'
		);
	}

	/**
	 *
	 */
	public function testIndexArrayOfModelsByMappingDoesNotIndexHiddenModelsByDefault() {
		$indexDoc = tx_rnbase::makeInstance(
			'tx_mksearch_model_IndexerDocumentBase', '', ''
		);
		$indexer = tx_rnbase::makeInstance('tx_mksearch_tests_fixtures_indexer_Dummy');
		$models = array(
			tx_rnbase::makeInstance(
				'tx_rnbase_model_base', array('recordField' => 123)
			),
			tx_rnbase::makeInstance(
				'tx_rnbase_model_base', array('recordField' => 456, 'hidden' => 1)
			)
		);

		tx_mksearch_util_Indexer::getInstance()->indexArrayOfModelsByMapping(
			$models, array('recordField' => 'documentField'), $indexDoc
		);
		$docData = $indexDoc->getData();

		$this->assertEquals(
			array(123), $docData['documentField']->getValue(),
			'models falsch indiziert'
		);
	}

	/**
	 *
	 */
	public function testIndexArrayOfModelsByMappingIndexesHiddenModelsIfSet() {
		$indexDoc = tx_rnbase::makeInstance(
			'tx_mksearch_model_IndexerDocumentBase', '', ''
		);
		$indexer = tx_rnbase::makeInstance('tx_mksearch_tests_fixtures_indexer_Dummy');
		$models = array(
			tx_rnbase::makeInstance(
				'tx_rnbase_model_base', array('recordField' => 123)
			),
			tx_rnbase::makeInstance(
				'tx_rnbase_model_base', array('recordField' => 456, 'hidden' => 1)
			)
		);

		tx_mksearch_util_Indexer::getInstance()->indexArrayOfModelsByMapping(
			$models, array('recordField' => 'documentField'), $indexDoc, '',
			array(), FALSE
		);
		$docData = $indexDoc->getData();

		$this->assertEquals(
			array(123, 456), $docData['documentField']->getValue(),
			'models falsch indiziert'
		);
	}

	/**
	 *
	 */
	public function testIndexArrayOfModelsByMappingWithPrefix() {
		$indexDoc = tx_rnbase::makeInstance(
			'tx_mksearch_model_IndexerDocumentBase', '', ''
		);
		$indexer = tx_rnbase::makeInstance('tx_mksearch_tests_fixtures_indexer_Dummy');
		$models = array(
			tx_rnbase::makeInstance(
				'tx_rnbase_model_base', array('recordField' => 123)
			),
			tx_rnbase::makeInstance(
				'tx_rnbase_model_base', array('recordField' => 456)
			)
		);

		tx_mksearch_util_Indexer::getInstance()->indexArrayOfModelsByMapping(
			$models, array('recordField' => 'documentField'), $indexDoc, 'test_'
		);
		$docData = $indexDoc->getData();

		$this->assertEquals(
			array(123, 456), $docData['test_documentField']->getValue(), 'model falsch indiziert'
		);
	}

	/**
	 *
	 */
	public function testIndexArrayOfModelsByMappingMapsNotEmptyFields() {
		$indexDoc = tx_rnbase::makeInstance(
			'tx_mksearch_model_IndexerDocumentBase', '', ''
		);
		$indexer = tx_rnbase::makeInstance('tx_mksearch_tests_fixtures_indexer_Dummy');
		$models = array(
			tx_rnbase::makeInstance(
				'tx_rnbase_model_base', array('recordField' => '')
			),
			tx_rnbase::makeInstance(
				'tx_rnbase_model_base', array('recordField' => '')
			)
		);

		tx_mksearch_util_Indexer::getInstance()->indexArrayOfModelsByMapping(
			$models, array('recordField' => 'documentField'), $indexDoc
		);
		$docData = $indexDoc->getData();

		$this->assertFalse(
			isset($docData['documentField']), 'model doch indiziert'
		);
	}

	/**
	 * @param array $rootline
	 * @return tx_mksearch_util_Indexer
	 */
	protected function getMockClassForIsOnIndexablePageTests(array $rootline) {
		$utilIndexer = $this->getMock('tx_mksearch_util_Indexer',array('getRootlineByPid'));

		$utilIndexer->expects($this->any())
			->method('getRootlineByPid')
			->with(3)
			->will($this->returnValue($rootline));

		return $utilIndexer;
	}
}