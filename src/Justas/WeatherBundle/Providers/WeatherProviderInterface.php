<?php

namespace Justas\WeatherBundle\Providers;

interface WeatherProviderInterface
{
    public function getWeatherByLocation(Location $location);
}