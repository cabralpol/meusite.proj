<?php

namespace src\controllers;

use \core\Controller;
use src\models\Portfolio;

class HomeController extends Controller
{
    private $portfolio;

    public function __construct()
    {
        $this->portfolio = Portfolio::getPortfolio();        
    }

    public function index()
    {
        $this->render(
            'home',
            [
                'title' => 'TR Web',
                'portfolio' => $this->portfolio
            ]
        );
    }

    public function themes()
    {
        $this->render(
            'themes',
            [
                'title' => 'TR Web',
                'portfolio' => $this->portfolio
            ]
        );
    }

    // public function sobre()
    // {
    //     $this->render('sobre');
    // }

    // public function sobreP($args)
    // {
    //     print_r($args);
    // }    
}
