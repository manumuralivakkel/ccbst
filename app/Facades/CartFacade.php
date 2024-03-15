<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class CartFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cart'; // This should match the binding key in the service provider.
    }
}
