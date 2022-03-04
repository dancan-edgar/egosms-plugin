<?php


/**
 * @package Egosms
 * @author Ampeire Edgar
 * @license GPL V2 or later
 */

/*
 * Plugin Name: Egosms
 * Plugin URI: https://github.com/dancan-edgar/egosms-plugin.git
 * Description: Egosms WordPress plugin enables you to integrate the Egosms Bulk messaging platform.
 * Version: 1.0.0
 * Author: Ampeire Edgar
 * Author URI: https://github.com/dancan-edgar
 * License: GPL V2 or higher
 * Text Domain: egosms
 */

/*
Egosms is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Egosms is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Datero. If not, see https://www.gnu.org/licenses/old-licenses/gpl-2.0.html.
*/

// If this file is accessed directy, abort !!
defined('ABSPATH') or die("You dont have access to this file");

if (!function_exists('add_action')) {
    die('You dont have access to this file');
}

// Require one the Composer Autoload file
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {

    require_once dirname(__FILE__) . '/vendor/autoload.php';

}

// Define constants
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN', plugin_basename(__FILE__));


use Inc\Base\Activate;
use Inc\Base\Deactivate;

// Function to be triggered on activate
function egosms_activate()
{
    Activate::activate();
}

// Function to be triggered on deactivate
function egosms_deactivate()
{
    Deactivate::deactivate();
}

// Activation hook
register_activation_hook(__FILE__, 'egosms_activate');

// Deactivation hook
register_deactivation_hook(__FILE__, 'egosms_deactivate');
//}

if (class_exists('Inc\\Init')) {

    Inc\Init::register_services();
}