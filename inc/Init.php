<?php

/**
 * @package Egosms
 */

namespace Inc;

final class Init
{

    /***
     * Store all classes in an array
     * @return array Full list of classes
     */
    public static function get_services()
    {

        return [
            Pages\Admin::class,
            Base\Enqueue::class
        ];
    }

    /***
     * Loop through all the classes and Instantiate them
     * Call the register method ( If it exists)
     */
    public static function register_services()
    {
        foreach (self::get_services() as $class){
            $service = self::instantiate($class);
            if( method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    /***
     * @param $class class from the services array
     * @return class instance new instance of the class
     */
    public static function instantiate($class){

        $service = new $class;

        return $service;
    }
}


//use Inc\Activate;
//use Inc\Deactivate;
//
//if(! class_exists('Egosms')){
//    class Egosms {
//
//        public $plugin;
//
//        function __construct()
//        {
//            $this->plugin = plugin_basename(__FILE__);
//        }
//
//        function register(){
//
//            add_filter("plugin_action_links_$this->plugin",array($this,'settings_link'));
//        }
//
//        public function settings_link($links)
//        {
//            $settings_link = '<a href="admin.php?page=egosms">Settings</a>';
//
//            array_unshift($links,$settings_link);
//
//            return $links;
//        }
//
//
//
//        // Function to be triggered on activate
//        function activate(){
//            Activate::activate();
//        }
//
//        // Function to be triggered on deactivate
//        function deactivate(){
//            Deactivate::deactivate();
//        }
//    }
//
//
//
//
//    $egosms = new Egosms();
//    $egosms->register();
//
//    // Activation hook
//    register_activation_hook(__FILE__,array($egosms,'activate'));
//
//    // Deactivation hook
//    register_deactivation_hook(__FILE__,array($egosms,'deactivate'));
//}
