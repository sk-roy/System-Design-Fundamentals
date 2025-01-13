<?php

namespace design_pattern\structural\facade;


    $hotelKeeper = new HotelKeeperImplementation();
    
    $vegMenu = $hotelKeeper.getVegMenu();
    $nonVegMenu = $hotelKeeper.getNonVegMenu();
    $bothVegNonVeg = $hotelKeeper.getVegNonVegMenu();


    echo "Veg Menu \t:" . $vegMenu;
    echo "Non-Veg Menu \t:" . $nonVegMenu;
    echo "Both Veg & Non-Veg Menu \t: " . $bothVegNonVeg;