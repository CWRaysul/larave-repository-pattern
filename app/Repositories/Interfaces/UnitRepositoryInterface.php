<?php

namespace App\Repositories\interfaces;


interface UnitRepositoryInterface{
    public function allUnits();
    public function storeUnit($data);
    public function findUnit($id);
    public function updateUnit($data, $id);
    public function destroyUnit($id);
}


