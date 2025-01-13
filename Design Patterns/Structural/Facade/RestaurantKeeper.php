<?php

namespace design_pattern\structural\facade;

class RestaurantKeeper implements IRestaurantKeeper { 

    public getVegMenu()
    {
        $restaurant = new VegRestaurant();
        $vegMenu = $restaurant.getMenus();
        return $vegMenu;
    }

    public getNonVegMenu()
    {
        $restaurant = new NonVegRestaurant();
        $nonVegMenu = $restaurant.getMenus();
        return $nonVegMenu;
    }

    public getVegNonVegMenu()
    {
        $restaurant = new BothVegNonVegRestaurant();
        $BothVegNonVegMenu = $restaurant.getMenus();
        return $BothVegNonVegMenu;
    }
}