<?php
/**
 * Created by PhpStorm.
 * User: Rom
 * Date: 03.05.2020
 * Time: 15:54
 */

namespace Rom\Calc\Controller;

use Illuminate\Http\Request;
use Rom\Calc\Calc\Contracts\CalcInterface;
use Rom\Calc\Calc\OpResolver;

class CalcController extends \Illuminate\Routing\Controller
{
    public function index()
    {
        return view('mycalc::calc');

    }

    public function calc(Request $request, CalcInterface $calc)
    {
        $v1 = floatval($request->v1);
        $v2 = floatval($request->v2);
        $op = OpResolver::resolve($request->op);

        return $calc->calc($v1, $op, $v2);
    }
}