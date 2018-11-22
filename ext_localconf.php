<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'typoscriptce',
    'pi1/class.tx_typoscriptce_pi1.php',
    '_pi1',
    'CType',
    1
);

// Register for hook to show preview of tt_content element of CType="typoscriptce_pi1" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['typoscriptce_pi1'] =
    \SvenJuergens\Typoscriptce\Hooks\PageLayoutView\TyposcriptcePreviewRenderer::class;
