<?php

namespace App\Repositories;

use App\Repositories\Interfaces\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface{
    public function allOrders(){
        return "ok";
    }
}
