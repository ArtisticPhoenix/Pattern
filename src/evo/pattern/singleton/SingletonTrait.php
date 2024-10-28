<?php
namespace evo\pattern\singleton;

/**
 *
 * (c) 2016 Hugh Durham III
 *
 * For license information please view the LICENSE file included with this source code.
 *
 * Singleton pattern.  Classes using this trait should
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
trait SingletonTrait
{
    /**
     *
     * @var ?SingletonInterface
     */
    private static ?SingletonInterface $instance=null;
    
    /**
     * no access
     */
    private function __construct(){}
    
    /**
     * no access
     */
    private function __clone(){}

    /**
     * @return SingletonInterface
     */
    public static function I(): static
    { 
        return static::getInstance();
    }
 
    /**
     *
     * @return static
     */
    public static function getInstance(): static
    {
        if (!self::$instance) {
            self::$instance = new static;
            self::$instance->init();
        }
        return self::$instance;
    }
    
    /**
     * Has the singleton been created yes/no
     * @return boolean
     */
    public static function isInstantiated(): bool
    {
        return (bool)self::$instance;
    }
    
    /**
     * Called when the first instance is created (after construct)
     * Overwrite this method with your startup code, instead of using a constructor ( which we can't)
     *
     */
    protected function init(): void
    {
    }
}
