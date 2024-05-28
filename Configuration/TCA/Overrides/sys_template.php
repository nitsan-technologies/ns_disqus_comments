<?php

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$extKey = 'ns_disqus_comments';

ExtensionManagementUtility::addStaticFile(
    $extKey,
    'Configuration/TypoScript',
    'Disqus Comment'
);
