<?php
class errores extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('errores');
    }
}
?>