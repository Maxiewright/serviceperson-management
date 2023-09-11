<?php

namespace App\Main;

class SimpleMenu
{
    /**
     * List of simple menu items.
     */
    public static function menu(): array
    {
        $layout = 'simple-menu';

        $menu = [];

        include 'menu.php';

        return $menu;
    }
}
