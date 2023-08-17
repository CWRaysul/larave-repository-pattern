<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UnitRepositoryInterface;
use App\Models\Unit;

class UnitRepository implements UnitRepositoryInterface{
    public function allUnits(){
        return Unit::all();
    }
    public function storeUnit($data){
        Unit::create($data);
        return redirect()->route('unit.index')->with('create', 'Unit created successfully !');
    }

    public function findUnit($id){
        return Unit::find($id);
    }

    public function updateUnit($data, $id){
        Unit::find($id)->update($data);
        return redirect()->route('unit.index')->with('create', 'Unit created successfully !');

    }
    public function destroyUnit($id){

        $unit = Unit::find($id)->delete();
        return back();
    }


}
