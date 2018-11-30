<?php
defined('TYPO3_MODE') || die();


/***************
 * TSconfig Include
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'template_site1',
    'Configuration/TsConfig/Page.tsconfig',
    'Name of site extension'
);