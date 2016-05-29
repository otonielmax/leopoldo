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
                            <!--
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            -->
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
                        <a class="sa-side-shop" href="">
                            <span class="menu-item">Clientes</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_clientes.php">Crear</a></li>
                            <li><a href="listar_clientes.php">Listar</a></li>
                            <!--
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            -->
                        </ul>
                    </li>

                    
                    <li>
                        <a class="sa-side-chart" href="charts.php">
                            <span class="menu-item">Graficos</span>
                        </a>
                    </li>
                    <!--
                    <li>
                        <a class="sa-side-folder" href="file-manager.html">
                            <span class="menu-item">File Manager</span>
                        </a>
                    </li>
                    -->
                    <li>
                        <a class="sa-side-calendar" href="calendar.php">
                            <span class="menu-item">Calendario</span>
                        </a>
                    </li>
                
                </ul>

            </aside>
        
            <!-- Content -->
            <section id="content" class="container">
            
                <!-- Messages Drawer -->
                <div id="messages" class="tile drawer animated">
                    <div class="listview narrow">
                        <div class="media">
                            <a href="">Send a New Message</a>
                            <span class="drawer-close">&times;</span>
                            
                        </div>
                        <div class="overflow" style="height: 254px">
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Nadin Jackson - 2 Hours ago</small><br>
                                    <a class="t-overflow" href="">Mauris consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">David Villa - 5 Hours ago</small><br>
                                    <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Harris worgon - On 15/12/2013</small><br>
                                    <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Mitch Bradberry - On 14/12/2013</small><br>
                                    <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Nadin Jackson - On 15/12/2013</small><br>
                                    <a class="t-overflow" href="">Ipsum wintoo consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">David Villa - On 16/12/2013</small><br>
                                    <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Harris worgon - On 17/12/2013</small><br>
                                    <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Mitch Bradberry - On 18/12/2013</small><br>
                                    <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Wendy Mitchell - On 19/12/2013</small><br>
                                    <a class="t-overflow" href="">Integer a eros dapibus, vehicula quam accumsan, tincidunt purus</a>
                                </div>
                            </div>
                        </div>
                        <div class="media text-center whiter l-100">
                            <a href=""><small>VIEW ALL</small></a>
                        </div>
                    </div>
                </div>
                
                <!-- Notification Drawer -->
                <div id="notifications" class="tile drawer animated">
                    <div class="listview narrow">
                        <div class="media">
                            <a href="">Notification Settings</a>
                            <span class="drawer-close">&times;</span>
                        </div>
                        <div class="overflow" style="height: 254px">
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Nadin Jackson - 2 Hours ago</small><br>
                                    <a class="t-overflow" href="">Mauris consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">David Villa - 5 Hours ago</small><br>
                                    <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Harris worgon - On 15/12/2013</small><br>
                                    <a class="t-overflow" href="">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Mitch Bradberry - On 14/12/2013</small><br>
                                    <a class="t-overflow" href="">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Nadin Jackson - On 15/12/2013</small><br>
                                    <a class="t-overflow" href="">Ipsum wintoo consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">David Villa - On 16/12/2013</small><br>
                                    <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                                </div>
                            </div>
                        </div>
                        <div class="media text-center whiter l-100">
                            <a href=""><small>VIEW ALL</small></a>
                        </div>
                    </div>
                </div>
                
                <!-- Breadcrumb -->
                
                <ol class="breadcrumb hidden-xs">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Biblioteca</a></li>
                    <li class="active">Datos</li>
                </ol>
                
                <h4 class="page-title">Registrar Estudiante</h4>
                            
                <div class="block-area" id="basic" style="max-width: 500px;">
                    <!--
                    <h3 class="block-title">Basic Example with Panel</h3>
                    -->   
                    <div class="tile p-15">

                        <?php

                            include('php/estudiante.php');

                            $estudiante = new Estudiante();

                            if ($estudiante->existenUsuarios()) {
                                $resultados = $estudiante->listarUsuarios();

                                $num = mysql_fetch_row($resultados);
                                if ($num > 0) {
                                    echo "<form role='form' method='post'>";
                                    echo "<div class='form-group'>";
                                        echo "<select name='id_usuario' class='select' style='width: 100%;'>";
                                        while ($row = mysql_fetch_row($resultados)) {    
                                            echo "<option value='".$row[0]."'>".$row[1]." ".$row[2]."</option>";
                                        }    
                                        echo "</select>";
                                    echo "</div></br>";
                                    echo "<button type='submit' name='registrarEstudiante' class='btn btn-sm     m-t-10'>Registrar</button>";
                                    echo "</form>";
                                }
                                else {
                                    echo "<form role='form' method='post'>";
                                        echo "<div class='form-group'><input type='text' name='nombre1' class='form-control input-sm m-b-10' placeholder='Primer Nombre' required></div></br>";
                                        echo "<div class='form-group'><input type='text' name='nombre2' class='form-control input-sm m-b-10' placeholder='Segundo Nombre (Opcional)'></div></br>";
                                        echo "<div class='form-group'><input type='text' name='apellido1' class='form-control input-sm m-b-10' placeholder='Primer Apellido' required></div></br>";
                                        echo "<div class='form-group'><input type='text' name='apellido2' class='form-control input-sm m-b-10' placeholder='Segundo Apellido (Opcional)'></div></br>";
                                        echo "<div class='form-group'><input type='text' name='cedula' class='form-control input-sm m-b-10' placeholder='Cedula' required></div></br>";
                                        echo "<div class='form-group'><input type='date' name='fecha_nac' class='form-control input-sm m-b-10' required></div></br>";
                                        echo "<div class='form-group'><textarea name='direccion' class='form-control m-b-10' placeholder='Direccion' required></textarea></div></br>";
                                        echo "<button type='submit' name='registrarUsuario' class='btn btn-sm m-t-10'>Registrar</button>";
                        
                                }
                                
                            }

                            if (isset($_POST['registrarEstudiante'])) {

                                if (!$estudiante->validarSiExtudianteExiste($_POST['id_usuario'])) {
                                    $id_usuario = $_POST['id_usuario'];
                      
                                    $estudiante = new Estudiante($id_usuario);
                                    $respuestaRegistro = $estudiante->registrarEstudiante();

                                    unset($_POST);
                                    $_POST = array();
                                }
                                else {
                                    echo "<h4 class='page-title'>El estudiante ya se encuentra asignado a un usuario</h4>";
                                }
                            }        
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

