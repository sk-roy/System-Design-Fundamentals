<?php

require_once('IRestaurantKeeper.php');
require_once('VegRestaturant.php');
require_once('NonVegRestaurant.php');
require_once('BothVegNonVegRestaurant.php');


class RestaurantKeeper implements IRestaurantKeeper { 

    public function getVegMenu()
    {
        $restaurant = new VegRestaturant();
        $vegMenu = $restaurant->getMenus();
        return $vegMenu;
    }

    public function getNonVegMenu()
    {
        $restaurant = new NonVegRestaurant();
        $nonVegMenu = $restaurant->getMenus();
        return $nonVegMenu;
    }

    public function getVegNonVegMenu()
    {
        $restaurant = new BothVegNonVegRestaurant();
        $BothVegNonVegMenu = $restaurant->getMenus();
        return $BothVegNonVegMenu;
    }
}