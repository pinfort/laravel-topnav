<?php

/**
 * settings of menu
 */

return [
    // define menu. array key is key of translation for display. cf. translations/en/ui.php
    // value is url. or, you can add array to value for nest menu.
    // nestable. attention max_depth setting.
    'menu' => [
        'top' => '/',
        // 'nest_menu' => [
        //     'children' => '/children',
        // ],
    ],

    // top hierarchy menu(displayed without hover) is counted as 0
    'max_depth' => 2,
];