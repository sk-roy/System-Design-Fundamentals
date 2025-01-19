<?php

require_once('Restaurant.php');

class VegRestaturant extends Restaurant {
    public function getMenus() {
        return "Veg Menu";
    }
}
