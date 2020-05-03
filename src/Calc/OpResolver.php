<?php
/**
 * Created by PhpStorm.
 * User: Rom
 * Date: 03.05.2020
 * Time: 16:28
 */

namespace Rom\Calc\Calc;



use Rom\Calc\Calc\Operation\Addition;
use Rom\Calc\Calc\Operation\Multiply;
use Rom\Calc\Calc\Operation\Substraction;

class OpResolver
{
    public static function resolve(string $op)
    {
        switch ($op) {
            case 'add':
                return new Addition();
            case 'sub':
                return new Substraction();
            case 'mul':
                return new Multiply();
            default: throw new \InvalidArgumentException("Wrong aye");
        }
    }
}