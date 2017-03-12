<?php 

namespace Phambinh\Cms\Contact\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Contact extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Phambinh\Cms\Services\Contact::class;
    }
}
