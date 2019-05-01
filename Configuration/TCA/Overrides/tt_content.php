<?php
defined('TYPO3_MODE') or die();

/***************
 * Plugin
 */
 \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
 	'Ns.NsDisqusComments',
    'Comment',
    '[NITSAN] Disqus Comment'
 );

 /* Flexform setting  */
$pluginSignature = 'nsdisquscomments_comment';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'recursive,select_key,pages';