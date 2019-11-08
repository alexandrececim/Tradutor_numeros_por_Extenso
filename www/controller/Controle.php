<?php
    require_once "view/ViewLido.php";
    require_once "model/Extenso.php";

class Controle
{
    private $view;
    private $model;

    public function __construct($mensagemRecebida)
    {
        $this -> view   = new ViewLido;
        $this -> model  = new Extenso;

        $numeroExtenso = $this-> model->lerExtenso($mensagemRecebida);

        $this->view->returnoJson($numeroExtenso);


    }
}

