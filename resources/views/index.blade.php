<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="System pos for pharmasi Nissi">
    <meta name="author" content="RocsodiaSystem">
    <meta name="keyword" content="Sistema ventas Laravel Vue Js, Sistema compras Laravel Vue Js">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Sistema de Farmacia Nissi</title>
    <!-- Icons -->
    
    <!-- Main styles for this application
-->


<link href="/css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/all.css">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden pace-done pace-done sidebar-minimized brand-minimized">
    <div id="App">
        <header class="app-header navbar">
            <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="logo" href="#">
                <img src="img/logo.png" alt="Logo" style=" width:80px; height:40px; padding-left:5px;" >
            </a>
            <h1 class="title-bussines">
            FARMACIA NISSI
            </h1>
            <ul class="nav navbar-nav ml-auto">
               
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="d-md-down-none">admin </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-center">
                            <strong>Cuenta</strong>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Perfil</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </header>

        <div class="app-body">
            
        @include('template/slidebar.slidebar')
            <!-- Contenido Principal -->
        @yield('content')
            <!-- /Fin del contenido principal -->
        </div>

    

        <footer class="app-footer">
            
            <span><a href="http://www.incanatoit.com/">IncanatoIT</a> &copy; 2017</span>
            <span class="ml-auto">Desarrollado por <a href="http://www.incanatoit.com/">IncanatoIT</a></span>
        </footer>
        
    </div>
    <!-- import js for vue and libries -->
        <script src="js/app.js"></script>
        <script src="js/index.js"></script>
    </body>
</html>
