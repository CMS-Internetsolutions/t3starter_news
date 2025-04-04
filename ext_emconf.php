<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'T3Starter News Extension',
    'description' => 'Very simple news extension optimized for Bootstrap 5.3.',
    'category' => 'fe',
    'version' => '1.0.0',
    'state' => 'beta',
    'author' => 'www.t3starter.de',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'fluid_styled_content' => '12.4.0-13.4.99',
            'rte_ckeditor' => '12.4.0-13.4.99',
            'seo' => '12.4.0-13.4.99',
            'indexed_search' => '12.4.0-13.4.99',
        ],
        'conflicts' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'T3starter\\T3starterNews\\' => 'Classes',
        ],
    ]
];
