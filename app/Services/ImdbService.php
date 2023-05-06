<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

use function mysql_xdevapi\getSession;

class ImdbService
{
    private string $methodUrl;
    private string $params;

    public function call(string $methodUrl, array $params):array
    {
        $params = $this->getAuthParam($params);
        $result =  Http::get(config('imdb.base_api_url').$methodUrl,$params)->json();
        return $result;
    }

    private function getAuthParam(array $params):array
    {
        $params['api_key'] = config('imdb.api_key');
        return $params;
    }

    private function getSessions():string
    {
        if (!Cache::has('request_token')) {
            Cache::set(
                'request_token',
                Http::get(
                    config('imdb.base_api_url') . '/authentication/token/new?api_key=' . config('imdb.api_key')
                )->json()
            );
        }

        return Cache::get('request_token')["request_token"];
    }

    private function getRequestToken()
    {
        return Http::get(config('imdb.base_api_url') . '/authentication/token/new?api_key=' . config('imdb.api_key'))->json();
    }

    private function getSession()
    {
        return Http::post(config('imdb.base_api_url') . '/authentication/session/new?api_key=' )->json();
    }

    private function setAuthoristaion()
    {

    }


}


