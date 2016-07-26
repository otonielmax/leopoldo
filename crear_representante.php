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
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">
        <link href="css/calendar.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/icons.css" rel="stylesheet">
        <link href="css/generics.css" rel="stylesheet"> 
    </head>
    <body id="skin-blur-violate">

        <header id="header" class="media">
            <a href="" id="menu-toggle"></a> 
            <a class="logo pull-left" href="index.php">Sistema de Gestion</a>
            
            <div class="media-body">
                <div class="media" id="top-menu">
                    

                    <div id="time" class="pull-right">
                        <span id="hours"></span>
                        :
                        <span id="min"></span>
                        :
                        <span id="sec"></span>
                    </div>
                    <!--
                    <div class="media-body">
                        <input type="text" class="main-search">
                    </div>
                    -->
                </div>
            </div>
        </header>
        
        <div class="clearfix"></div>
        
        <section id="main" class="p-relative" role="main">
            
            <!-- Sidebar -->
            <aside id="sidebar">
                
                <!-- Sidbar Widgets -->
                <div class="side-widgets overflow">
                    <!-- Profile Menu -->
                    <div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
                        <a href="" data-toggle="dropdown">
                            <img class="profile-pic animated" src="img/usuario.png" alt="">
                        </a>
                        <ul class="dropdown-menu profile-menu">
                            <li><a href="">Mi Perfil</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">Mensajes</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">Configuracion</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">Salir</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                        </ul>
                        <h4 class="m-0">Ramiro Gonzalez</h4>
                        @ramiro_g
                    </div>
                    
                    <!-- Calendar -->
                    <div class="s-widget m-b-25">
                        <div id="sidebar-calendar"></div>
                    </div>
                    
                </div>
                
                <!-- Side Menu -->
                <ul class="list-unstyled side-menu">
                    <li class="active">
                        <a class="sa-side-home" href="index.php">
                            <span class="menu-item">Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-user" href="">
                            <span class="menu-item">Usuario</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_usuario.php">Crear</a></li>
                            <li><a href="listar_usuario.php">Listar</a></li>
                            <!--
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            -->
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="sa-side-estudiante" href="">
                            <span class="menu-item">Estudiantes</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_estudiantes.php">Registrar Nuevo</a></li>
                            <li><a href="crear_estudiantes.php">Registrar Existente</a></li>
                            <li><a href="listar_estudiantes.php">Listar</a></li>
                            <!--
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-user" href="">
                            <span class="menu-item">Rol</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_rol.php">Crear</a></li>
                            <li><a href="listar_rol.php">Listar</a></li>
                            <!--
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-user" href="">
                            <span class="menu-item">Periodo</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_periodo.php">Crear</a></li>
                            <li><a href="listar_periodo.php">Listar</a></li>
                            <!--
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-user" href="">
                            <span class="menu-item">Lapso</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_lapso.php">Crear</a></li>
                            <li><a href="listar_lapso.php">Listar</a></li>
                            <!--
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-set" href="">
                            <span class="menu-item">Configuracion</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_configuracion.php">Ver</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        
            <!-- Content -->
            <section id="content" class="container">
            
                <!-- Messages Drawer -->
                
                <!-- Breadcrumb -->
                
                <ol class="breadcrumb hidden-xs">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Biblioteca</a></li>
                    <li class="active">Datos</li>
                </ol>
                
                <h4 class="page-title">Registrar Representante</h4>
                            
                <div class="block-area" id="basic" style="max-width: 500px;">
                    <!--
                    <h3 class="block-title">Basic Example with Panel</h3>
                    -->   
                    <div class="tile p-15">

                        <?php

                            //include('php/config.php');

                            include('php/representante.php');
                            //include('php/usuario.php');

                            $representante = new Representante();

                            echo "<form role='form' method='post'>";
                                echo "<div class='form-group'>";
                                    echo "<label>Parentesco</label>";
                                    echo "<select name='parentesco' class='select' style='width: 100%;'>";    
                                        echo "<option value='Padre'>Padre</option>";
                                        echo "<option value='Madre'>Madre</option>";
                                        echo "<option value='Hermano(a)'>Hemano(a)</option>";
                                        echo "<option value='Abuelo(a)'>Abuelo(a)</option>";
                                        echo "<option value='Tio(a)'>Tio(a)</option>";    
                                    echo "</select>";
                                echo "</div></br>";
                                        
                                echo "<div class='form-group'><input type='text' name='nombre1' class='form-control input-sm m-b-10' placeholder='Primer Nombre' required></div></br>";
                                echo "<div class='form-group'><input type='text' name='nombre2' class='form-control input-sm m-b-10' placeholder='Segundo Nombre (Opcional)'></div></br>";
                                echo "<div class='form-group'><input type='text' name='apellido1' class='form-control input-sm m-b-10' placeholder='Primer Apellido' required></div></br>";
                                echo "<div class='form-group'><input type='text' name='apellido2' class='form-control input-sm m-b-10' placeholder='Segundo Apellido (Opcional)'></div></br>";
                                echo "<div class='form-group'><input type='text' name='cedula' class='form-control input-sm m-b-10' placeholder='Cedula' required></div></br>";
                                echo "<div class='form-group'><input type='text' name='telefono1' class='form-control input-sm m-b-10' placeholder='Telefono de Contacto' required></div></br>";
                                echo "<div class='form-group'><input type='text' name='telefono2' class='form-control input-sm m-b-10' placeholder='Otro Telefono (Opcional)'></div></br>";
                                echo "<div class='form-group'><input type='email' name='correo' class='form-control input-sm m-b-10' placeholder='Correo Electronico' required></div></br>";
                                echo "<div class='form-group'><input type='date' name='fecha_nac' class='form-control input-sm m-b-10' required></div></br>";
                                echo "<div class='form-group'><textarea name='direccion' class='form-control m-b-10' placeholder='Direccion' required></textarea></div></br>";
                                echo "<button type='submit' name='registrarRepresentante' class='btn btn-sm m-t-10'>Registrar</button>";
                            echo "</form>";
                                    
                            if (isset($_POST['registrarRepresentante'])) {

                                if (!$representante->validarSiRepresentanteExiste($_POST['cedula'])) {

                                    $nombre1 = $_POST['nombre1'];
                                    $nombre2 = $_POST['nombre2'];
                                    $apellido1 = $_POST['apellido1'];
                                    $apellido2 = $_POST['apellido2'];
                                    $direccion = $_POST['direccion'];
                                    $cedula = $_POST['cedula'];
                                    $fecha_nac = $_POST['fecha_nac'];
                                    $telefono1 = $_POST['telefono1'];
                                    $telefono2 = $_POST['telefono2'];
                                    $correo = $_POST['correo'];
                                    $parentesco = $_POST['parentesco'];
                      
                                    $respuestaRegistro = $representante->registrarRepresentanteCompleto($nombre1, $nombre2, $apellido1, $apellido2, $cedula, $direccion, $fecha_nac, $telefono1, $telefono2, $correo, $parentesco);

                                    unset($_POST);
                                    $_POST = array();
                                }
                                else {
                                    echo "<h4 class='page-title'>El Representante ya se encuentra registrado en el sistema</h4>";
                                }
                            }

                            //include_once('php/usuario.php');
        
                        ?> 
                    </div>
                </div>
            
            </section>
        </section>
        
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script> <!-- jQuery Library -->
        
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        
        <!--  Form Related -->
        <script src="js/select.min.js"></script> <!-- Custom Select -->
        <script src="js/icheck.js"></script> <!-- Custom Checkbox + Radio -->
        <script src="js/fileupload.min.js"></script> <!-- File Upload -->
        <script src="js/autosize.min.js"></script> <!-- Textare autosize -->
        
        <!-- UX -->
        <script src="js/scroll.min.js"></script> <!-- Custom Scrollbar -->
        
        <!-- Other -->
        <script src="js/calendar.min.js"></script> <!-- Calendar -->
        <script src="js/feeds.min.js"></script> <!-- News Feeds -->
        
        
        <!-- All JS functions -->
        <script src="js/functions.js"></script>

    </body>
</html>

