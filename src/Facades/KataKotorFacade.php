<?php

namespace Deogw\KataKotorLaravel\Facades;

use Illuminate\Support\Facades\Facade;


class KataKotorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'KataKotor';
    }
}
