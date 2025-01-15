<?php

namespace design_pattern\structural\facade;
require_once('Restaurant.php');

class NonVegRestaurant extends Restaurant {
    public function getMenus() {
        return "Non Veg Menu";
    }
}
