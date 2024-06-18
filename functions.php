<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/StarterSite.php';

//add_action('after_setup_theme', function () {
//    register_nav_menus([
//        'primary' => __('Primary Menu', 'kodeverftet'),
//        'footer' => __('Footer Menu', 'kodeverftet'),
//    ]);
//});

Timber\Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = [ 'templates', 'views' ];

new StarterSite();
