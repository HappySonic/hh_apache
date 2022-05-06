<?php

namespace ContainerRqrmNio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_Domains_RepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_website.domains.repository' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Entity\DomainRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/WebsiteBundle/Entity/DomainRepository.php';

        return $container->privates['sulu_website.domains.repository'] = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('SuluWebsiteBundle:Domain');
    }
}
