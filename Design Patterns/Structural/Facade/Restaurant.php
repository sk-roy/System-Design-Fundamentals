<?php

namespace design_pattern\structural\facade;

class Restaurent implements IRestaurent {
    public getMenus() {
        return "Regular Menu";
    }
}
