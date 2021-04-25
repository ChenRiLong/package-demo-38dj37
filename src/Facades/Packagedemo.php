<?php
namespace Chuhai\Packagedemo\Facades;
use Illuminate\Support\Facades\Facade;

class Packagedemo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'packagedemo';
    }
}