<?php
if (!defined('TYPO3')) {
    die('Access denied.');
}

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:typoscriptce/Configuration/TsConfig/Wizards/TypoScriptCe.tsconfig">'
    );

    // Register for hook to show preview of tt_content element of CType="typoscriptce_pi1" in page module
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['typoscriptce_pi1'] =
        \SvenJuergens\Typoscriptce\Hooks\PageLayoutView\TyposcriptcePreviewRenderer::class;

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'typoscriptce',
        'setup',
        "@import 'EXT:typoscriptce/Configuration/TypoScript/setup.typoscript'"
    );
});
