<?php

namespace PabloDias\EloquentSalesForce\Facades;

use Illuminate\Support\Facades\Facade;
use PabloDias\EloquentSalesForce\Fakers\SObjectsFake;

class SObjects extends Facade
{
    public static function fake($jobsToFake = [])
    {
        static::swap($fake = new SObjectsFake(static::getFacadeRoot()));

        return $fake;
    }

	protected static function getFacadeAccessor()
	{
		return 'sobjects';
	}
}
