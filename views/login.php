<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL')?>resources/css/style.css">
    <title>LOGIN</title>
</head>
<body>
    <!--Contendor principal engloba dos partes: informacion e imagen-->
    <div class="login-container">
        <!--Contendor secundario izquierdo: informacion-->
        <div class="login-information-container">
            <h1 class="title">Iniciar sesion</h1>
            <!--Contendor redes sociales-->
            <div class="social-login">
                <div class="social-login-element">
                    <img src="<?php echo constant('URL');?>resources/imagenes/google.png" alt="google-img">
                    <span>Google</span>
                </div>
                <div class="social-login-element">
                    <img src="<?php echo constant('URL');?>resources/imagenes/facebook.png" alt="facebook-img">
                    <span>Facebook</span>
                </div>
            </div>
                <p>or</p>
              <!--Formulario de ingreso-->                
              <form class="inputs-container">
                    <input class="input" type="text" placeholder="Username">
                    <input class="input" type="text" placeholder="Password">
                    <p>¿Olvidaste la contraseña?<span class="span"> Recuperar</span></p>
                    <button class="btn">login</button>
                    <p>¿Eres nuevo aqui? <span class="span"> Registrate</span></p>
                </form>   
        </div>
            <img class="image-container" src="<?php echo constant('URL');?>resources/imagenes/lateral-login.svg" alt="login-image-lateral">
    </div>
</body>
</html>