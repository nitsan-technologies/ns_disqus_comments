<?php

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Ns\NsDisqusComments\Controller\NsDisqusCommentsController;
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
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );