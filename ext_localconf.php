<?php

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Ns\NsDisqusComments\Controller\NsDisqusCommentsController;
use TYPO3\CMS\Core\Utility\VersionNumberUtility;

$versionNumber =  VersionNumberUtility::convertVersionStringToArray(VersionNumberUtility::getCurrentTypo3Version());

if ($versionNumber['version_main'] <= '12') {
    ExtensionUtility::configurePlugin(
        'NsDisqusComments',
        'Comment',
        [
            NsDisqusCommentsController::class => 'disqusComments',
        ],
        // non-cacheable actions
        [
            NsDisqusCommentsController::class => 'disqusComments',
        ]
    );
}else{
    ExtensionUtility::configurePlugin(
        'NsDisqusComments',
        'Comment',
        [
            NsDisqusCommentsController::class => 'disqusComments',
        ],
        // non-cacheable actions
        [
            NsDisqusCommentsController::class => 'disqusComments',
        ],
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
    );
}