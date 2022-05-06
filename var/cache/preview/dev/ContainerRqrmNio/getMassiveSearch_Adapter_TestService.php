<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Adapter_TestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'massive_search.adapter.test' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Adapter\TestAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/AdapterInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Adapter/TestAdapter.php';

        return $container->services['massive_search.adapter.test'] = new \Massive\Bundle\SearchBundle\Search\Adapter\TestAdapter(($container->privates['sulu_search.search.factory'] ?? ($container->privates['sulu_search.search.factory'] = new \Sulu\Bundle\SearchBundle\Search\Factory())));
    }
}
