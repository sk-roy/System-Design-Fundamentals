<?php

require_once('RestaurantKeeper.php');

$hotelKeeper = new RestaurantKeeper();

$vegMenu = $hotelKeeper->getVegMenu();
$nonVegMenu = $hotelKeeper->getNonVegMenu();
$bothVegNonVeg = $hotelKeeper->getVegNonVegMenu();


echo "Veg Menu \t:" . $vegMenu . PHP_EOL;
echo "Non-Veg Menu \t:" . $nonVegMenu . PHP_EOL;
echo "Both Veg & Non-Veg Menu \t: " . $bothVegNonVeg . PHP_EOL;