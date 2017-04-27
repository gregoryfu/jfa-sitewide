<?php
/**
 * Plugin Name: jfa-sitewide
 * Description: Sitewide plugin for Justice For Animals Minor Features
 * Version: 0.1
 * Author: Greg Fuller
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/*  Copyright 2016 Greg Fuller */


/* enquque styles */
add_action('wp_enqueue_scripts', 'jfa_sitwide_styles');
function jfa_sitewide_styles()
{
    wp_enqueue_style('jfa-sitewide-style', plugins_url('css/jfa-sitewide.css', __FILE__), array('dashicons'), '1.3', 'all');

    wp_enqueue_script(
        'jfa-sitewide-js',
        plugins_url('jfa-sitewide/js/jfa-sitewide.js'),
        array('jquery')
    );

}
