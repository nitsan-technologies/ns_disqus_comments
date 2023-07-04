<?php

defined('TYPO3') or die();

$extKey = 'ns_disqus_comments';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', '[NITSAN] Nitsan Disqus Comment');
