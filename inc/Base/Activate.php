<?php

namespace Inc\Base;
class Activate
{
    public static function Activate()
    {
        // Flush rewrite rules
        flush_rewrite_rules();
    }


}