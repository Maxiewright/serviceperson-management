<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     */
    public static function menu(): array
    {
        $layout = 'side-menu';

        $menu = [];

        include 'menu.php';

        return $menu;
    }
}
