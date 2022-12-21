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
     *
     * @var array
     */
    private static $instances = [];
    
    /**
     * no access
     */
    private function __construct()
    {
    }
    
    /**
     * no access
     */
    private function __clone()
    {
    }
    
    /**
     * @param string $alias - the name of the singlton
     * @return self
     */
    public static function getInstance($alias='')
    {
        if (!isset(self::$instances[$alias])) {
            self::$instances[$alias] = new self;
            self::$instances[$alias]->init($alias);
        }
        return self::$instances[$alias];
    }
    
    /**
     *
     * @return boolean
     */
    public static function isInstantiated($alias='')
    {
        return isset(self::$instances[$alias]) ? true : false;
    }
    
    /**
     * called when the first instance is created (after construct)
     *
     * Overwrite this method with your startup code
     *
     */
    protected function init($alias)
    {
    }
}
