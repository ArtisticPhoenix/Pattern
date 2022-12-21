<?php
namespace evo\pattern\singleton;

/**
 *
 * (c) 2016 Hugh Durham III
 *
 * For license information please view the LICENSE file included with this source code.
 *
 * Mutiton pattern, which is a collection of singletons.  Accessable with an alias
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
     * @return self
     */
    public static function I($alias = '');
    
    
    /**
     * @return self
     */
    public static function getInstance($alias = '');
    
    /**
     * has an instance of the singleton been created
     *
     * @return bool
     */
    public static function isInstantiated($alias = '');
}
