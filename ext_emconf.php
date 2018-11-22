<?php

//#######################################################################
// Extension Manager/Repository config file for ext: "typoscriptce"
//
// Auto generated 18-12-2009 17:22
//
// Manual updates:
// Only the data in the array - anything else is removed by next write.
// "version" and "dependencies" must not be touched!
//#######################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Typoscript CE',
    'description' => 'process any typoscript in a CE',
    'category' => 'plugin',
    'shy' => 0,
    'version' => '0.1.2',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'Steffen Kamper, Sven Jürgens',
    'author_email' => 'sj@nordsonne.de',
    'author_company' => '',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => [
        'depends' => [],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
            'psr-4' => ['SvenJuergens\\Typoscriptce\\' => 'Classes'],
            'classmap' => ['pi1']
        ],
];
