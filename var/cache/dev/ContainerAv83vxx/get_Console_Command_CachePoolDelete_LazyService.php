<?php

namespace ContainerAv83vxx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_CachePoolDelete_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.cache_pool_delete.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.cache_pool_delete.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('cache:pool:delete', [], 'Delete an item from a cache pool', false, #[\Closure(name: 'console.command.cache_pool_delete', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand => ($container->privates['console.command.cache_pool_delete'] ?? $container->load('getConsole_Command_CachePoolDeleteService')));
    }
}
