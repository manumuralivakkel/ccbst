<?php

namespace App\Services;

class CartService
{
    public function calculateTotal(array $products)
    {
        $total = 0;

        foreach ($products as $product) {
            $total += $product['price'] * $product['quantity'];
        }

        return $total;
    }
}
