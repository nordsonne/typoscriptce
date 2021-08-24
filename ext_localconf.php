<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'typoscriptce',
        'Pi1',
        [
            'TypoScript' => 'index'
        ],
        [
            'TypoScript' => ''
        ]
    );

    // Register for hook to show preview of tt_content element of CType="typoscriptce_pi1" in page module
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['typoscriptce_pi1'] =
        \SvenJuergens\Typoscriptce\Hooks\PageLayoutView\TyposcriptcePreviewRenderer::class;
});
