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

        $weather = $WeatherService->GetWeather($location);

        return $weather;
    }
}