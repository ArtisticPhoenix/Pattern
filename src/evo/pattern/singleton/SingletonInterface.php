<?php
namespace evo\pattern\singleton;
/**
 *
 * (c) 2016 Hugh Durham III
 *
 * For license information please view the LICENSE file included with this source code.
 *
 * Singleton pattern
 *
 * @author HughDurham {ArtisticPhoenix}
 * @package Evo
 * @subpackage pattern
 */
interface  SingletonInterface{
    
    /**
     * @return self
     */
    public static function getInstance();
    
    /**
     * has an instance of the singleton been created
     * 
     * @return bool
     */
    public static function isInstantiated();
    
}