<?php

interface IRestaurantKeeper { 
    public function getVegMenu();
    public function getNonVegMenu();
    public function getVegNonVegMenu();
}