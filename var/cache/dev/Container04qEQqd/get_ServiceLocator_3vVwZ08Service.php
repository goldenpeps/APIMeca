<?php

namespace Container04qEQqd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3vVwZ08Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3vVwZ08' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3vVwZ08'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repositoryC' => ['privates', 'App\\Repository\\ContratRepository', 'getContratRepositoryService', true],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
        ], [
            'repositoryC' => 'App\\Repository\\ContratRepository',
            'serializer' => '?',
        ]);
    }
}