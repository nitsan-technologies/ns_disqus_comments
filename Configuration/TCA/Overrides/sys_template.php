<?php

defined('TYPO3_MODE') or die();

$extKey = 'ns_disqus_comments';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $extKey,
    'Configuration/TypoScript',
    'Disqus Comment'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
  'tx_nsdisquscomments_domain_model_comment'
);
