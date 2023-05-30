<?php
namespace ml\laege\fix\laegephplib;


class Feverspots extends \Flight
{
    public static function inhouseRoute($pattern, $callback)
    {
        return \Flight::route($pattern, $callback);
    }
}