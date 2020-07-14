<?php

class homeController extends controller {

    public function __construct(){
        $alunos  = new Alunos();
        $alunos -> isLogged();

    }

    public function index(){
       $dados = array();

       $this->loadTemplate('home', $dados);
    }  
}
