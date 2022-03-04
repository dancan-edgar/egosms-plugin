<?php
/**
 * @package Egosms
 */

namespace Inc\Base;

class SettingsLink
{
    protected $plugin;

    public function __construct()
    {
        $this->plugin = PLUGIN;
    }

    public function register()
    {
        add_filter("plugin_action_links_$this->plugin",array($this,'settings_link'));
    }

    // Function add the settings link
    function settings_link($links)
    {
        $settings_link = '<a href="admin.php?page=egosms">Settings</a>';

        array_unshift($links, $settings_link);

        return $links;
    }
}