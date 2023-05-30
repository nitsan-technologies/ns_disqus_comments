<?php
defined('TYPO3') or die();

/***************
 * Plugin
 */
$pluginSignature = \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
     'NsDisqusComments',
     'Comment',
     '[NITSAN] Disqus Comment'
 );

 /* Flexform setting  */
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'recursive,select_key,pages';
