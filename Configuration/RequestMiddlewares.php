<?php
return [
    'frontend' => [
        'typo3/cms-frontend/site' => [
            'target' => \In2code\In2altroute\Frontend\Middleware\SiteResolver::class,
            'after' => [
                'typo3/cms-core/normalized-params-attribute',
            ],
            'before' => [
                'typo3/cms-frontend/authentication',
                'typo3/cms-frontend/backend-user-authentication',
                'typo3/cms-frontend/page-resolver'
            ],
        ],
    ],
];
