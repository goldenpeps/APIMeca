<?php

namespace Container04qEQqd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J3fuGrHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j3fuGrH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j3fuGrH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'interfaceUrl' => ['services', 'router', 'getRouterService', false],
            'repositoryV' => ['privates', 'App\\Repository\\MarqueVehiculeRepository', 'getMarqueVehiculeRepositoryService', true],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
        ], [
            'entityManager' => '?',
            'interfaceUrl' => '?',
            'repositoryV' => 'App\\Repository\\MarqueVehiculeRepository',
            'serializer' => '?',
        ]);
    }
}
