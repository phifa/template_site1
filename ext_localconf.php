<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

/***************
 * Add default RTE configuration
 */

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['customtemplate'] = 'EXT:template_site1/Configuration/Yaml/RTE/Customtemplate.yaml';
