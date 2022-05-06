<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_GlobalClearerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $container->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($container->services['cache.app'] ?? $container->load('getCache_AppService')), 'cache.system' => ($container->services['cache.system'] ?? $container->load('getCache_SystemService')), 'cache.validator' => ($container->privates['cache.validator'] ?? $container->load('getCache_ValidatorService')), 'cache.serializer' => ($container->privates['cache.serializer'] ?? $container->load('getCache_SerializerService')), 'cache.annotations' => ($container->privates['cache.annotations'] ?? $container->getCache_AnnotationsService()), 'cache.property_info' => ($container->privates['cache.property_info'] ?? $container->load('getCache_PropertyInfoService')), 'doctrine.result_cache_pool' => ($container->privates['doctrine.result_cache_pool'] ?? $container->getDoctrine_ResultCachePoolService()), 'doctrine.system_cache_pool' => ($container->privates['doctrine.system_cache_pool'] ?? $container->getDoctrine_SystemCachePoolService()), 'doctrine_phpcr.meta_cache_pool' => ($container->privates['doctrine_phpcr.meta_cache_pool'] ?? $container->getDoctrinePhpcr_MetaCachePoolService()), 'doctrine_phpcr.nodes_cache_pool' => ($container->privates['doctrine_phpcr.nodes_cache_pool'] ?? $container->getDoctrinePhpcr_NodesCachePoolService()), 'cache.property_access' => ($container->privates['cache.property_access'] ?? $container->load('getCache_PropertyAccessService')), 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? $container->load('getCache_ValidatorExpressionLanguageService')), 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? $container->load('getCache_SecurityExpressionLanguageService'))]);
    }
}
