<?php
use \evo\pattern\singleton as S;

/*
 * http://localhost/evo/Pattern/test/example.php
 *
 */
require __DIR__.'/../vendor/autoload.php';

class foo implements S\SingletonInterface {
    use S\SingletonTrait;

    protected function init()
    {
        echo __CLASS__."::".__FUNCTION__."()\n";
    }
}

class bar implements S\MultitonInterface {
    use S\MultitonTrait;

    protected function init($alias)
    {
        echo __CLASS__."::".__FUNCTION__."($alias)\n";
    }
}
echo "<pre>";

foo::I();

bar::I('bar');
bar::I('foo');


var_dump(foo::getInstance());
var_dump(bar::getInstances());

echo '<b>Complete...</b>';