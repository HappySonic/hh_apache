<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPreview_PreviewLinkRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_preview.preview_link_repository' shared service.
     *
     * @return \Sulu\Bundle\PreviewBundle\Infrastructure\Doctrine\Repository\PreviewLinkRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PreviewBundle/Domain/Repository/PreviewLinkRepositoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/PreviewBundle/Infrastructure/Doctrine/Repository/PreviewLinkRepository.php';

        return $container->privates['sulu_preview.preview_link_repository'] = new \Sulu\Bundle\PreviewBundle\Infrastructure\Doctrine\Repository\PreviewLinkRepository(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
