<?php

namespace Step\classes;

class Tag extends BaseTag
{
    public static function make($name, array $attributes = []){
        return new self($name, $attributes);
    }

    public static function __callStatic($name, $arguments){

        array_unshift($arguments, $name);
        return call_user_func_array([self::class, 'make'], $arguments);
    }
}