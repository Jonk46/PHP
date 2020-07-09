<?php

/**
 * Main configuration file
 */
return (object)[
    // Application bootstrap options
    'bootstrap' => (object)[
        'classes' => "src/%s.php",
    ],
    // Input file settings
    'input' => (object)[
        'dir' => "input/small",
    ],
]; 
