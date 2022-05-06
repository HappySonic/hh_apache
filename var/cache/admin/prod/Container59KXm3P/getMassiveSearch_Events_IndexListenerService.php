<?php

namespace Container59KXm3P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Events_IndexListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'massive_search.events.index_listener' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\EventListener\IndexListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/EventListener/IndexListener.php';

        return $container->privates['massive_search.events.index_listener'] = new \Massive\Bundle\SearchBundle\Search\EventListener\IndexListener(($container->services['massive_search.search_manager'] ?? $container->load('getMassiveSearch_SearchManagerService')));
    }
}
