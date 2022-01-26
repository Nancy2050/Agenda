<?php

class Controller{
    protected $model;
    function __construct(){
        $this->view = new view();
    }
    /**
 * Carga el modelo especificado
 *
 * Esta funcion recibe el nombre del modelo a cargar, concatenando
 *la raiz models, el nombre y todos terminan con model.php para localizarlo.
 * @access public
 * @param string $model es el nombre del modelo a cargar segun controlador
 * @return url
 */
    function loadModel($model){
        $url = 'models/'.$model.'model.php';
        if(file_exists($url)){
            require $url;
            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
}

?>
