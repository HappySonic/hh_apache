<?php

namespace ContainerQpTHIsG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCore_DoctrineListBuilderFactoryService extends App_KernelProdContainer
{
    /*
     * Gets the public 'sulu_core.doctrine_list_builder_factory' shared service.
     *
     * @return \Sulu\Component\Rest\ListBuilder\Doctrine\DoctrineListBuilderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/ListBuilder/Doctrine/DoctrineListBuilderFactoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/ListBuilder/Doctrine/DoctrineListBuilderFactory.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Component/Rest/ListBuilder/Filter/FilterTypeRegistry.php';

        return $container->services['sulu_core.doctrine_list_builder_factory'] = new \Sulu\Component\Rest\ListBuilder\Doctrine\DoctrineListBuilderFactory(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), new \Sulu\Component\Rest\ListBuilder\Filter\FilterTypeRegistry(new RewindableGenerator(function () use ($container) {
            yield 'text' => ($container->privates['sulu_core.text_filter_type'] ?? ($container->privates['sulu_core.text_filter_type'] = new \Sulu\Component\Rest\ListBuilder\Filter\TextFilterType()));
            yield 'boolean' => ($container->privates['sulu_core.boolean_filter_type'] ?? ($container->privates['sulu_core.boolean_filter_type'] = new \Sulu\Component\Rest\ListBuilder\Filter\BooleanFilterType()));
            yield 'number' => ($container->privates['sulu_core.number_filter_type'] ?? ($container->privates['sulu_core.number_filter_type'] = new \Sulu\Component\Rest\ListBuilder\Filter\NumberFilterType()));
            yield 'select' => ($container->privates['sulu_core.select_filter_type'] ?? ($container->privates['sulu_core.select_filter_type'] = new \Sulu\Component\Rest\ListBuilder\Filter\SelectFilterType()));
            yield 'selection' => ($container->privates['sulu_core.selection_filter_type'] ?? ($container->privates['sulu_core.selection_filter_type'] = new \Sulu\Component\Rest\ListBuilder\Filter\SelectionFilterType()));
            yield 'date' => ($container->privates['sulu_core.date_filter_type'] ?? ($container->privates['sulu_core.date_filter_type'] = new \Sulu\Component\Rest\ListBuilder\Filter\DateFilterType()));
            yield 'datetime' => ($container->privates['sulu_core.date_time_filter_type'] ?? ($container->privates['sulu_core.date_time_filter_type'] = new \Sulu\Component\Rest\ListBuilder\Filter\DateTimeFilterType()));
            yield 'country' => ($container->privates['sulu_contact.country_filter_type'] ?? ($container->privates['sulu_contact.country_filter_type'] = new \Sulu\Component\Rest\ListBuilder\Filter\SelectFilterType()));
        }, 8)), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), $container->parameters['sulu_security.permissions'], ($container->privates['sulu_security.access_control_query_enhancer'] ?? $container->getSuluSecurity_AccessControlQueryEnhancerService()));
    }
}
