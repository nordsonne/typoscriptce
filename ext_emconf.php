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
    '_md5_values_when_last_written' => 'a:10:{s:9:"ChangeLog";s:4:"97f1";s:10:"README.txt";s:4:"9fa9";s:12:"ext_icon.gif";s:4:"49b5";s:17:"ext_localconf.php";s:4:"a0b8";s:14:"ext_tables.php";s:4:"a134";s:16:"locallang_db.xml";s:4:"4b44";s:14:"doc/manual.sxw";s:4:"cc95";s:19:"doc/wizard_form.dat";s:4:"7bd7";s:20:"doc/wizard_form.html";s:4:"bff1";s:33:"pi1/class.tx_typoscriptce_pi1.php";s:4:"61f8";}',
];
