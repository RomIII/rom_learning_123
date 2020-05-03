<?php
/**
 * Created by PhpStorm.
 * User: Rom
 * Date: 03.05.2020
 * Time: 16:15
 */

namespace Rom\Calc\Calc\Contracts;
use Rom\Calc\Calc\Operation\Operation;


interface CalcInterface
{
    public function calc(float $v1, Operation $op, float $v2);
}