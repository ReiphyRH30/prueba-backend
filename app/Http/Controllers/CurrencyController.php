<?php

namespace App\Http\Controllers;

use App\Http\Requests\Currency\StoreCurrencyRequest;
use App\Http\Requests\Currency\UpdateCurrencyRequest;
use App\Models\Currency;
use App\Services\CurrencyService;

class CurrencyController extends Controller
{
    protected CurrencyService $currencyService;
    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return $this->currencyService->getAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCurrencyRequest $request)
    {
        //
        $data = $request->validated();
        $currency = $this->currencyService->create($data);
        return response()->json($currency, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency)
    {
        //
        return $this->currencyService->getById($currency);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCurrencyRequest $request, Currency $currency)
    {
        //
        $data = $request->validated();
        $currencyUpdated = $this->currencyService->update($currency, $data);
        return response()->json($currencyUpdated, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Currency $currency)
    {
        //
        $this->currencyService->delete($currency);
        return response()->json(null, 204);
    }
}
