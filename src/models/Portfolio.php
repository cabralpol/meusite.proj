<?php

namespace src\models;

use \core\Model;

class Portfolio extends Model
{

    public function __construct()
    {
    }

    public static function getPortfolio()
    {
        $array = array();
        $data = Portfolio::select()->get();
        if (count($data) > 0) {
            $array = $data;
        }
        return $array;
    }
}
