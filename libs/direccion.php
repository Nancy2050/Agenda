<?php
require_once 'controllers/errores.php';
class Direccion{
    /**
 * Redirecciona a pagina
 *
 * En el constructor obtiene la ruta desde la url, separando los elementos
 * para reconocer el controlador que necesita ser llamado, dependiendo
 * si tiene o no parametros que indicaran funciones a ser ejecutadas.
 * En caso  de que no exista un controlador para la ruta, se muestra el de 
 * errores incluido al principio.
 *
 * @access public
 * @var string url
 * @return pagina
 */
    function __construct(){

        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        // cuando se ingresa sin definir controlador por defecto ejecuta main.php
        if(empty($url[0])){
            $archivoController = 'controllers/login.php';
            require_once $archivoController;
            $controller = new login();
            $controller->loadModel('login');
            return false;
        }
        $archivoController = 'controllers/' . $url[0] . '.php';
        if(file_exists($archivoController)){
            require_once $archivoController;
            // inicializar controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);
            // elementos del arreglo
            $nparam = sizeof($url);
            if($nparam > 1){
                if($nparam > 2){
                    $param = [];
                    for($i = 2; $i<$nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                $controller->render();
            }
        }else{
            $controller = new Errores();
        }
    }
}
?>