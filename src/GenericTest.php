<?php

namespace muyomu\punit;

use muyomu\punit\generic\TestCase;
use ReflectionClass;

abstract class GenericTest implements PUnitTest
{
    public static function run(string $class):void{
        $reflectionClass = new ReflectionClass($class);
        $reflectionMethod = $reflectionClass->getMethod("test");
        $reflectionMethod->invoke($reflectionClass->newInstanceArgs());
    }
}