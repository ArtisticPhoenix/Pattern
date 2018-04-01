<?php
namespace evo\pattern\singleton;

/**
 *
 * (c) 2016 Hugh Durham III
 *
 * For license information please view the LICENSE file included with this source code.
 *
 * Singletion pattern.  Classes using this trait should
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
     * @var self
     */
    private static $instance;
    
    /**
     * no access
     */
    final private function __construct()
    {
    }
    
    /**
     * no access
     */
    final private function __clone()
    {
    }
    
    /**
     * no access
     */
    final private function __wakeup()
    {
    }
 
    /**
     *
     * Arguments passed to getInstance are passed to init(),
     * this only happens on instantiation
     *
     * @return self
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self;
            self::$instance->init();
        }
        return self::$instance;
    }
    
    /**
     *
     * @return boolean
     */
    public static function isInstantiated()
    {
        return self::$instance ? true : false;
    }
    
    /**
     * called when the first instance is created (after construct)
     *
     * Overwrite this method with your startup code
     *
     */
    protected function init()
    {
    }
}
