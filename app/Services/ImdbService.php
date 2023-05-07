<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

use function mysql_xdevapi\getSession;

class ImdbService
{
    public function call(string $methodUrl, array $params):array
    {
        $params = $this->getAuthParam($params);
        return Http::get(config('imdb.base_api_url').$methodUrl,$params)->json();
    }

    private function getAuthParam(array $params):array
    {
        $params['api_key'] = config('imdb.api_key');
        return $params;
    }
}


