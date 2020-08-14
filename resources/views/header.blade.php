<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Moustapha Dieye" />
    <title>
        {{$title ?? 'gestion Banque du Peuple'}}
    </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/notyf.min.css">
    <script src="js/file.js"></script>
    <script src="js/jquery.js"></script>
</head>

<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
    <a class="navbar-brand" href="/">Banque Du Peuple</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="/Client">
                        Client
                    </a>
                    <a class="nav-link" href="/Compte">
                        Compte
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        @yield('content')
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/scripts.js"></script>
</body>

</html>
