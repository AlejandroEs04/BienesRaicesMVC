<?php

namespace Controllers;

use MVC\Router;
use Model\Vendedor; 

class VendedoresController {
    public static function crear(Router $router) {

        $vendedores = new Vendedor;
        $errores = Vendedor::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crear una nueva instancia
            $vendedor = new Vendedor($_POST['vendedor']);
    
            // Validar que no haya campos vacios
            $errores = $vendedor->validar();
    
            // No hay errores
            if (empty($errores)) {
                $vendedor->guardar();
            }
        }

        $router->render('vendedores/crear', [
            'vendedores' => $vendedores,
            'errores' => $errores
        ]);
    }

    public static function actualizar(Router $router) {

        $errores = Vendedor::getErrores();
        $id = validarORedireccionar('/admin');

        $vendedor = Vendedor::find($id);

        // Ejecutar el código después de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Asignar los atributos
            $args = $_POST['vendedor'];

            $vendedor->sincronizar($args);

            // Validación
            $errores = $vendedor->validar();
        

            if(empty($errores)) {
                $vendedor->guardar();
            }
        }

        $router->render('vendedores/actualizar', [
            'errores' => $errores,
            'vendedor' => $vendedor
        ]);
    }

    public static function eliminar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($_SERVER['REQUEST_METHOD'] === 'POST') {

                // Validar ID
                $id = $_POST['id'];
                $id = filter_var($id, FILTER_VALIDATE_INT);
        
                if ($id) {
        
                    $tipo = $_POST['tipo'];
        
                    if (validarTipoContenido($tipo)) {
                        $vendedor =  Vendedor::find($id);
                        $vendedor->eliminar();
                    } 
                }
            }
        }
    }
}