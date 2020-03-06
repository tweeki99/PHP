<?php
/**
 * Created by PhpStorm.
 * User: шипиловд
 * Date: 05.03.2020
 * Time: 16:48
 */

class Crow extends Animal implements BirdKind
{
    use CanCollectGold, CanFly;

    public function sing()
    {
        // TODO: Implement sing() method.
    }
}