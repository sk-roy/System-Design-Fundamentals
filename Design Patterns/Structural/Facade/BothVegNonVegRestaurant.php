<?php


namespace design_pattern\structural\facade;
require_once('Restaurant.php');

class BothVegNonVegRestaurant extends Restaurant {
    public function getMenus() {
        return "Both Veg and Non-veg Menu";
    }
}
