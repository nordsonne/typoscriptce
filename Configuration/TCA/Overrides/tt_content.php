<?php

$GLOBALS['TCA']['tt_content']['types']['typoscriptce_pi1'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
        bodytext;LLL:EXT:typoscriptce/Resources/Private/Language/localang_db.xlf:typoscript,
        imageborder;LLL:EXT:typoscriptce/Resources/Private/Language/localang_db.xlf:no_cache
    ',
    'columnsOverrides' => [
        'bodytext' => [
            'defaultExtras' =>  'fixed-font : enable-tab',
            'config' => [
                'renderType' => 't3editor',
                'format' => 'typoscript'
            ]
        ]
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:typoscriptce/Resources/Private/Language/localang_db.xlf:tt_content.CType_pi1',
        'typoscriptce_pi1'
    ],
    'CType',
    'typoscriptce'
);
