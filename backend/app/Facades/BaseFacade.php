<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\DB;

abstract class BaseFacade extends Facade
{
    public static function __callStatic($method, $args)
    {
        return DB::transaction(function () use ($method, $args) {
            return parent::__callStatic($method, $args);
        });
    }
}
