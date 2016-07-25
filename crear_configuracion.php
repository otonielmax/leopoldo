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
                            <li><a href="registrar_estudiante.php">Registrar Existente</a></li>
                            <li><a href="listar_estudiantes.php">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-user" href="">
                            <span class="menu-item">Rol</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_rol.php">Crear</a></li>
                            <li><a href="listar_rol.php">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-user" href="">
                            <span class="menu-item">Periodo</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_periodo.php">Crear</a></li>
                            <li><a href="listar_periodo.php">Listar</a></li>
                        </ul>
                    </li>
                    <!--
                    <li class="dropdown">
                        <a class="sa-side-user" href="">
                            <span class="menu-item">Lapso</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_lapso.php">Crear</a></li>
                            <li><a href="listar_lapso.php">Listar</a></li>
                            
                        </ul>
                    </li>
                    -->
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
                
                <h4 class="page-title">Configuracion del Sistema</h4>
                            
                <!-- Basic with panel-->
                <div class="block-area" id="basic" style="max-width: 50%; min-width: 500px;">
        
                    <?php
                        include('php/configuracion.php');

                        $configuracion = new Configuracion();

                        if (isset($_POST['crearConfiguracion'])) {

                            $grados = $_POST['grados'];
                            $lapsos = $_POST['lapsos'];
                            
                            unset($_POST);
                            $_POST = array();
                        }

                        if (isset($_POST['agregarGrado'])) {
                            echo "<script type='text/javascript'>window.location = 'crear_grado.php';</script>";
                        }

                        if (isset($_POST['agregarLapsos'])) {
                            echo "<script type='text/javascript'>window.location = 'crear_lapso.php';</script>";
                        }

                        if (isset($_POST['agregarRol'])) {
                            echo "<script type='text/javascript'>window.location = 'crear_rol.php';</script>";   
                        }

                    ?>    
                    <form role="form" method="post">
                        <div class="tile p-15">
                            <label style="font-size: 16px; text-align: center; display: block;">Periodo Academico</label>
                            <hr class="whiter m-t-10" style="margin-bottom: 10px; margin-top: 10px;" />

                            <label style="font-size: 14px; margin-bottom: 10px; width: 100%;">Grados</label>
                            <?php
                                $resultado = $configuracion->listarGrado();
                                $numero_registros = mysql_num_rows($resultado);

                                if ($numero_registros > 0) {
                                    echo "<table class='table table-bordered table-hover tile'>";
                                        echo "<thead>";
                                            echo "<tr>";
                                                echo "<th>ID</th>";
                                                echo "<th>Descripcion</th>";
                                                echo "<th>Modificar</th>";
                                                echo "<th>Eliminar</th>";
                                            echo "</tr>";
                                        echo "</thead>";
                                        echo "<tbody>";
                                        while ($row = mysql_fetch_row($resultado)) {
                                            echo "<tr>";
                                                echo "<td>".$row[0]."</td>";
                                                echo "<td>".$row[1]."</td>";
                                                echo "<td><form method='post' action='crear_configuracion.php'><input type='image' alt='Submit' name='modificar' src='img/icon/settings.png' height='16' width='16'/><input type='hidden' name='id_periodo' value=''/></form></td>";
                                                echo "<td><form method='post'><input type='image' alt='Submit' name='eliminar' src='img/icon/delete_white.png' height='16' width='16'/><input type='hidden' name='id_periodo' value=''/></form></td>";
                                            echo "</tr>";
                                        }
                                        echo "</tbody>";
                                    echo "</table>";
                                }
                                else {
                                    echo "<h4 style='font-size: 14px; margin-left: 20px;'>No hay grados registrados</h4>";
                                }
                                
                            ?>
                            <button type="submit" name="agregarGrado" class="btn btn-sm m-b-10" style="display: block; float: right;">Agregar</button>
                            <hr class="whiter m-t-10" style="margin-bottom: 10px;" />
                            </br>

                            <label style="font-size: 14px; margin-bottom: 10px; width: 100%;">Lapsos</label>
                            <?php
                                $resultado = $configuracion->listarLapso();
                                $numero_registros = mysql_num_rows($resultado);

                                if ($numero_registros > 0) {
                                    echo "<table class='table table-bordered table-hover tile'>";
                                        echo "<thead>";
                                            echo "<tr>";
                                                echo "<th>ID</th>";
                                                echo "<th>Lapso</th>";
                                                echo "<th>Modificar</th>";
                                                echo "<th>Eliminar</th>";
                                            echo "</tr>";
                                        echo "</thead>";
                                        echo "<tbody>";
                                        while ($row = mysql_fetch_row($resultado)) {
                                            echo "<tr>";
                                                echo "<td>".$row[0]."</td>";
                                                if ($row[1] == 1) {
                                                    echo "<td>Primero</td>";
                                                }
                                                elseif ($row[1] == 2) {
                                                    echo "<td>Segundo</td>";
                                                }
                                                elseif ($row[1] == 3) {
                                                    echo "<td>Tercero</td>";
                                                }
                                                echo "<td><form method='post' action='crear_configuracion.php'><input type='image' alt='Submit' name='modificar' src='img/icon/settings.png' height='16' width='16'/><input type='hidden' name='id_periodo' value=''/></form></td>";
                                                echo "<td><form method='post'><input type='image' alt='Submit' name='eliminar' src='img/icon/delete_white.png' height='16' width='16'/><input type='hidden' name='id_periodo' value=''/></form></td>";
                                            echo "</tr>";
                                        }
                                        echo "</tbody>";
                                    echo "</table>";
                                }
                                else {
                                    echo "<h4 style='font-size: 14px; margin-left: 20px;'>No hay lapsos registrados</h4>";
                                }
                                
                            ?>
                            <button type="submit" name="agregarLapsos" class="btn btn-sm m-b-10" style="display: block; float: right;">Agregar</button>
                            
                            <div class="form-group" style="max-width: 80%;">
                                <input type="hidden" name="descripcion" class="form-control input-sm m-b-10">
                            </div>
                            </br>
                            </br>

                            <!--
                            <button type="submit" class="btn btn-sm m-t-10">Cancel</button>
                            -->
                        </div>
                    </form>
                </div>
                <!-- Bloque de Reglas -->
                <div class="block-area" id="basic" style="max-width: 50%; min-width: 500px;">
          
                    <form role="form" method="post">
                        <div class="tile p-15">
                            <label style="font-size: 16px; text-align: center; display: block;">Reglas del Sistema</label>
                            
                            <hr class="whiter m-t-10" style="margin-bottom: 10px;" />
                            </br>

                            <label style="font-size: 14px; margin-bottom: 10px; width: 100%;">Roles</label>
                            <?php
                                $resultado = $configuracion->listarRol();
                                $numero_registros = mysql_num_rows($resultado);

                                if ($numero_registros > 0) {
                                    echo "<table class='table table-bordered table-hover tile'>";
                                        echo "<thead>";
                                            echo "<tr>";
                                                echo "<th>ID</th>";
                                                echo "<th>Denominacion</th>";
                                                echo "<th>Modificar</th>";
                                                echo "<th>Eliminar</th>";
                                            echo "</tr>";
                                        echo "</thead>";
                                        echo "<tbody>";
                                        while ($row = mysql_fetch_row($resultado)) {
                                            echo "<tr>";
                                                echo "<td>".$row[0]."</td>";
                                                echo "<td>".$row[1]."</td>";
                                                echo "<td><form method='post' action='crear_configuracion.php'><input type='image' alt='Submit' name='modificar' src='img/icon/settings.png' height='16' width='16'/><input type='hidden' name='id_periodo' value=''/></form></td>";
                                                echo "<td><form method='post'><input type='image' alt='Submit' name='eliminar' src='img/icon/delete_white.png' height='16' width='16'/><input type='hidden' name='id_periodo' value=''/></form></td>";
                                            echo "</tr>";
                                        }
                                        echo "</tbody>";
                                    echo "</table>";
                                }
                                else {
                                    echo "<h4 style='font-size: 14px; margin-left: 20px;'>No hay Roles registrados</h4>";
                                }
                                
                            ?>
                            <button type="submit" name="agregarRol" class="btn btn-sm m-b-10" style="display: block; float: right;">Agregar</button>
                            <hr class="whiter m-t-10" style="margin-bottom: 10px;" />
                            </br>

                            <label style="font-size: 14px; margin-bottom: 10px; width: 100%;">Estudios</label>
                            <div class="form-group"">
                                <input type="text" name="descripcion" class="form-control input-sm m-b-10" placeholder="Promedio minimo requerido para aprobar">
                            </div>
                            </br>

                            <div class="form-group">
                                <input type="text" name="descripcion" class="form-control input-sm m-b-10" placeholder="Numero de Materias de Arrastre">
                            </div>
                            </br>

                            <button type="submit" name="crearConfiguracion" class="btn btn-sm m-t-10" style="display: block; margin: 0 auto;">Actualizar</button>
                            <!--
                            <button type="submit" class="btn btn-sm m-t-10">Cancel</button>
                            -->
                        </div>
                    </form>
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

