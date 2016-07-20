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
                            <span class="menu-item">Grado</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_grado.php">Crear</a></li>
                            <li><a href="listar_grado.php">Listar</a></li>
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
                <!-- Breadcrumb -->
                
                <ol class="breadcrumb hidden-xs">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Biblioteca</a></li>
                    <li class="active">Datos</li>
                </ol>
                
                <h4 class="page-title">Asignar grados al periodo</h4>
                            
                <!-- Basic with panel-->
                <div class="block-area" id="basic" style="max-width: 500px;">
                    <!--
                    <h3 class="block-title">Esta instancia sirve para relacionar los grados requerios para cada año escolar, se recomienda anualmente asignar los grados a los nuevos periodos</h3>¨
                    -->
                    <div class="tile p-15">
                        <?php
                            include('php/grado.php');
                            
                            $grado = new Grado();

                            if ($grado->verificarSiExistePeriodo()) { 
                                if ($grado->verificarSiExisteGrado()) {
                                    echo "string2";
                                    $resultados = $grado->listarPeriodo();
                                    $resultado2 = $grado->listarGrado();

                                    echo "<form role='form' method='post'>";
                                        echo "<div class='form-group'><input type='text' name='lapso' class='form-control input-sm m-b-10' placeholder='Numero de Lapso'></div></br>";
                                        echo "<div class='form-group'>";
                                            echo "<select name='id_periodo' class='select' style='width: 100%;'>";
                                            while ($row = mysql_fetch_row($resultados)) {    
                                                echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                            }    
                                            echo "</select>";
                                        echo "</div></br>";
                                        echo "<div class='form-group'>";
                                            echo "<select name='id_periodo' class='select' style='width: 100%;'>";
                                            while ($row = mysql_fetch_row($resultado2)) {    
                                                echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                            }    
                                            echo "</select>";
                                        echo "</div></br>";
                                        echo "<button type='submit' name='registrarLapso' class='btn btn-sm m-t-10'>Registrar</button>";
                                    echo "</form>";

                                    if (isset($_POST['registrarLapso'])) {

                                        $num_lapso = $_POST['lapso'];
                                        $id_periodo = $_POST['id_periodo'];
                                      
                                        $lapso = new Lapso($num_lapso, $id_periodo);
                                        $respuestaRegistro = $lapso->registrarLapso();

                                        unset($_POST);
                                        $_POST = array();

                                    }
                                } 
                            }
                            else {
                                echo "Error";
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

