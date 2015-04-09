<?php

namespace Justas\WeatherBundle\Providers;

use Justas\WeatherBundle\Service;
use Goutte\Client;

class MyWeather2Provider implements WeatherProviderInterface
{
    public function GetWeatherByLocation(Location $location)
    {
        $client = new Client();
        $crawler = $client->request('GET', 'http://www.myweather2.com/developer/forecast.ashx?uac=YCArLLoUgR&output=xml&query={$location}');
        return $crawler;
    }
}