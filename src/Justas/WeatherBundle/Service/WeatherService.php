<?php

namespace Justas\WeatherBundle\Service;

use Justas\WeatherBundle\Providers;

class WeatherService
{
    public function __construct($provider)
    {
        $this->provider = $provider;
    }

    public function GetWeather(Location $location)
    {
        return $this->provider->GetWeatherByLocation($location);
    }
}