<?php

namespace ContainerIwAkOJC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluAdmin_FormMetadata_FormMetadataMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sulu_admin.form_metadata.form_metadata_mapper' shared service.
     *
     * @return \Sulu\Bundle\AdminBundle\FormMetadata\FormMetadataMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/FormMetadata/FormMetadataMapper.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/SchemaMetadata/PropertyMetadataMapperRegistry.php';

        return $container->privates['sulu_admin.form_metadata.form_metadata_mapper'] = new \Sulu\Bundle\AdminBundle\FormMetadata\FormMetadataMapper(new \Sulu\Bundle\AdminBundle\Metadata\SchemaMetadata\PropertyMetadataMapperRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'account_selection' => ['privates', 'sulu_admin.property_metadata_mapper.selection', 'getSuluAdmin_PropertyMetadataMapper_SelectionService', true],
            'category_selection' => ['privates', 'sulu_admin.property_metadata_mapper.selection', 'getSuluAdmin_PropertyMetadataMapper_SelectionService', true],
            'collection_selection' => ['privates', 'sulu_admin.property_metadata_mapper.selection', 'getSuluAdmin_PropertyMetadataMapper_SelectionService', true],
            'contact_selection' => ['privates', 'sulu_admin.property_metadata_mapper.selection', 'getSuluAdmin_PropertyMetadataMapper_SelectionService', true],
            'email' => ['services', 'sulu.content.type.email', 'getSulu_Content_Type_EmailService', true],
            'media_selection' => ['services', 'sulu_media.type.media_selection', 'getSuluMedia_Type_MediaSelectionService', true],
            'number' => ['services', 'sulu.content.type.number', 'getSulu_Content_Type_NumberService', true],
            'page_selection' => ['privates', 'sulu_admin.property_metadata_mapper.selection', 'getSuluAdmin_PropertyMetadataMapper_SelectionService', true],
            'single_account_selection' => ['privates', 'sulu_admin.property_metadata_mapper.single_selection', 'getSuluAdmin_PropertyMetadataMapper_SingleSelectionService', true],
            'single_category_selection' => ['privates', 'sulu_admin.property_metadata_mapper.single_selection', 'getSuluAdmin_PropertyMetadataMapper_SingleSelectionService', true],
            'single_collection_selection' => ['privates', 'sulu_admin.property_metadata_mapper.single_selection', 'getSuluAdmin_PropertyMetadataMapper_SingleSelectionService', true],
            'single_contact_position_selection' => ['privates', 'sulu_admin.property_metadata_mapper.single_selection', 'getSuluAdmin_PropertyMetadataMapper_SingleSelectionService', true],
            'single_contact_selection' => ['privates', 'sulu_admin.property_metadata_mapper.single_selection', 'getSuluAdmin_PropertyMetadataMapper_SingleSelectionService', true],
            'single_contact_title_selection' => ['privates', 'sulu_admin.property_metadata_mapper.single_selection', 'getSuluAdmin_PropertyMetadataMapper_SingleSelectionService', true],
            'single_media_selection' => ['services', 'sulu_media.type.single_media_selection', 'getSuluMedia_Type_SingleMediaSelectionService', true],
            'single_page_selection' => ['privates', 'sulu_admin.property_metadata_mapper.single_selection', 'getSuluAdmin_PropertyMetadataMapper_SingleSelectionService', true],
            'single_snippet_selection' => ['privates', 'sulu_admin.property_metadata_mapper.single_selection', 'getSuluAdmin_PropertyMetadataMapper_SingleSelectionService', true],
            'snippet_selection' => ['privates', 'sulu_admin.property_metadata_mapper.selection', 'getSuluAdmin_PropertyMetadataMapper_SelectionService', true],
            'tag_selection' => ['privates', 'sulu_admin.property_metadata_mapper.selection', 'getSuluAdmin_PropertyMetadataMapper_SelectionService', true],
            'teaser_selection' => ['services', 'sulu_page.teaser.content_type', 'getSuluPage_Teaser_ContentTypeService', true],
            'text_area' => ['privates', 'sulu_admin.property_metadata_mapper.text', 'getSuluAdmin_PropertyMetadataMapper_TextService', true],
            'text_line' => ['privates', 'sulu_admin.property_metadata_mapper.text', 'getSuluAdmin_PropertyMetadataMapper_TextService', true],
        ], [
            'account_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SelectionPropertyMetadataMapper',
            'category_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SelectionPropertyMetadataMapper',
            'collection_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SelectionPropertyMetadataMapper',
            'contact_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SelectionPropertyMetadataMapper',
            'email' => 'Sulu\\Bundle\\PageBundle\\Content\\Types\\Email',
            'media_selection' => 'Sulu\\Bundle\\MediaBundle\\Content\\Types\\MediaSelectionContentType',
            'number' => 'Sulu\\Component\\Content\\Types\\Number',
            'page_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SelectionPropertyMetadataMapper',
            'single_account_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SingleSelectionPropertyMetadataMapper',
            'single_category_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SingleSelectionPropertyMetadataMapper',
            'single_collection_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SingleSelectionPropertyMetadataMapper',
            'single_contact_position_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SingleSelectionPropertyMetadataMapper',
            'single_contact_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SingleSelectionPropertyMetadataMapper',
            'single_contact_title_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SingleSelectionPropertyMetadataMapper',
            'single_media_selection' => 'Sulu\\Bundle\\MediaBundle\\Content\\Types\\SingleMediaSelection',
            'single_page_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SingleSelectionPropertyMetadataMapper',
            'single_snippet_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SingleSelectionPropertyMetadataMapper',
            'snippet_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SelectionPropertyMetadataMapper',
            'tag_selection' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\SelectionPropertyMetadataMapper',
            'teaser_selection' => 'Sulu\\Bundle\\PageBundle\\Teaser\\TeaserContentType',
            'text_area' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\TextPropertyMetadataMapper',
            'text_line' => 'Sulu\\Bundle\\AdminBundle\\Metadata\\SchemaMetadata\\TextPropertyMetadataMapper',
        ])));
    }
}