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
        <link href="css/media-player.css" rel="stylesheet">
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
                        <a class="sa-side-photos" href="">
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
            
                
                
                <!-- Breadcrumb -->
                <ol class="breadcrumb hidden-xs">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Biblioteca</a></li>
                    <li class="active">Datos</li>
                </ol>
                
                <h4 class="page-title">Lista de Periodo</h4>
                                    

                <!-- Table Hover -->
                <div class="block-area" id="tableHover">
                    <!--<h3 class="block-title">Table with Hover Style</h3>-->
                    <div class="table-responsive overflow">

                        <?php
                            include('php/periodo.php');

                            $periodo = new periodo();

                            if (isset($_POST['modificar_x'])) {
                                $id_periodo = $_POST['id_periodo'];
                                //echo "<script>alert('Modicandoooooo');</script>";
                            }

                            if (isset($_POST['eliminar_x'])) {
                                $id_periodo = $_POST['id_periodo'];
                                $periodo->eliminarPeriodo($id_periodo);
                            }

                            $resultado = $periodo->listarPeriodo();
                            $numero_registros = mysql_num_rows($resultado);

                            if ($numero_registros > 0) {
                                echo "<table class='table table-bordered table-hover tile'>";
                                    echo "<thead>";
                                        echo "<tr>";
                                            echo "<th>Periodo Academico</th>";
                                            echo "<th>Inicio</th>";
                                            echo "<th>Culminacion</th>";
                                            echo "<th>Estatus</th>";
                                            echo "<th>Modificar</th>";
                                            echo "<th>Eliminar</th>";
                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    $fecha_actual = date("Y-m-d");
                                    while ($row = mysql_fetch_row($resultado)) {
                                        echo "<tr>";
                                            echo "<td>".$row[0]."</td>";
                                            echo "<td>".$row[1]."</td>";
                                            echo "<td>".$row[2]."</td>";
                                            if (strcmp($fecha_actual, $row[1]) < 0) {
                                                echo "<td>Por iniciar</td>";
                                            }
                                            elseif (strcmp($fecha_actual, $row[1]) >= 0 && strcmp($fecha_actual, $row[2]) < 0) {
                                                echo "<td>En curso</td>";
                                            }
                                            elseif (strcmp($fecha_actual, $row[2]) == 0) {
                                                echo "<td>Ultimo dia</td>";
                                            }
                                            else {
                                                echo "<td>Culminado</td>";
                                            }
                                            echo "<td><form method='post' action='listar_periodo.php'><input type='image' alt='Submit' name='modificar' src='img/icon/settings.png' height='16' width='16'/><input type='hidden' name='id_periodo' value='".$row[3]."'/></form></td>";
                                            echo "<td><form method='post'><input type='image' alt='Submit' name='eliminar' src='img/icon/delete_white.png' height='16' width='16'/><input type='hidden' name='id_periodo' value='".$row[3]."'/></form></td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";
                                echo "</table>";
                            }
                            else {
                                echo "<h4 class='page-title'>No hay periodos registrados</h4>";
                            }

                        ?>
                        
                    </div>
                </div>
               
            </section>
            <br/><br/>
        </section>
        
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script> <!-- jQuery Library -->
        
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        
        <!-- UX -->
        <script src="js/scroll.min.js"></script> <!-- Custom Scrollbar -->
        
        <!-- Other -->
        <script src="js/calendar.min.js"></script> <!-- Calendar -->
        <script src="js/feeds.min.js"></script> <!-- News Feeds -->
        
        
        <!-- All JS functions -->
        <script src="js/functions.js"></script>
    </body>
</html>