<?php

namespace Container04qEQqd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SeLVk3GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SeLVk3G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SeLVk3G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repositoryC' => ['privates', 'App\\Repository\\ContratRepository', 'getContratRepositoryService', true],
        ], [
            'entityManager' => '?',
            'repositoryC' => 'App\\Repository\\ContratRepository',
        ]);
    }
}
