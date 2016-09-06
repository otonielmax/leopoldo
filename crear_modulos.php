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
                        
                        <!--
                        <div class="pull-left tm-icon">
                            <a data-drawer="messages" class="drawer-toggle" href="">
                                <i class="sa-top-message"></i>
                                <i class="n-count animated">5</i>
                                <span>Messages</span>
                            </a>
                        </div>
                        <div class="pull-left tm-icon">
                            <a data-drawer="notifications" class="drawer-toggle" href="">
                                <i class="sa-top-updates"></i>
                                <i class="n-count animated">9</i>
                                <span>Updates</span>
                            </a>
                        </div>
                        -->
                        

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
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="sa-side-user" href="">
                                <span class="menu-item">Estudiantes</span>
                            </a>
                            <ul class="list-unstyled menu-item">
                                <li><a href="crear_estudiantes.php">Crear</a></li>
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
                                <!--
                                <li><a href="form-examples.html">Form Examples</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                -->
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
                    
                    <h4 class="page-title">Registrar Modulo</h4>
                                
                    <!-- Basic with panel-->
                    <div class="block-area" id="basic" style="max-width: 500px;">
                        <!--
                        <h3 class="block-title">Basic Example with Panel</h3>
                        -->

                        <?php
                            include('php/modulos.php');

                            if (isset($_POST['registrarModulo'])) {

                                $descripcion = $_POST['descripcion'];

                                if (isset($_POST['activar'])) {
                                    $activar = TRUE;
                                }
                                else {
                                    $activar = FALSE;
                                }

                                $modulo = new Modulos($descripcion, $activar);
                                $respuesta = $modulo->registrarModulo();

                                if ($respuesta == 1) {
                                    echo "<script>alert('El modulo ingresado ya se encuentra registrado');</script>";
                                }
                                
                                unset($_POST);
                                $_POST = array();
                            }
                        ?>    

                        <div class="tile p-15">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Denominacion del Modulo</label>
                                    <input type="text" name="descripcion" class="form-control input-sm m-b-10" placeholder="Ejemplo: Permisos, Usuario, etc..." required>
                                </div>
                                <div class="block-area" id="toggle-switch">
                                    <p>Activar</p>
                                    <div class="make-switch switch-small">
                                        <input type="checkbox" name="activar">
                                    </div>
                                </div>
                                
                                <button type="submit" name="registrarModulo" class="btn btn-sm m-t-10">Registrar</button>
                                <!--
                                <button type="submit" class="btn btn-sm m-t-10">Cancel</button>
                                -->
                            </form>
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

            <script src="js/chosen.min.js"></script> <!-- Custom Multi Select -->
            <script src="js/datetimepicker.min.js"></script> <!-- Date & Time Picker -->
            <script src="js/colorpicker.min.js"></script> <!-- Color Picker -->
            <script src="js/autosize.min.js"></script> <!-- Textare autosize -->
            <script src="js/toggler.min.js"></script> <!-- Toggler -->
            <script src="js/input-mask.min.js"></script> <!-- Input Mask -->
            <script src="js/spinner.min.js"></script> <!-- Spinner -->
            <script src="js/slider.min.js"></script> <!-- Input Slider -->
            
            <!-- Text Editor -->
            <script src="js/editor.min.js"></script> <!-- WYSIWYG Editor -->
            <script src="js/markdown.min.js"></script> <!-- Markdown Editor -->
            
            <!-- UX -->
            <script src="js/scroll.min.js"></script> <!-- Custom Scrollbar -->
            
            <!-- Other -->
            <script src="js/calendar.min.js"></script> <!-- Calendar -->
            <script src="js/feeds.min.js"></script> <!-- News Feeds -->
            
            
            <!-- All JS functions -->
            <script src="js/functions.js"></script>

        </body>
    </html>

