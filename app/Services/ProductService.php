<?php

namespace App\Services;

class ProductService
{
    protected array $products;

    public function __construct(array $products = [])
    {
        $this->products = $products;
    }

    public function listProducts(): array
    {
        return $this->products;
    }

    public function insert(array $product): array
    {
        $this->products[] = $product;
        return $this->products;
    }
}
