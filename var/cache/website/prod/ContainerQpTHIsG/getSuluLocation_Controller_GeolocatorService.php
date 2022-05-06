<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluLocation_Controller_GeolocatorService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_location.controller.geolocator' shared service.
     *
     * @return \Sulu\Bundle\LocationBundle\Controller\GeolocatorController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/LocationBundle/Controller/GeolocatorController.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/LocationBundle/Geolocator/GeolocatorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/LocationBundle/Geolocator/Service/NominatimGeolocator.php';

        return $container->services['sulu_location.controller.geolocator'] = new \Sulu\Bundle\LocationBundle\Controller\GeolocatorController(new \Sulu\Bundle\LocationBundle\Geolocator\Service\NominatimGeolocator(($container->privates['http_client'] ?? $container->getHttpClientService()), 'http://open.mapquestapi.com/nominatim/v1/search.php', ''));
    }
}