<?php
class View{
    function __construct(){
    }
/**
 * Incluye el archivo indicado
 *
 * Esta funcion retoma el valor del parametro, concatenando la raiz:
 * el directorio donde se almacenan las vistas con el valor y la extension .php
 * para que el usuario vea la pagina indicada
 * @access public
 * @param string $nombre es el nombre de la vista a cargar
 * @return url
*/
    function render($nombre){
        require 'views/'.$nombre.'.php';
    }
}
?>
