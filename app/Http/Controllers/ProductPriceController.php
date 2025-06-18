<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPrice\StoreProductPriceRequest;
use App\Http\Requests\ProductPrice\UpdateProductPriceRequest;
use App\Models\ProductPrice;
use App\Services\ProductPriceService;

class ProductPriceController extends Controller
{
    public ProductPriceService $productPriceService;

    public function __construct(ProductPriceService $productPriceService)
    {
        $this->productPriceService = $productPriceService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return $this->productPriceService->getAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductPriceRequest $request)
    {
        //
        $data = $request->validated();
        $this->productPriceService->create($data);
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductPrice $productPrice)
    {
        //
        return $this->productPriceService->getById($productPrice);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductPriceRequest $request, ProductPrice $productPrice)
    {
        //
        $data = $request->validated();
        $this->productPriceService->update($productPrice, $data);
        return response()->json(null, 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductPrice $productPrice)
    {
        //
    }
}
