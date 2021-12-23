<?php
defined('TYPO3_MODE') || die('Access denied.');

if (version_compare(TYPO3_branch, '10.0', '>=')) {
    $moduleClass = \Ns\NsDisqusComments\Controller\NsDisqusCommentsController::class;
} else {
    $moduleClass = 'NsDisqusComments';
}
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Ns.NsDisqusComments',
    'Comment',
    [
        $moduleClass => 'disqusComments',
    ],
    // non-cacheable actions
    [
        $moduleClass => 'disqusComments',
    ]
);

if (version_compare(TYPO3_branch, '7.0', '>')) {
    if (TYPO3_MODE === 'BE') {
        $icons = [
            'ext-ns-discuss-icon' => 'ns_disqus_comments.svg',
        ];
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        foreach ($icons as $identifier => $path) {
            $iconRegistry->registerIcon(
                $identifier,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:ns_disqus_comments/Resources/Public/Icons/' . $path]
            );
        }
    }
}
