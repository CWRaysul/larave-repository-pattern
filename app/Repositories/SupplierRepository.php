<?php

namespace App\Repositories;

use App\Repositories\Interfaces\SupplierRepositoryInterface;
use App\Models\Supplier;

class SupplierRepository implements SupplierRepositoryInterface{

    public function allSuppliers(){
        return Supplier::get();
    }


    public function storeSupplier($data){
        Supplier::create($data);
        return redirect()->route('supplier.index')->with('create', 'Supplier created successfully !');
    }

    public function findSupplier($id){
        return Supplier::find($id);
    }

    public function updateSupplier($data, $id){
        Supplier::find($id)->update($data);
        return redirect()->route('supplier.index')->with('create', 'Supplier Update successfully !');
    }

    public function destroySupplier($id){
        Supplier::find($id)->delete();
        return back();
    }


}
