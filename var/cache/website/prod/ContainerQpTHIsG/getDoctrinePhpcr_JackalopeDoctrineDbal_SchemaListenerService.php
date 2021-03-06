<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrinePhpcr_JackalopeDoctrineDbal_SchemaListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine_phpcr.jackalope_doctrine_dbal.schema_listener' shared service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\EventListener\JackalopeDoctrineDbalSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/phpcr-bundle/src/EventListener/JackalopeDoctrineDbalSchemaListener.php';

        return $container->privates['doctrine_phpcr.jackalope_doctrine_dbal.schema_listener'] = new \Doctrine\Bundle\PHPCRBundle\EventListener\JackalopeDoctrineDbalSchemaListener(($container->privates['doctrine_phpcr.jackalope_doctrine_dbal.schema'] ?? $container->load('getDoctrinePhpcr_JackalopeDoctrineDbal_SchemaService')));
    }
}
