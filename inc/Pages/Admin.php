<?php
/**
 * @package Egosms
 */

namespace Inc\Pages;

use \Inc\Base\BaseController;

class Admin extends BaseController
{

    public function register()
    {

        add_action('admin_menu', array($this, 'add_menu_pages'));
    }

    // function to a menu option on the dashboard
    public function add_menu_pages()
    {
        add_menu_page('Egosms', 'Egosms', 'manage_options', 'egosms', array($this, 'admin_index'), $this->plugin_url . 'assets/img/icon.png', 110);
    }

    public function admin_index()
    {
        // Require template

        require_once $this->plugin_path . '/templates/admin.php';
    }

}
