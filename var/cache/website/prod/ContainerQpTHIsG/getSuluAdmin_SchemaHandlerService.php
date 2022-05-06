<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluAdmin_SchemaHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_admin.schema_handler' shared service.
     *
     * @return \Sulu\Bundle\AdminBundle\Serializer\Handler\SchemaHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Serializer/Handler/SchemaHandler.php';

        return $container->privates['sulu_admin.schema_handler'] = new \Sulu\Bundle\AdminBundle\Serializer\Handler\SchemaHandler();
    }
}