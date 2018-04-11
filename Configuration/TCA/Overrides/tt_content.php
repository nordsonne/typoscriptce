<?php

$GLOBALS['TCA']['tt_content']['types']['typoscriptce_pi1']['showitem']=
    'CType;;4;button;1-1-1,header;;3;;1-1-1,bodytext;LLL:EXT:typoscriptce/Resources/Private/Language/localang_db.xlf:typoscript,imageborder;LLL:EXT:typoscriptce/Resources/Private/Language/localang_db.xlf:no_cache,2-2-2';

$GLOBALS['TCA']['tt_content']['columns']['bodytext']['defaultExtras'] =
    'fixed-font : enable-tab';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:typoscriptce/Resources/Private/Language/localang_db.xlf:tt_content.CType_pi1',
        'typoscriptce_pi1'
    ],
    'CType',
    'typoscriptce'
);
