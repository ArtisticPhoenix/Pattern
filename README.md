# Patterns
Common programing patterns for evo

 - Singleton (trait and interface)
 - Multiton (trait and interface)
 
 
 Singleton useage
 
 ```
use evo\pattern\singleton\SingletonTrait;
use evo\pattern\singleton\SingletonInterface;
 
 Class Foo implements SingletonInterface{
     use Singleton;
     protected function init(){
        //stuff to do on __construct
     }
 }
 ```
 
 Then you can call your class like this
 
```
$Foo = Foo:getInstance();

```

Multiton usage
 
 ```
use evo\pattern\singleton\MultitonTrait;
use evo\pattern\singleton\MultitonInterface;
 
 Class Foo implements MultitonInterface{
     use Multiton;
     protected function init(){
        //stuff to do on __construct
     }
 }
 ```
 
Then you can call your class like this
 
```
$Foo = Foo:getInstance();

```

The diffrence between them is the Multiton acts more like a container for Singlton instances.  So you can call the `getInstance` method multiple times with diffrent aliases and get multiple copies of the class, each a singleton in it's own right.  Becareful using Static proprites on multitons as they can be a bit tricky.

 ```
 //this will produce two singleton instances of the class
$Foo1 = Foo:getInstance('instance1');
$Foo2 = Foo:getInstance('instance2');

```
  
 Install via composer 
 
```
{
    "require" : {
        "evo/patterns" : "~1.0"
    }
}

I plan to add a few more to this, as needed.
