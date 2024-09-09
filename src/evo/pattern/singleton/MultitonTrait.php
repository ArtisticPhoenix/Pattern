<?php
namespace evo\pattern\singleton;

/**
 *
 * (c) 2016 Hugh Durham III
 *
 * For license information please view the LICENSE file included with this source code.
 *
 * Multiton pattern.  Classes using this trait should
 * <ul>
 *    <li>Implement \evo\pattern\singleton\SingletonInterface</li>
 *    <li>Be final</li>
 *    <li>Can overwrite init() method</li>
 * </ul>
 *
 * @author HughDurham {ArtisticPhoenix}
 * @package Evo
 * @subpackage pattern
 *
 */
trait MultitonTrait
{
    
    /**
     * the list of instances
     *
     * @var array
     */
    private static array $instances = [];
    
    /**
     * no access - no construction allowed
     */
    private function __construct(){}
    
    /**
     * no access - no cloning allowed
     */
    private function __clone(){}
    
    /**
     * 
     * @param string $alias - the name of the singleton
     * @return $this
     */
    public static function I(string $alias=''): self
    {
        return self::getInstance($alias);
    }
    
    /**
     * Get the singleton object ( or create it if needed )
     *
     * @param string $alias - the name of the singleton
     * @return $this
     */
    public static function getInstance(string $alias=''): self
    {
        if (!isset(self::$instances[$alias])) {
            self::$instances[$alias] = new self;
            self::$instances[$alias]->init($alias);
        }
        return self::$instances[$alias];
    }

    /**
     * Get an array containing all the instances and their aliases [alias => Obj{}, ...]
     *
     * @return array
     */
    public static function getInstances(): array
    {
        return self::$instances;
    }

    /**
     * Check if an alias has been created as a singleton or not yes/no
     *
     * @param string $alias
     * @return bool
     */
    public static function isInstantiated(string $alias=''): bool
    {
        return isset(self::$instances[$alias]);
    }
    
    /**
     * Called when the first instance is created (after construct)
     * Overwrite this method with your startup code, instead of using a constructor ( which we can't)
     *
     * @param string $alias - the alias being instantiated
     * @return void
     */
    protected function init(string $alias)
    {
    }
}
