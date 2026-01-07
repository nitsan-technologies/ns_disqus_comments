<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'ext-ns-discuss-icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:ns_disqus_comments/Resources/Public/Icons/ns_disqus_comments.svg',
    ],
];
