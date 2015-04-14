<?php

namespace Justas\WeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Justas\WeatherBundle\Service;
use Justas\WeatherBundle\Location;

class DefaultController extends Controller
{
    /**
     * @Route("/weather/{location}")
     * @Template()
     */
    public function indexAction($location)
    {
        $WeatherService = $this->get('nfq.weather');
        //$weatherProvider = $this->get('nfq.weather_provider');
        $weatherLocation = $this->get('nfq.location');

        $weather = $WeatherService->GetWeather($weatherLocation);

        return $weather;
    }
}