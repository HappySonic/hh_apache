<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluAdmin_PropertyMetadataMapper_TextService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_admin.property_metadata_mapper.text' shared service.
     *
     * @return \Sulu\Bundle\AdminBundle\Metadata\SchemaMetadata\TextPropertyMetadataMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/SchemaMetadata/PropertyMetadataMapperInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/SchemaMetadata/TextPropertyMetadataMapper.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/SchemaMetadata/PropertyMetadataMinMaxValueResolver.php';

        return $container->privates['sulu_admin.property_metadata_mapper.text'] = new \Sulu\Bundle\AdminBundle\Metadata\SchemaMetadata\TextPropertyMetadataMapper(($container->privates['sulu_admin.property_metadata_min_max_value_resolver'] ?? ($container->privates['sulu_admin.property_metadata_min_max_value_resolver'] = new \Sulu\Bundle\AdminBundle\Metadata\SchemaMetadata\PropertyMetadataMinMaxValueResolver())));
    }
}
