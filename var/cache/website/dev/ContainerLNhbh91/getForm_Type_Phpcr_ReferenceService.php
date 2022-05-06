<?php

namespace ContainerLNhbh91;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_Type_Phpcr_ReferenceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type.phpcr.reference' shared service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRReferenceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 5).'/vendor/doctrine/phpcr-bundle/src/Form/Type/PHPCRReferenceType.php';

        return $container->privates['form.type.phpcr.reference'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\PHPCRReferenceType(($container->services['doctrine_phpcr.session'] ?? $container->getDoctrinePhpcr_SessionService()));
    }
}
