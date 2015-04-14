<?php

namespace Justas\WeatherBundle\Providers;

use Justas\WeatherBundle\Location\Location;
use Justas\WeatherBundle\Service;
use Goutte\Client;

class MyWeather2Provider implements WeatherProviderInterface
{
    public function getWeatherByLocation(Location $location)
    {
        $client = new Client();
        $results = $client->request('GET', 'http://www.myweather2.com/developer/forecast.ashx?uac=YCArLLoUgR&output=xml&query={$location}');
        return $results;
    }
}