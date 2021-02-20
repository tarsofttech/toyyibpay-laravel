<?php

namespace Tarsoft\Toyyibpay;

use Illuminate\Support\Facades\Facade;

class ToyyibpayFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Toyyibpay';
    }
}
