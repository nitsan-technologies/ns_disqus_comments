<?php

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Ns\NsDisqusComments\Controller\NsDisqusCommentsController;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

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

$iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);

$iconRegistry->registerIcon(
    'ext-ns-discuss-icon',
    SvgIconProvider::class,
    ['source' => 'EXT:ns_disqus_comments/Resources/Public/Icons/ns_disqus_comments.svg']
);
