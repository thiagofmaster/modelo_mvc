<?php

namespace Mvc\Controllers;

use League\Plates\Engine;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class HomeControllers{

    private $view;

    public function __construct(){
        //caminho dos arquivos html
        $source = __DIR__ . "/../../views";

        //Criar uma instanciia de enguine
        $this->view = new Engine($source);
    }

    public function home(Request $request, Response $response, $args){
        //renderizar pagina html
        $template = $this->view->render('home',[
            'title' => 'Home Page'
        ]);

        $response->getBody()->write($template);

        return $response;
    }

}