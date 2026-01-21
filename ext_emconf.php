<?php

$EM_CONF['ns_disqus_comments'] = [
    'title' => 'TYPO3 Disqus Integration',
    'description' => 'Integrate the Disqus comment system seamlessly into your TYPO3 website. Allow users to post comments using their social accounts and stay engaged through notifications and replies.',
    
    'category' => 'plugin',
    'author' => 'Team T3Planet',
    'author_email' => 'info@t3planet.de',
    'author_company' => 'T3Planet',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'version' => '13.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.37-14.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
