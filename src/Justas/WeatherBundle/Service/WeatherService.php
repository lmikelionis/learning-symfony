<?php

namespace Justas\WeatherBundle\Service;

use Justas\WeatherBundle\Location\Location;
use Justas\WeatherBundle\Providers\WeatherProviderInterface;

class WeatherService
{
    protected $provider;
    protected $location;

    public function __construct($provider)
    {
        $this->provider = $provider;
    }


    public function GetWeather(Location $location)
    {
        $this->location = $location;
        return $this->provider->getWeatherByLocation($this->location);
    }
}