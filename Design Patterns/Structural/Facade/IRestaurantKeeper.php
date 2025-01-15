<?php

namespace design_pattern\structural\facade;

interface IRestaurantKeeper { 
    public function getVegMenu();
    public function getNonVegMenu();
    public function getVegNonVegMenu();
}