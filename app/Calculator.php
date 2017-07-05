<?php

namespace App;

class Calculator
{

    public static function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }

    public static function diff($x, $y)
    {
        $z = $x - $y;
        return $z;
    }

    public static function mult($x, $y)
    {
        $z = $x * $y;
        return $z;
    }

    public static function div($x, $y)
    {
        if ($y == 0)
            return "don't divide by zero dummy.";
        $z = $x/$y;
        return $z;
    }
}
