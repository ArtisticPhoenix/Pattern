<?php
namespace evo\pattern\singleton;

/**
 *
 * (c) 2016 Hugh Durham III
 *
 * For license information please view the LICENSE file included with this source code.
 *
 * Mutiton pattern, which is a collection of singletons.  Accessible with an alias
 *
 * @author HughDurham {ArtisticPhoenix}
 * @package Evo
 * @subpackage pattern
 *
 */
interface MultitonInterface extends SingletonInterface
{
    
    /**
     * Alias for getInstance
     *
     * @param string $alias
     * @return static
     */
    public static function I(string $alias = ''): static;
    
    
    /**
     * Get an instance of this class by Alias or create a new instance
     * @param string $alias
     * @return static
     */
    public static function getInstance(string $alias = ''): static;

    /**
     * Get an array containing all the instances and their aliases [alias => Obj{}, ...]
     *
     * @return array
     */
    public static function getInstances(): array;

    /**
     * Check if an alias has been created as a singleton or not yes/no
     *
     * @param string $alias
     * @return bool
     */
    public static function isInstantiated(string $alias = ''): bool;
}
