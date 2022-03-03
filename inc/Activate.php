<?php

namespace Inc;
class Activate
{
    public static function Activate()
    {
        // Flush rewrite rules
        flush_rewrite_rules();
    }


}