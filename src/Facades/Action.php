<?php

namespace Soroush\Action\Facades;

use Illuminate\Support\Facades\Facade;

class  Action extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'action';
    }
}
