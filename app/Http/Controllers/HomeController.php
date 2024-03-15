<?php

namespace App\Http\Controllers;

use App\Facades\CartFacade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = [
            ['name' => 'Product 1', 'price' => 10, 'quantity' => 2],
            ['name' => 'Product 2', 'price' => 15, 'quantity' => 1],
        ];
    
        $total = CartFacade::calculateTotal($products);
        return view('index',['total'=>$total]);
    }
}
