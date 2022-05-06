<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluAdmin_PropertyMetadataMapper_SingleSelectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_admin.property_metadata_mapper.single_selection' shared service.
     *
     * @return \Sulu\Bundle\AdminBundle\Metadata\SchemaMetadata\SingleSelectionPropertyMetadataMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/SchemaMetadata/PropertyMetadataMapperInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/SchemaMetadata/SingleSelectionPropertyMetadataMapper.php';

        return $container->privates['sulu_admin.property_metadata_mapper.single_selection'] = new \Sulu\Bundle\AdminBundle\Metadata\SchemaMetadata\SingleSelectionPropertyMetadataMapper();
    }
}
