<?php 
require_once __DIR__ .'/../core/Controller.php';
class NotFoundController extends Controller{
//EXIBIR UMA PAGINA 404 PERSONALIZADA
public function index(){
    http_response_code(404);
    $this->view('404/404');
}
}