<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "mksearch".
 *
 * Auto generated 09-09-2014 11:32
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'MK Search',
	'description' => 'Generic highly adjustable and extendable search engine framework, using Zend Lucene, Apache Solr or ElasticSearch. But support for other search engines can be provided easily.',
	'category' => 'plugin',
	'author' => 'Michael Wagner, Hannes Bochmann, Rene Nitzsche',
	'author_email' => 'dev@dmk-ebusiness.de',
	'shy' => '',
	'dependencies' => 'rn_base',
	'version' => '2.0.13',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => 'DMK E-Business GmbH',
	'constraints' => array(
		'depends' => array(
			'rn_base' => '1.0.0-',
			'typo3' => '4.4.0-7.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'classmap' => array(
		"action/",
		"filter/",
		"hooks/",
		"indexer/",
		"lib/",
		"marker/",
		"mod1/",
		"model/",
		"scheduler/",
		"search/",
		"service/",
		"signalSlotDispatcher/",
		"util/",
		"view/",
	),
	'_md5_values_when_last_written' => 'a:308:{s:9:"ChangeLog";s:4:"74a1";s:16:"ext_autoload.php";s:4:"4848";s:21:"ext_conf_template.txt";s:4:"d583";s:12:"ext_icon.gif";s:4:"e5c2";s:17:"ext_localconf.php";s:4:"93b9";s:34:"ext_mksanitizedparameter_rules.php";s:4:"7cd5";s:14:"ext_tables.php";s:4:"ad56";s:14:"ext_tables.sql";s:4:"81b7";s:17:"flexform_main.xml";s:4:"e8d4";s:13:"locallang.xml";s:4:"7ba3";s:16:"locallang_db.xml";s:4:"79d3";s:10:"README.txt";s:4:"e2cb";s:7:"tca.php";s:4:"e171";s:48:"action/class.tx_mksearch_action_CacheHandler.php";s:4:"d3be";s:42:"action/class.tx_mksearch_action_Search.php";s:4:"a95d";s:46:"action/class.tx_mksearch_action_SearchSolr.php";s:4:"b970";s:43:"action/class.tx_mksearch_action_ShowHit.php";s:4:"64ec";s:21:"cli/configuration.php";s:4:"cb90";s:15:"cli/crawler.php";s:4:"0e62";s:14:"doc/manual.sxw";s:4:"95c2";s:19:"doc/wizard_form.dat";s:4:"64ca";s:20:"doc/wizard_form.html";s:4:"4a3d";s:45:"filter/class.tx_mksearch_filter_FacetBase.php";s:4:"3079";s:46:"filter/class.tx_mksearch_filter_LuceneBase.php";s:4:"a2d8";s:51:"filter/class.tx_mksearch_filter_SearchByReferer.php";s:4:"713c";s:52:"filter/class.tx_mksearch_filter_SolrAutocomplete.php";s:4:"9753";s:44:"filter/class.tx_mksearch_filter_SolrBase.php";s:4:"18e5";s:50:"hooks/class.tx_mksearch_hooks_EngineZendLucene.php";s:4:"ce4b";s:51:"hooks/class.tx_mksearch_hooks_IndexerAutoUpdate.php";s:4:"9af1";s:21:"icons/icon_folder.gif";s:4:"b757";s:43:"icons/icon_tx_mksearch_configcomposites.gif";s:4:"475a";s:39:"icons/icon_tx_mksearch_indexconfigs.gif";s:4:"475a";s:34:"icons/icon_tx_mksearch_indices.gif";s:4:"475a";s:30:"icons/tx_mksearch_keywords.gif";s:4:"475a";s:42:"indexer/class.tx_mksearch_indexer_Base.php";s:4:"ec12";s:47:"indexer/class.tx_mksearch_indexer_BaseMedia.php";s:4:"4b24";s:41:"indexer/class.tx_mksearch_indexer_Cal.php";s:4:"8052";s:46:"indexer/class.tx_mksearch_indexer_DamMedia.php";s:4:"eecf";s:42:"indexer/class.tx_mksearch_indexer_Efaq.php";s:4:"fad3";s:41:"indexer/class.tx_mksearch_indexer_FAL.php";s:4:"2072";s:43:"indexer/class.tx_mksearch_indexer_Irfaq.php";s:4:"c155";s:42:"indexer/class.tx_mksearch_indexer_Page.php";s:4:"4f25";s:54:"indexer/class.tx_mksearch_indexer_TtAddressAddress.php";s:4:"249f";s:47:"indexer/class.tx_mksearch_indexer_TtContent.php";s:4:"b78a";s:48:"indexer/class.tx_mksearch_indexer_TtNewsNews.php";s:4:"3ae9";s:25:"indexer/ext_localconf.php";s:4:"15c4";s:63:"indexer/seminars/class.tx_mksearch_indexer_seminars_Seminar.php";s:4:"c5a3";s:74:"indexer/seminars/class.tx_mksearch_indexer_seminars_SeminarObjectType0.php";s:4:"ed69";s:74:"indexer/seminars/class.tx_mksearch_indexer_seminars_SeminarObjectType1.php";s:4:"ae42";s:64:"indexer/ttcontent/class.tx_mksearch_indexer_ttcontent_Normal.php";s:4:"e7d7";s:69:"indexer/ttcontent/class.tx_mksearch_indexer_ttcontent_Templavoila.php";s:4:"e59d";s:54:"interface/class.tx_mksearch_interface_DataProvider.php";s:4:"eed8";s:49:"interface/class.tx_mksearch_interface_Indexer.php";s:4:"9b43";s:57:"interface/class.tx_mksearch_interface_IndexerDocument.php";s:4:"f869";s:54:"interface/class.tx_mksearch_interface_IndexerField.php";s:4:"a306";s:54:"interface/class.tx_mksearch_interface_SearchEngine.php";s:4:"4482";s:51:"interface/class.tx_mksearch_interface_SearchHit.php";s:4:"5ce1";s:18:"lib/Apache/COPYING";s:4:"ff85";s:28:"lib/Apache/Solr/Document.php";s:4:"87f4";s:29:"lib/Apache/Solr/Exception.php";s:4:"8cea";s:42:"lib/Apache/Solr/HttpTransportException.php";s:4:"d114";s:44:"lib/Apache/Solr/InvalidArgumentException.php";s:4:"5fa0";s:47:"lib/Apache/Solr/NoServiceAvailableException.php";s:4:"84c7";s:35:"lib/Apache/Solr/ParserException.php";s:4:"1544";s:28:"lib/Apache/Solr/Response.php";s:4:"f076";s:27:"lib/Apache/Solr/Service.php";s:4:"fe36";s:42:"lib/Apache/Solr/HttpTransport/Abstract.php";s:4:"bba8";s:38:"lib/Apache/Solr/HttpTransport/Curl.php";s:4:"517d";s:45:"lib/Apache/Solr/HttpTransport/CurlNoReuse.php";s:4:"82b5";s:49:"lib/Apache/Solr/HttpTransport/FileGetContents.php";s:4:"42ec";s:43:"lib/Apache/Solr/HttpTransport/Interface.php";s:4:"9224";s:42:"lib/Apache/Solr/HttpTransport/Response.php";s:4:"5d87";s:36:"lib/Apache/Solr/Service/Balancer.php";s:4:"01dd";s:44:"marker/class.tx_mksearch_marker_CorePage.php";s:4:"4351";s:49:"marker/class.tx_mksearch_marker_CoreTtContent.php";s:4:"7f0b";s:46:"marker/class.tx_mksearch_marker_CoreTtNews.php";s:4:"39b5";s:41:"marker/class.tx_mksearch_marker_Facet.php";s:4:"c139";s:43:"marker/class.tx_mksearch_marker_General.php";s:4:"cf27";s:48:"marker/class.tx_mksearch_marker_GroupedFacet.php";s:4:"3174";s:41:"marker/class.tx_mksearch_marker_Irfaq.php";s:4:"de5d";s:42:"marker/class.tx_mksearch_marker_Search.php";s:4:"e401";s:54:"marker/class.tx_mksearch_marker_SearchResultSimple.php";s:4:"4eb0";s:45:"mod1/class.tx_mksearch_mod1_ConfigIndizes.php";s:4:"99e0";s:51:"mod1/class.tx_mksearch_mod1_ConfigIndizesDbList.php";s:4:"2bd7";s:45:"mod1/class.tx_mksearch_mod1_IndizeIndizes.php";s:4:"55e8";s:40:"mod1/class.tx_mksearch_mod1_Keywords.php";s:4:"8724";s:41:"mod1/class.tx_mksearch_mod1_SolrAdmin.php";s:4:"7d82";s:13:"mod1/conf.php";s:4:"9249";s:19:"mod1/ext_tables.php";s:4:"0dee";s:14:"mod1/index.php";s:4:"db8d";s:18:"mod1/locallang.xml";s:4:"abbe";s:22:"mod1/locallang_mod.xml";s:4:"a162";s:19:"mod1/moduleicon.gif";s:4:"e5c2";s:21:"mod1/pageTSconfig.txt";s:4:"2fba";s:18:"mod1/template.html";s:4:"c012";s:61:"mod1/decorator/class.tx_mksearch_mod1_decorator_Composite.php";s:4:"a7b8";s:57:"mod1/decorator/class.tx_mksearch_mod1_decorator_Index.php";s:4:"d127";s:65:"mod1/decorator/class.tx_mksearch_mod1_decorator_IndexerConfig.php";s:4:"84b6";s:59:"mod1/decorator/class.tx_mksearch_mod1_decorator_Indizes.php";s:4:"4d3c";s:59:"mod1/decorator/class.tx_mksearch_mod1_decorator_Keyword.php";s:4:"d62e";s:52:"mod1/handler/class.tx_mksearch_mod1_handler_Base.php";s:4:"8a22";s:57:"mod1/handler/class.tx_mksearch_mod1_handler_Composite.php";s:4:"6c6d";s:53:"mod1/handler/class.tx_mksearch_mod1_handler_Index.php";s:4:"e046";s:61:"mod1/handler/class.tx_mksearch_mod1_handler_IndexerConfig.php";s:4:"cd8c";s:64:"mod1/handler/admin/class.tx_mksearch_mod1_handler_admin_Solr.php";s:4:"3fe2";s:62:"mod1/searcher/class.tx_mksearch_mod1_searcher_abstractBase.php";s:4:"77b4";s:59:"mod1/searcher/class.tx_mksearch_mod1_searcher_Composite.php";s:4:"ee04";s:55:"mod1/searcher/class.tx_mksearch_mod1_searcher_Index.php";s:4:"a93e";s:63:"mod1/searcher/class.tx_mksearch_mod1_searcher_IndexerConfig.php";s:4:"3e54";s:58:"mod1/searcher/class.tx_mksearch_mod1_searcher_Keywords.php";s:4:"d084";s:25:"mod1/templates/admin.html";s:4:"aac4";s:33:"mod1/templates/configindizes.html";s:4:"23d6";s:39:"mod1/templates/configindizesdblist.html";s:4:"2ff9";s:33:"mod1/templates/indizeindizes.html";s:4:"3b96";s:28:"mod1/templates/keywords.html";s:4:"dae5";s:60:"mod1/util/class.tx_mksearch_mod1_util_IndexStatusHandler.php";s:4:"4695";s:46:"mod1/util/class.tx_mksearch_mod1_util_Misc.php";s:4:"eb90";s:55:"mod1/util/class.tx_mksearch_mod1_util_SearchBuilder.php";s:4:"ca47";s:50:"mod1/util/class.tx_mksearch_mod1_util_Selector.php";s:4:"52fc";s:50:"mod1/util/class.tx_mksearch_mod1_util_Template.php";s:4:"abfe";s:39:"model/class.tx_mksearch_model_Facet.php";s:4:"8e3a";s:53:"model/class.tx_mksearch_model_IndexerDocumentBase.php";s:4:"c1f4";s:50:"model/class.tx_mksearch_model_IndexerFieldBase.php";s:4:"d403";s:52:"model/class.tx_mksearch_model_internal_Composite.php";s:4:"b127";s:43:"model/class.tx_mksearch_model_SearchHit.php";s:4:"319f";s:41:"model/class.tx_mksearch_model_SolrHit.php";s:4:"22c1";s:44:"model/class.tx_mksearch_model_Suggestion.php";s:4:"9e12";s:50:"model/cal/class.tx_mksearch_model_cal_Calendar.php";s:4:"67c5";s:50:"model/cal/class.tx_mksearch_model_cal_Category.php";s:4:"56f2";s:47:"model/cal/class.tx_mksearch_model_cal_Event.php";s:4:"c3fd";s:90:"model/engineSpecific/lucene/class.tx_mksearch_model_engineSpecific_lucene_IndexerField.php";s:4:"f12b";s:86:"model/engineSpecific/solr/class.tx_mksearch_model_engineSpecific_solr_IndexerField.php";s:4:"9e71";s:61:"model/internal/class.tx_mksearch_model_internal_Composite.php";s:4:"b127";s:58:"model/internal/class.tx_mksearch_model_internal_Config.php";s:4:"061e";s:57:"model/internal/class.tx_mksearch_model_internal_Index.php";s:4:"760c";s:59:"model/internal/class.tx_mksearch_model_internal_Keyword.php";s:4:"06ce";s:54:"model/irfaq/class.tx_mksearch_model_irfaq_Category.php";s:4:"5337";s:52:"model/irfaq/class.tx_mksearch_model_irfaq_Expert.php";s:4:"55e1";s:54:"model/irfaq/class.tx_mksearch_model_irfaq_Question.php";s:4:"2573";s:20:"res/help/ext_csh.php";s:4:"a709";s:34:"res/help/locallang_csh_indices.xml";s:4:"e020";s:26:"res/js/jquery-1.6.2.min.js";s:4:"a1a8";s:39:"res/js/jquery-ui-1.8.15.autocomplete.js";s:4:"f2ee";s:43:"res/js/jquery-ui-1.8.15.autocomplete.min.js";s:4:"e215";s:31:"res/js/jquery-ui-1.8.15.core.js";s:4:"2070";s:35:"res/js/jquery-ui-1.8.15.core.min.js";s:4:"75bc";s:51:"scheduler/class.tx_mksearch_scheduler_IndexTask.php";s:4:"a57f";s:67:"scheduler/class.tx_mksearch_scheduler_IndexTaskAddFieldProvider.php";s:4:"978e";s:45:"search/class.tx_mksearch_search_Composite.php";s:4:"a725";s:42:"search/class.tx_mksearch_search_Config.php";s:4:"dd33";s:41:"search/class.tx_mksearch_search_Index.php";s:4:"1f3d";s:43:"search/class.tx_mksearch_search_Keyword.php";s:4:"d200";s:56:"search/irfaq/class.tx_mksearch_search_irfaq_Category.php";s:4:"0173";s:54:"search/irfaq/class.tx_mksearch_search_irfaq_Expert.php";s:4:"8dda";s:56:"search/irfaq/class.tx_mksearch_search_irfaq_Question.php";s:4:"8e1b";s:42:"service/class.tx_mksearch_service_Base.php";s:4:"a4c3";s:25:"service/ext_localconf.php";s:4:"90d5";s:52:"service/dp/class.tx_mksearch_service_dp_Database.php";s:4:"23af";s:52:"service/dp/class.tx_mksearch_service_dp_RnBaseDB.php";s:4:"23c6";s:56:"service/engine/class.tx_mksearch_service_engine_Solr.php";s:4:"e5ba";s:65:"service/engine/class.tx_mksearch_service_engine_SolrException.php";s:4:"56de";s:62:"service/engine/class.tx_mksearch_service_engine_ZendLucene.php";s:4:"eccc";s:80:"service/engine/lucene/class.tx_mksearch_service_engine_lucene_DataTypeMapper.php";s:4:"702e";s:58:"service/indexer/class.tx_mksearch_service_indexer_Base.php";s:4:"4b49";s:66:"service/indexer/class.tx_mksearch_service_indexer_BaseDataBase.php";s:4:"bbd0";s:70:"service/indexer/class.tx_mksearch_service_indexer_BaseRnBaseSearch.php";s:4:"d9cc";s:70:"service/indexer/core/class.tx_mksearch_service_indexer_core_Config.php";s:4:"75a5";s:68:"service/indexer/core/class.tx_mksearch_service_indexer_core_Page.php";s:4:"8766";s:70:"service/indexer/core/class.tx_mksearch_service_indexer_core_PageTV.php";s:4:"8189";s:60:"service/internal/class.tx_mksearch_service_internal_Base.php";s:4:"e863";s:65:"service/internal/class.tx_mksearch_service_internal_Composite.php";s:4:"332f";s:62:"service/internal/class.tx_mksearch_service_internal_Config.php";s:4:"54dd";s:61:"service/internal/class.tx_mksearch_service_internal_Index.php";s:4:"c756";s:63:"service/internal/class.tx_mksearch_service_internal_Keyword.php";s:4:"f5c0";s:58:"service/irfaq/class.tx_mksearch_service_irfaq_Category.php";s:4:"7568";s:56:"service/irfaq/class.tx_mksearch_service_irfaq_Expert.php";s:4:"ee13";s:58:"service/irfaq/class.tx_mksearch_service_irfaq_Question.php";s:4:"cb7d";s:30:"solr/conf/dictionaryGerman.txt";s:4:"fc44";s:21:"solr/conf/elevate.xml";s:4:"c8c5";s:23:"solr/conf/protwords.txt";s:4:"f213";s:20:"solr/conf/schema.xml";s:4:"2db5";s:28:"solr/conf/solrconfig-3.x.xml";s:4:"fcc8";s:28:"solr/conf/solrconfig-4.x.xml";s:4:"759e";s:23:"solr/conf/stopwords.txt";s:4:"cbf5";s:29:"solr/conf/stopwordsGerman.txt";s:4:"691b";s:22:"solr/conf/synonyms.txt";s:4:"b721";s:28:"solr/conf/synonymsGerman.txt";s:4:"d30b";s:54:"solr/lib/Dmk-MultiWordSpellingQueryConverter-Solr4.jar";s:4:"ebaf";s:32:"solr/lib/dmk-solr-core-3.5.0.jar";s:4:"ac5b";s:46:"static/static_extension_template/constants.txt";s:4:"d41d";s:42:"static/static_extension_template/setup.txt";s:4:"483e";s:18:"tca/ext_tables.php";s:4:"39e0";s:11:"tca/tca.php";s:4:"4a2b";s:24:"tca/hooks/ext_tables.php";s:4:"ce6e";s:24:"tca/hooks/tt_content.php";s:4:"5555";s:25:"templates/searchForm.html";s:4:"9683";s:27:"templates/searchlucene.html";s:4:"9645";s:30:"templates/searchResultCal.html";s:4:"de51";s:31:"templates/searchResultEfaq.html";s:4:"312b";s:32:"templates/searchResultIrfaq.html";s:4:"e2c1";s:34:"templates/searchResultSeminar.html";s:4:"3d61";s:33:"templates/searchResultSimple.html";s:4:"ffdf";s:25:"templates/searchsolr.html";s:4:"68bc";s:22:"templates/showhit.html";s:4:"f042";s:44:"tests/class.tx_mksearch_tests_DbTestcase.php";s:4:"eb0c";s:46:"tests/class.tx_mksearch_tests_SolrTestcase.php";s:4:"01ea";s:42:"tests/class.tx_mksearch_tests_Testcase.php";s:4:"209b";s:38:"tests/class.tx_mksearch_tests_Util.php";s:4:"0003";s:17:"tests/phpunit.xml";s:4:"f221";s:67:"tests/action/class.tx_mksearch_tests_action_SearchSolr_testcase.php";s:4:"c5cc";s:67:"tests/filter/class.tx_mksearch_tests_filter_LuceneBase_testcase.php";s:4:"97b1";s:70:"tests/filter/class.tx_mksearch_tests_filter_SolrBase_solr_testcase.php";s:4:"d1ac";s:65:"tests/filter/class.tx_mksearch_tests_filter_SolrBase_testcase.php";s:4:"ab6a";s:34:"tests/fixtures/db/cal_category.xml";s:4:"95a3";s:43:"tests/fixtures/db/cal_event_category_mm.xml";s:4:"9a57";s:31:"tests/fixtures/db/irfaq_cat.xml";s:4:"65fe";s:34:"tests/fixtures/db/irfaq_expert.xml";s:4:"a5c3";s:29:"tests/fixtures/db/irfaq_q.xml";s:4:"3202";s:36:"tests/fixtures/db/irfaq_q_cat_mm.xml";s:4:"b073";s:27:"tests/fixtures/db/pages.xml";s:4:"2247";s:30:"tests/fixtures/db/pages_tv.xml";s:4:"50aa";s:30:"tests/fixtures/db/seminars.xml";s:4:"6183";s:41:"tests/fixtures/db/seminars_categories.xml";s:4:"f037";s:44:"tests/fixtures/db/seminars_categories_mm.xml";s:4:"ec3c";s:41:"tests/fixtures/db/seminars_organizers.xml";s:4:"401c";s:44:"tests/fixtures/db/seminars_organizers_mm.xml";s:4:"c659";s:39:"tests/fixtures/db/seminars_place_mm.xml";s:4:"347d";s:36:"tests/fixtures/db/seminars_sites.xml";s:4:"75b6";s:39:"tests/fixtures/db/seminars_speakers.xml";s:4:"f2f6";s:42:"tests/fixtures/db/seminars_speakers_mm.xml";s:4:"d853";s:44:"tests/fixtures/db/seminars_target_groups.xml";s:4:"e40d";s:47:"tests/fixtures/db/seminars_target_groups_mm.xml";s:4:"61a6";s:40:"tests/fixtures/db/seminars_timeslots.xml";s:4:"00a6";s:52:"tests/fixtures/db/seminars_timeslots_speakers_mm.xml";s:4:"c171";s:34:"tests/fixtures/db/sys_refindex.xml";s:4:"f435";s:32:"tests/fixtures/db/tt_content.xml";s:4:"727e";s:35:"tests/fixtures/db/tt_content_tv.xml";s:4:"e776";s:33:"tests/fixtures/db/tt_news_cat.xml";s:4:"e221";s:36:"tests/fixtures/db/tt_news_cat_mm.xml";s:4:"5ba6";s:73:"tests/fixtures/indexer/class.tx_mksearch_tests_fixtures_indexer_Dummy.php";s:4:"2f22";s:44:"tests/fixtures/solr/fegroup/groupsetto1.yaml";s:4:"b760";s:47:"tests/fixtures/solr/fegroup/groupsettozero.yaml";s:4:"1511";s:43:"tests/fixtures/solr/fegroup/nogroupset.yaml";s:4:"e326";s:65:"tests/fixtures/solr/start-endtime/endtimeokaybutstarttimenot.yaml";s:4:"d3f8";s:57:"tests/fixtures/solr/start-endtime/endtimesettofuture.yaml";s:4:"05fb";s:55:"tests/fixtures/solr/start-endtime/endtimesettopast.yaml";s:4:"e776";s:51:"tests/fixtures/solr/start-endtime/noendtimeset.yaml";s:4:"e326";s:53:"tests/fixtures/solr/start-endtime/nostarttimeset.yaml";s:4:"e326";s:62:"tests/fixtures/solr/start-endtime/starttimeandendtimeokay.yaml";s:4:"b107";s:65:"tests/fixtures/solr/start-endtime/starttimeokaybutendtimenot.yaml";s:4:"3191";s:59:"tests/fixtures/solr/start-endtime/starttimesettofuture.yaml";s:4:"1efb";s:57:"tests/fixtures/solr/start-endtime/starttimesettopast.yaml";s:4:"1f5b";s:25:"tests/fixtures/txt/ä.txt";s:4:"1e2d";s:85:"tests/fixtures/typo3/class.tx_mksearch_tests_fixtures_typo3_CoreDbRelationHandler.php";s:4:"4bbd";s:66:"tests/indexer/class.tx_mksearch_tests_indexer_Base_DB_testcase.php";s:4:"b4de";s:63:"tests/indexer/class.tx_mksearch_tests_indexer_Base_testcase.php";s:4:"6e03";s:62:"tests/indexer/class.tx_mksearch_tests_indexer_Cal_testcase.php";s:4:"ae64";s:67:"tests/indexer/class.tx_mksearch_tests_indexer_DamMedia_testcase.php";s:4:"19bf";s:62:"tests/indexer/class.tx_mksearch_tests_indexer_FAL_testcase.php";s:4:"5ac7";s:64:"tests/indexer/class.tx_mksearch_tests_indexer_Irfaq_testcase.php";s:4:"188d";s:66:"tests/indexer/class.tx_mksearch_tests_indexer_Page_DB_testcase.php";s:4:"2475";s:63:"tests/indexer/class.tx_mksearch_tests_indexer_Page_testcase.php";s:4:"cb40";s:71:"tests/indexer/class.tx_mksearch_tests_indexer_TtContent_DB_testcase.php";s:4:"612b";s:68:"tests/indexer/class.tx_mksearch_tests_indexer_TtContent_testcase.php";s:4:"48dc";s:73:"tests/indexer/class.tx_mksearch_tests_indexer_TtContentTv_DB_testcase.php";s:4:"134b";s:72:"tests/indexer/class.tx_mksearch_tests_indexer_TtNewsNews_DB_testcase.php";s:4:"0227";s:69:"tests/indexer/class.tx_mksearch_tests_indexer_TtNewsNews_testcase.php";s:4:"ad62";s:84:"tests/indexer/seminars/class.tx_mksearch_tests_indexer_seminars_Seminar_testcase.php";s:4:"95f3";s:42:"tests/lib/Apache/Solr/Service_testcase.php";s:4:"e95a";s:62:"tests/marker/class.tx_mksearch_tests_marker_Facet_testcase.php";s:4:"d78a";s:62:"tests/marker/class.tx_mksearch_tests_marker_Irfaq_testcase.php";s:4:"487b";s:75:"tests/marker/class.tx_mksearch_tests_marker_SearchResultSimple_testcase.php";s:4:"8221";s:74:"tests/model/class.tx_mksearch_tests_model_IndexerDocumentBase_testcase.php";s:4:"3a65";s:62:"tests/model/class.tx_mksearch_tests_model_SolrHit_testcase.php";s:4:"3af4";s:68:"tests/model/cal/class.tx_mksearch_tests_model_cal_Event_testcase.php";s:4:"426d";s:101:"tests/service/engine/lucene/class.tx_mksearch_tests_service_engine_lucene_DataTypeMapper_testcase.php";s:4:"e583";s:82:"tests/service/internal/class.tx_mksearch_tests_service_internal_Index_testcase.php";s:4:"2f2b";s:73:"tests/solr/conf/class.tx_mksearch_tests_solr_conf_Solrconfig_testcase.php";s:4:"79bd";s:65:"tests/util/class.tx_mksearch_tests_util_FacetBuilder_testcase.php";s:4:"153e";s:60:"tests/util/class.tx_mksearch_tests_util_Indexer_testcase.php";s:4:"31fc";s:66:"tests/util/class.tx_mksearch_tests_util_KeyValueFacet_testcase.php";s:4:"563d";s:57:"tests/util/class.tx_mksearch_tests_util_Misc_testcase.php";s:4:"7975";s:65:"tests/util/class.tx_mksearch_tests_util_ResolverT3DB_testcase.php";s:4:"bf45";s:66:"tests/util/class.tx_mksearch_tests_util_SearchBuilder_testcase.php";s:4:"7054";s:70:"tests/util/class.tx_mksearch_tests_util_SuggestionBuilder_testcase.php";s:4:"9a8a";s:57:"tests/util/class.tx_mksearch_tests_util_Tika_testcase.php";s:4:"1df3";s:61:"tests/util/class.tx_mksearch_tests_util_UserFunc_testcase.php";s:4:"440b";s:38:"util/class.tx_mksearch_util_Config.php";s:4:"a805";s:44:"util/class.tx_mksearch_util_FacetBuilder.php";s:4:"a53e";s:38:"util/class.tx_mksearch_util_Filter.php";s:4:"b0ae";s:39:"util/class.tx_mksearch_util_Indexer.php";s:4:"5255";s:45:"util/class.tx_mksearch_util_KeyValueFacet.php";s:4:"4370";s:36:"util/class.tx_mksearch_util_Misc.php";s:4:"af7e";s:44:"util/class.tx_mksearch_util_ResolverT3DB.php";s:4:"6b45";s:45:"util/class.tx_mksearch_util_SearchBuilder.php";s:4:"6fae";s:47:"util/class.tx_mksearch_util_ServiceRegistry.php";s:4:"c995";s:48:"util/class.tx_mksearch_util_SolrAutocomplete.php";s:4:"9c02";s:53:"util/class.tx_mksearch_util_SolrResponseProcessor.php";s:4:"68ef";s:38:"util/class.tx_mksearch_util_Status.php";s:4:"027a";s:49:"util/class.tx_mksearch_util_SuggestionBuilder.php";s:4:"a9ac";s:35:"util/class.tx_mksearch_util_TCA.php";s:4:"ed2a";s:36:"util/class.tx_mksearch_util_Tika.php";s:4:"fd4a";s:36:"util/class.tx_mksearch_util_Tree.php";s:4:"2fa3";s:40:"util/class.tx_mksearch_util_UserFunc.php";s:4:"b363";s:39:"util/class.tx_mksearch_util_Wizicon.php";s:4:"f666";s:38:"view/class.tx_mksearch_view_Search.php";s:4:"2f7d";s:42:"view/class.tx_mksearch_view_SearchSolr.php";s:4:"b52f";s:39:"view/class.tx_mksearch_view_ShowHit.php";s:4:"4bbb";}',
);
