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
interface SingletonInterface
{
    
    /**
     * Alias for getInstance
     * @return self
     */
    public static function I(): self;
    
    /**
     * Get the singleton object ( or create it if needed )
     *
     * @return self
     */
    public static function getInstance(): self;
    
    /**
     * has an instance of the singleton been created
     *
     * @return bool
     */
    public static function isInstantiated(): bool;
}
