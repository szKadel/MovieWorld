<?php

namespace App\Repository;

use Illuminate\Support\Facades\Cache;

class CacheRepository
{
    public function add(string $key, string $value):void
    {
        Cache::put($key, $value, $seconds = 600);
    }

    public function get(string $key):array | bool
    {
        return Cache::has($key) ? Cache::get($key) : false;
    }
}
