<?php
/**
 * Created by PhpStorm.
 * User: Rom
 * Date: 03.05.2020
 * Time: 16:16
 */

namespace Rom\Calc\Calc\Operation;


class Addition extends Operation
{
    public function exec(float $v1, float $v2)
    {
        return $v1 + $v2;
    }

}