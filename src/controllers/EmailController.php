<?php

namespace src\controllers;

use \core\Controller;
use \src\handlers\EmailHandler;
// use \src\models\Usuario;

class EmailController extends Controller
{
    private $base;
    function __construct()
    {
        $this->base = $this->base();
    }
    public function sendMessage()
    {
        $retorno = array();
        $array = array(
            'name' => addslashes($_POST['name']),
            'email' => addslashes($_POST['email']),
            'phone' => addslashes($_POST['phone']),
            'message' => addslashes($_POST['message']),
            'base' => addslashes($this->base)
        );
        $retorno = EmailHandler::contato($array);

        if ($retorno) {
            EmailHandler::resposta($array);
        }

        echo json_encode($retorno);
        exit;
    }
}
