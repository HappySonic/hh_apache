<?php

namespace ContainerYGMJtmU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluAdmin_ExpressionFormMetadataVisitorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_admin.expression_form_metadata_visitor' shared service.
     *
     * @return \Sulu\Bundle\AdminBundle\Metadata\FormMetadata\ExpressionFormMetadataVisitor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/FormMetadata/FormMetadataVisitorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/FormMetadata/TypedFormMetadataVisitorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/FormMetadata/ExpressionFormMetadataVisitor.php';
        include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CoreBundle/ExpressionLanguage/ContainerExpressionLanguageProvider.php';

        return $container->privates['sulu_admin.expression_form_metadata_visitor'] = new \Sulu\Bundle\AdminBundle\Metadata\FormMetadata\ExpressionFormMetadataVisitor(new \Symfony\Component\ExpressionLanguage\ExpressionLanguage(NULL, [0 => new \Sulu\Bundle\CoreBundle\ExpressionLanguage\ContainerExpressionLanguageProvider($container)]));
    }
}