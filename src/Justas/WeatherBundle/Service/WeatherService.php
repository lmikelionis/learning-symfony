<?php

namespace Justas\WeatherBundle\Service;

use Justas\WeatherBundle\Location\Location;
use Justas\WeatherBundle\Providers\WeatherProviderInterface;

class WeatherService
{
    protected $provider;
    protected $location;

    public function __construct(WeatherProviderInterface $provider)
    {
        $this->provider = $provider;
    }


    public function GetWeather(Location $location)
    {
        $this->location = $location->getLocation();

        return $this->provider->getWeatherByLocation($this->location);
    }
}