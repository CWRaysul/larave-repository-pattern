<?php

namespace App\Repositories\interfaces;


interface SupplierRepositoryInterface{
    public function allSuppliers();
    public function storeSupplier($data);
    public function findSupplier($id);
    public function updateSupplier($data, $id);
    public function destroySupplier($id);
}


