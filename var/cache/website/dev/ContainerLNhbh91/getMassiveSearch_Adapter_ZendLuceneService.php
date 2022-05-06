<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Adapter_ZendLuceneService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'massive_search.adapter.zend_lucene' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Adapter\ZendLuceneAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/AdapterInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/OptimizeableAdapterInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Adapter/ZendLuceneAdapter.php';

        return $container->services['massive_search.adapter.zend_lucene'] = new \Massive\Bundle\SearchBundle\Search\Adapter\ZendLuceneAdapter(($container->privates['sulu_search.search.factory'] ?? ($container->privates['sulu_search.search.factory'] = new \Sulu\Bundle\SearchBundle\Search\Factory())), (\dirname(__DIR__, 4).'/indexes'), ($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), false, 'UTF-8');
    }
}
