<?php
/**
 * Created by PhpStorm.
 * User: Rom
 * Date: 03.05.2020
 * Time: 16:16
 */

namespace Rom\Calc\Calc\Operation;


abstract class Operation
{
    public abstract function exec(float $v1, float $v2);

}