<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use App\Repositories\Interfaces\UnitRepositoryInterface;

class UnitController extends Controller
{
    public $unitRepository;

    public function __construct(UnitRepositoryInterface $unitRepository)
    {
        $this->unitRepository = $unitRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = $this->unitRepository->allUnits();
        return view('unit.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("unit.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnitRequest $request)
    {
        $validatedData = $request->validated();
        return $this->unitRepository->storeUnit($validatedData);
    }
    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($unit)
    {
        $unit = $this->unitRepository->findUnit($unit);
        return view('unit.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnitRequest $request, $unit)
    {
        $validatedData = $request->validated();
        return $this->unitRepository->updateUnit($validatedData, $unit);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($unit)
    {
        return $this->unitRepository->destroyUnit($unit);
    }
}
