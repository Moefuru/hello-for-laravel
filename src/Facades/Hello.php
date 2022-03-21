<?php
namespace Zrh\Hello\Facades;
use Illuminate\Support\Facades\Facade;
class Hello extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'packagetest';
    }
}
