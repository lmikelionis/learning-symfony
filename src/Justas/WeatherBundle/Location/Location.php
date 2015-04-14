<?php

namespace Justas\WeatherBundle\Location;

use Justas\WeatherBundle\Controller\DefaultController;

class Location
{
    protected $location;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

}