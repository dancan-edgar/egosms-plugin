<?php

/**
 * @package Egosms
 */

namespace Inc\Base;

class Deactivate
{
    public static function deactivate()
    {
        // Flush rewrite rules
        flush_rewrite_rules();
    }


}