<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_PrefixDecoratorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'massive_search.prefix_decorator' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Decorator\PrefixDecorator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Decorator/IndexNameDecoratorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Decorator/PrefixDecorator.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Decorator/LocalizationDecorator.php';
        include_once \dirname(__DIR__, 5).'/vendor/massive/search-bundle/Search/Decorator/IndexNameDecorator.php';

        return $container->privates['massive_search.prefix_decorator'] = new \Massive\Bundle\SearchBundle\Search\Decorator\PrefixDecorator(new \Massive\Bundle\SearchBundle\Search\Decorator\LocalizationDecorator(new \Massive\Bundle\SearchBundle\Search\Decorator\IndexNameDecorator(($container->privates['massive_search.metadata.field_evaluator'] ?? $container->load('getMassiveSearch_Metadata_FieldEvaluatorService')))), $container->getEnv('resolve:MASSIVE_SEARCH_PREFIX'));
    }
}
