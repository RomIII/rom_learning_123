<?php
/**
 * Created by PhpStorm.
 * User: Rom
 * Date: 03.05.2020
 * Time: 16:26
 */

namespace Rom\Calc\Calc;


use Rom\Calc\Calc\Contracts\CalcInterface;
use Rom\Calc\Calc\Operation\Operation;

class Calc implements CalcInterface
{

    public function calc(float $v1, Operation $op, float $v2)
    {
        return $op->exec($v1, $v2);
    }
}