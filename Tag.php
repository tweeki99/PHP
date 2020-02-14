<?php

/**
 * Class Tag
 * @method static Tag a(array $attributes = [])
 * @method static Tag abbr(array $attributes = [])
 * @method static Tag acronym(array $attributes = [])
 * @method static Tag address(array $attributes = [])
 * @method static Tag applet(array $attributes = [])
 * @method static Tag area(array $attributes = [])
 * @method static Tag article(array $attributes = [])
 * @method static Tag aside(array $attributes = [])
 * @method static Tag audio(array $attributes = [])
 * @method static Tag b(array $attributes = [])
 * @method static Tag base(array $attributes = [])
 * @method static Tag bdi(array $attributes = [])
 * @method static Tag bdo(array $attributes = [])
 * @method static Tag big(array $attributes = [])
 * @method static Tag body (array $attributes = [])
 * @method static Tag blink(array $attributes = [])
 * @method static Tag br(array $attributes = [])
 * @method static Tag button(array $attributes = [])
 * @method static Tag html(array $attributes = [])
 * @method static Tag head(array $attributes = [])
 * @method static Tag meta(array $attributes = [])
 * @method static Tag title(array $attributes = [])
 */

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