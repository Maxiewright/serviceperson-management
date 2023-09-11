<?php

namespace App\Main;

class TopMenu
{
    /**
     * List of top menu items.
     */
    public static function menu(): array
    {
        $layout = 'top-menu';

        $menu = [];

        include 'menu.php';

        return $menu;
    }
}
