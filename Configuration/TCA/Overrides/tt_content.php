<?php

defined('TYPO3') or die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

/***************
 * Plugin
 */
$pluginSignature = ExtensionUtility::registerPlugin(
    'NsDisqusComments',
    'Comment',
    'Disqus Comment',
    'ext-ns-discuss-icon',
    'plugins'
   
);

/* Flexform setting  */
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'recursive,select_key,pages';
/* Add the Flexform configuration */
