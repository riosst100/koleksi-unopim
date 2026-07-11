<?php

return [
    'index' => [
        'title'             => 'Product Database',
        'description'       => 'Manage your internal product database from one dedicated workspace.',
        'empty-title'       => 'Product Database page is ready',
        'empty-description' => 'This module is registered from its own package and appears below Catalog as a standalone menu.',
    ],

    'components' => [
        'layouts' => [
            'sidebar' => [
                'product-database' => 'Product Database',
            ],
        ],
    ],

    'acl' => [
        'product-database' => 'Product Database',
    ],
];
