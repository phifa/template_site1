<?php
defined('TYPO3_MODE') || die();


/***************
 * TypoScript Include
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'template_site1', 
    'Configuration/TypoScript/Setup', 
    'Name of site extension'
);