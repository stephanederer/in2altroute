<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'in2altroute-eds',
    'description' => 'TYPO3 extension to support speaking urls without a subdomain or fixed path segment',
    'category' => 'fe',
    'author' => 'Oliver Eglseder',
    'author_email' => 'oliver.eglseder@in2code.de',
    'state' => 'experimental',
    'clearCacheOnLoad' => true,
    'version' => '1.0.3',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
