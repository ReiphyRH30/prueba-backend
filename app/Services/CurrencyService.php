<?php

namespace App\Services;

use App\Models\Currency;
use Illuminate\Support\Facades\DB;

class CurrencyService
{
    public function getAll()
    {
        return Currency::with(['products', 'productPrices.product'])->get();
    }

    public function getById(Currency $currency)
    {
        return $currency->load(['products', 'productPrices.product']);
    }

    public function create(array $data)
    {
        return Currency::create($data);
    }

    public function update(Currency $currency, array $data)
    {
        $currency->update($data);
        return $currency;
    }

    public function delete(Currency $currency)
    {
        return $currency->delete();
    }
}
