<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="Violate Responsive Admin Template">
        <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

        <title>Leopoldo Aguerrevere</title>
            
        <!-- CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/generics.css" rel="stylesheet"> 
    </head>
    <body id="skin-blur-violate">
        <section id="login">

            <div class="clearfix"></div>

            <?php

                session_start();

                if (isset($_POST['verificarUsuario'])) {
                    
                    include('php/usuario.php');

                    $cedula = $_POST['cedula'];
                    $clave = $_POST['clave'];

                    $user = new Usuario();
                    $respuesta = $user->validarUsuario($cedula, $clave);

                    if (mysql_num_rows($respuesta) > 0) {
                        $row = mysql_fetch_row($respuesta);
                        if ($row[2] == 1) {
                            if ($row[1] == $clave) {
                            $_SESSION['id_usuario'] = $row[0];
                            $_SESSION['nombre1'] = $row[3];
                            $_SESSION['apellido1'] = $row[4];
                            $_SESSION['rol'] = $row[5];

                            header('Location: index.php');
                            }
                        }
                        else {
                            echo "<script>alert('El usuario se encuentra desactivado');</script>";
                        }
                        
                    }
                    else {
                        echo "<script>alert('Los datos ingresados no corresponden a ningun usuario');</script>";
                    }

                    unset($_POST);
                    $_POST = array();

                }
            ?>
            
            <!-- Login -->
            <form class="box tile animated active" method="post" id="box-login">
                <h2 class="m-t-0 m-b-15" align="center">Iniciar Sesion</h2>
                <input type="text" name="cedula" class="login-control m-b-10" placeholder="Ingresa tu cedula" maxlength="10" required>
                <input type="password" name="clave" class="login-control" placeholder="Ingresa tu clave" required>
                <div class="checkbox m-b-20">
                    <label>
                        <input type="checkbox">
                        Recuerdame
                    </label>
                </div>
                <button class="btn btn-sm m-r-5" name="verificarUsuario">Acceder</button>
                </br>
                </br>                    
                <small>
                    <a class="box-switcher" data-switch="box-register" href="">No poseo cuenta</a> o
                    <a class="box-switcher" data-switch="box-reset" href="">Olvide mi clave</a>
                </small>
            </form>
            
            <!-- Register -->
            <form class="box animated tile" id="box-register">
                <h2 class="m-t-0 m-b-15" align="center">Registrar</h2>
                <input type="text" class="login-control m-b-10" placeholder="Primer Nombre">
                <input type="text" class="login-control m-b-10" placeholder="Primer Apellido">
                <input type="text" class="login-control m-b-10" placeholder="Cedula">
                <input type="email" class="login-control m-b-10" placeholder="Correo">    
                <input type="password" class="login-control m-b-10" placeholder="Clave">
                <input type="password" class="login-control m-b-20" placeholder="Confirmar Clave">

                <button class="btn btn-sm m-r-5">Registrame</button>

                <small><a class="box-switcher" data-switch="box-login" href="">Ya poseo una cuenta</a></small>
            </form>
            
            <!-- Forgot Password -->
            <form class="box animated tile" id="box-reset">
                <h2 class="m-t-0 m-b-15">Restablecer mi clave</h2>
                <p>Por favor ingrese su correo para que el sistema le pueda envia la nueva clave</p>
                <input type="email" class="login-control m-b-20" placeholder="Direccion de Correo">    

                <button class="btn btn-sm m-r-5">Restablecer</button>

                <small><a class="box-switcher" data-switch="box-login" href="">Ya me acorde de mi clave</a></small>
            </form>
        </section>                      
        
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script> <!-- jQuery Library -->
        
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        
        <!--  Form Related -->
        <script src="js/icheck.js"></script> <!-- Custom Checkbox + Radio -->
        
        <!-- All JS functions -->
        <script src="js/functions.js"></script>
    </body>
</html>
