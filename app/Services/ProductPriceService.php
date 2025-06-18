<?php

namespace App\Services;

use App\Models\ProductPrice;
use Illuminate\Support\Facades\DB;

class ProductPriceService
{
    public function getAll()
    {
        return ProductPrice::with(['currency', 'product.currency'])->get();
    }

    public function getById(ProductPrice $productPrice)
    {
        return $productPrice->load(['currency', 'product.currency']);
    }

    public function create(array $data)
    {
        return ProductPrice::create($data);
    }

    public function update(ProductPrice $productPrice, array $data)
    {
        $productPrice->update($data);
        return $productPrice;
    }

    public function delete(ProductPrice $productPrice)
    {
        return $productPrice->delete();
    }
}
