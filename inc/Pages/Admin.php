<?php
/**
 * @package Egosms
 */

namespace Inc\Pages;

class Admin
{

    public function register()
    {

        add_action('admin_menu', array($this, 'add_menu_pages'));
    }

    // function to a menu option on the dashboard
    public function add_menu_pages()
    {
        add_menu_page('Egosms', 'Egosms', 'manage_options', 'egosms', array($this, 'admin_index'), PLUGIN_URL . 'assets/img/icon.png', 110);
    }

    public function admin_index()
    {
        // Require template

        require_once PLUGIN_PATH . '/templates/admin.php';
    }

}
