<?php 

require_once __DIR__ . '/../core/Controller.php';
class NoticiasController extends Controller {
    public function index(){
        //RETORNAR A VIEW DE NOTICIAS
        $this->view('noticias/index');
    }
}