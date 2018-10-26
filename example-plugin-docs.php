<?php
/*
Plugin Name: Example Plugin Docs
Plugin URI: https://github.com/interfacelab/ilab-docs-example-plugin
Description: Example Plugin Documentation
Author: interfacelab
Version: 1.0.0
Author URI: http://interfacelab.io
*/

add_filter('ilab-docs-config', function($config) {
    $config['example-plugin-docs'] = [
        'dir' => dirname(__FILE__).'/docs/',
        'url' => plugin_dir_url( __FILE__ ).'docs/'
    ];

    return $config;
});