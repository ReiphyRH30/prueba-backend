<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductService
{
    public function getAll()
    {
        return Product::with(['currency', 'prices.currency'])->get();
    }

    public function getById(Product $product)
    {
        return $product->load(['currency', 'prices.currency']);
    }

    public function create(array $data)
    {
        return Product::create($data);
    }

    public function update(Product $product, array $data)
    {
        $product->update($data);
        return $product;
    }

    public function delete(Product $product)
    {
        return $product->delete();
    }
}
