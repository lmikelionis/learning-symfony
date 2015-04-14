<?php

namespace Justas\WeatherBundle\Providers;

use Justas\WeatherBundle\Location\Location;

interface WeatherProviderInterface
{
    public function getWeatherByLocation(Location $location);
}