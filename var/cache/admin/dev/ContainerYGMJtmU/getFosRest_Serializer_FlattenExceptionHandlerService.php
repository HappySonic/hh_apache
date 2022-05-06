<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_Serializer_FlattenExceptionHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_rest.serializer.flatten_exception_handler' shared service.
     *
     * @return \FOS\RestBundle\Serializer\Normalizer\FlattenExceptionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/friendsofsymfony/rest-bundle/Serializer/Normalizer/FlattenExceptionHandler.php';

        return $container->privates['fos_rest.serializer.flatten_exception_handler'] = new \FOS\RestBundle\Serializer\Normalizer\FlattenExceptionHandler(($container->privates['fos_rest.exception.codes_map'] ?? $container->getFosRest_Exception_CodesMapService()), ($container->privates['fos_rest.exception.messages_map'] ?? ($container->privates['fos_rest.exception.messages_map'] = new \FOS\RestBundle\Util\ExceptionValueMap([]))), true, false);
    }
}
