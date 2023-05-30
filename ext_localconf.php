<?php
defined('TYPO3') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'NsDisqusComments',
    'Comment',
    [
        \Ns\NsDisqusComments\Controller\NsDisqusCommentsController::class => 'disqusComments',
    ],
    // non-cacheable actions
    [
        \Ns\NsDisqusComments\Controller\NsDisqusCommentsController::class => 'disqusComments',
    ]
);

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

$iconRegistry->registerIcon(
    'ext-ns-discuss-icon',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:ns_disqus_comments/Resources/Public/Icons/ns_disqus_comments.svg']
);
