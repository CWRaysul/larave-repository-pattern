<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Repositories\Interfaces\SupplierRepositoryInterface;


class SupplierController extends Controller
{
    private $supplierRepository;

    public function __construct(SupplierRepositoryInterface $supplierRepository){
        $this->supplierRepository = $supplierRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = $this->supplierRepository->allSuppliers();
        return view('supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupplierRequest $request)
    {
        $validatedData = $request->validated();
        return $this->supplierRepository->storeSupplier($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($supplier)
    {
        $supplier = $this->supplierRepository->findSupplier($supplier);
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplierRequest $request, $supplier)
    {
        $validatedData = $request->validated();
        return $this->supplierRepository->updateSupplier($validatedData, $supplier);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($supplier)
    {
        return $this->supplierRepository->destroySupplier($supplier);
    }
}
