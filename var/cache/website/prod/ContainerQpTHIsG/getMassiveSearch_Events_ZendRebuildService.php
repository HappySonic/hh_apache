<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Events_ZendRebuildService extends App_KernelProdContainer
{
    /*
     * Gets the private 'massive_search.events.zend_rebuild' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\EventListener\ZendRebuildSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/EventListener/ZendRebuildSubscriber.php';

        return $container->privates['massive_search.events.zend_rebuild'] = new \Massive\Bundle\SearchBundle\Search\EventListener\ZendRebuildSubscriber(($container->services['massive_search.adapter.zend_lucene'] ?? $container->load('getMassiveSearch_Adapter_ZendLuceneService')), ($container->privates['massive_search.prefix_decorator'] ?? $container->load('getMassiveSearch_PrefixDecoratorService')));
    }
}
