<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="Violate Responsive Admin Template">
        <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

        <title>Sistema de Eventos</title>
            
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
            <a class="logo pull-left" href="index.php">Gestion de Eventos</a>
            
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
                            <img class="profile-pic animated" src="img/yumay.jpg" alt="">
                        </a>
                        <ul class="dropdown-menu profile-menu">
                            <li><a href="">Mi Perfil</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">Mensajes</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">Configuracion</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">Salir</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                        </ul>
                        <h4 class="m-0">Yusmay Davila</h4>
                        yourlov4ever@gmail.com </br>    
                        +58 0426 417.03.96
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
                            <span class="menu-item">Home</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-eventos" href="">
                            <span class="menu-item">Eventos</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_eventos.php">Crear</a></li>
                            <li><a href="listar_eventos.php">Lista</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-participantes" href="">
                            <span class="menu-item">Participantes</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="crear_participantes.php">Crear</a></li>
                            <li><a href="listar_participantes.php">Lista</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="sa-side-chart" href="charts.php">
                            <span class="menu-item">Graficos</span>
                        </a>
                    </li>
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
                
                <h4 class="page-title">Selecciona un evento</h4>
                                    

                <!-- Table Hover -->
                <div class="block-area" id="tableHover">
                    <!--<h3 class="block-title">Table with Hover Style</h3>-->
                    <div class="table-responsive overflow">

                        <?php
                            include('php/eventos.php');

                            $evento = new Evento();

                            $resultado = $evento->listarEvento();
                            $numero_registros = mysql_num_rows($resultado);

                            if ($numero_registros > 0) {
                                echo "<form role='form' method='post'>";
                                        echo "<div class='form-group'>";
                                            echo "<select name='id_evento' class='select' style='width: 100%;'>";
                                            while ($row = mysql_fetch_row($resultado)) {    
                                                echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                            }    
                                            echo "</select>";
                                        echo "</div></br>";
                                        echo "<button type='submit' name='buscarParticipantes' class='btn btn-sm m-t-10'>Buscar Participantes</button>";
                                    echo "</form>";
                            }
                            else {
                                echo "<h4 class='page-title'>No hay evento registrado, si deseas registrar uno haz click <a href='crear_eventos.php'>aqui</a></h4>";
                            }
                        ?>
                        <!--
                        <table class="table table-bordered table-hover tile">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jhon </td>
                                    <td>Makinton </td>
                                    <td>@makinton</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Malinda</td>
                                    <td>Hollaway</td>
                                    <td>@hollway</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Wayn</td>
                                    <td>Parnel</td>
                                    <td>@wayne123</td>
                                </tr>
                            </tbody>
                        </table>
                        -->
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

