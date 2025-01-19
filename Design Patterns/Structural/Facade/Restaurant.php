<?php

require_once('IRestaurant.php');

class Restaurant implements IRestaurant {
    public function getMenus() {
        return "Regular Menu";
    }
}
