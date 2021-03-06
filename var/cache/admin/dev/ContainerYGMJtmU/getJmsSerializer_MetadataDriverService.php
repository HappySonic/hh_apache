<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_MetadataDriverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'jms_serializer.metadata_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\TypedPropertiesDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Metadata/Driver/TypedPropertiesDriver.php';
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Metadata/Driver/AbstractDoctrineTypeDriver.php';
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Metadata/Driver/DoctrineTypeDriver.php';
        include_once \dirname(__DIR__, 5).'/vendor/jms/metadata/src/Driver/AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/jms/metadata/src/Driver/DriverChain.php';
        include_once \dirname(__DIR__, 5).'/vendor/jms/metadata/src/Driver/AbstractFileDriver.php';
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Metadata/Driver/ExpressionMetadataTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Metadata/Driver/YamlDriver.php';
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Naming/PropertyNamingStrategyInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Naming/IdenticalPropertyNamingStrategy.php';
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Metadata/Driver/XmlDriver.php';
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Metadata/Driver/AnnotationDriver.php';
        include_once \dirname(__DIR__, 5).'/vendor/jms/serializer/src/Metadata/Driver/AttributeDriver/AttributeReader.php';

        $a = ($container->privates['jms_serializer.metadata.traceable_file_locator'] ?? $container->getJmsSerializer_Metadata_TraceableFileLocatorService());
        $b = new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy();
        $c = ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser()));

        return $container->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\TypedPropertiesDriver(new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain([0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a, $b, $c), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a, $b, $c), 2 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver(new \JMS\Serializer\Metadata\Driver\AttributeDriver\AttributeReader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService())), $b, $c)]), ($container->services['doctrine'] ?? $container->getDoctrineService()), $c), $c);
    }
}
