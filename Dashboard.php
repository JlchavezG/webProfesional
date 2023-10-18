<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dark.css">
    <link rel="stylesheet" href="css/pace.css">
    <script src="js/jquery.js"></script>
    <title>Escritorio| IscjlchavezGAdmin</title>
</head>
<body>
    <!-- inicia el navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/New_Logo_Gris_2023.png" alt="logotipo" width="35" height="30">IscjlchavezG
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#house"/>
                            </svg> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#list-check"/>
                            </svg> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#search"/>
                            </svg> 
                        </a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"  data-bs-toggle="offcanvas" data-bs-target="#MenuSistemasOff" aria-controls="MenuSistemasOff">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#grip-vertical"/>
                                </svg> Menu
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#person-circle"/>
                                </svg> Usuario
                            </a>
                            <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <svg class="bi" width="20" height="20" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#person-gear"/>
                                        </svg> Perfil
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <svg class="bi" width="20" height="20" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#question-lg"/>
                                        </svg> Acerca de
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <svg class="bi" width="20" height="20" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#power"/>
                                        </svg> Cerrar Sesión
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#bell-fill"/>
                                </svg> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#headset"/>
                                </svg> 
                            </a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>
    <!-- termina el navbar -->
    <!-- inicia offcanva -->
    <div class="offcanvas offcanvas-start bg-light" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="MenuSistemasOff" aria-labelledby="MenuSistemas">
        <div class="offcanvas-header">
           <div class="container text-center mt-3">
           <svg class="bi" width="50" height="50" fill="currentColor">
                <use xlink:href="library/icons/bootstrap-icons.svg#person-circle"/>
            </svg>
           </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>
        </div>
    </div>
    <!-- termina offcanva -->
    <!-- contenedor de dashboard -->
    <div class="container">
        <div class="justify-content-center mt-5">
            <div class="row mt-5 text-center">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                            <div class="card shadow border-0 border-3 border-start border-info bg-light">
                                <div class="row py-2">
                                    <div class="col">
                                        <svg class="bi" width="25" height="25" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#person-workspace" />
                                        </svg>
                                    </div>
                                    <div class="col">
                                        <span class="fs-6">Usuarios </span><span class="fs-5 fw-bold">&nbsp 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                            <div class="card shadow border-0 border-3 border-start border-info bg-light">
                                <div class="row py-2">
                                    <div class="col">
                                        <svg class="bi" width="25" height="25" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#mortarboard-fill" />
                                        </svg>
                                    </div>
                                    <div class="col">
                                        <span class="fs-6">Alumnos </span><span class="fs-5 fw-bold">&nbsp 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                            <div class="card shadow border-0 border-3 border-start border-info bg-light">
                                <div class="row py-2">
                                    <div class="col">
                                        <svg class="bi" width="25" height="25" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-bar-graph-fill" />
                                        </svg>
                                    </div>
                                    <div class="col">
                                        <span class="fs-6">T.Reportes </span><span class="fs-5 fw-bold">&nbsp 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                            <div class="card shadow border-0 border-3 border-start border-info bg-light">
                                <div class="row py-2">
                                    <div class="col">
                                        <svg class="bi" width="25" height="25" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#backpack2-fill" />
                                        </svg>
                                    </div>
                                    <div class="col">
                                        <span class="fs-6">T.Grupos </span><span class="fs-5 fw-bold">&nbsp 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 text-center">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="row mt-1">
                        <div class="col-sm-3 col-md-3 col-lg-3 mt-2">
                            <div class="card shadow border-0 border-3 border-start border-info bg-light">
                                <div class="row py-2 mt-1">
                                    <div class="col">
                                        <svg class="bi" width="25" height="25" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#bell-fill" />
                                        </svg>
                                    </div>
                                    <div class="col">
                                        <span class="fs-6">Notificaciones </span><span class="fs-5 fw-bold">&nbsp 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 mt-2">
                            <div class="card shadow border-0 border-3 border-start border-info bg-light">
                                <div class="row py-2 mt-1">
                                    <div class="col">
                                        <svg class="bi" width="25" height="25" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#check-all" />
                                        </svg>
                                    </div>
                                    <div class="col">
                                        <span class="fs-6">R. Atendidos </span><span class="fs-5 fw-bold">&nbsp 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-2">
                            <div class="card shadow border-0 border-3 border-start border-info bg-light">
                                <div class="row py-2 mt-1">
                                    <div class="col-sm-3 col-md-3 col-lg-3 justify-content-center">
                                        <svg class="bi" width="25" height="25" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#person-workspace" />
                                        </svg>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3 justify-content-center">
                                        <span class="fs-6">Usuario: </span><span class="fs-6 fw-bold">Nombre</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 text-center">
                        <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
                            <div class="card shadow border-0 border-3 border-start border-info bg-light">
                                <div class="card-header">hi</div>
                                <div class="row py-2 mt-1">
                                    <div class="col-sm-3 col-md-3 col-lg-3 justify-content-center">
                                        <svg class="bi" width="25" height="25" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#person-workspace" />
                                        </svg>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3 justify-content-center">
                                        <span class="fs-6 text-center">Usuario: </span><span class="fs-6 fw-bold">Nombre</span>
                                    </div>
                                    <div class="row">
                                        <div class="col text-end">
                                            <svg class="bi" width="15" height="15" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#caret-right-fill" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
                            <div class="card shadow border-0 border-3 border-start border-info bg-light">
                                <div class="card-header">hi</div>
                                <div class="row py-2 mt-1">
                                    <div class="col-sm-3 col-md-3 col-lg-3 justify-content-center">
                                        <svg class="bi" width="25" height="25" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#person-workspace" />
                                        </svg>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3 justify-content-center">
                                        <span class="fs-6 text-center">Usuario: </span><span class="fs-6 fw-bold">Nombre</span>
                                    </div>
                                    <div class="row">
                                        <div class="col text-end">
                                            <svg class="bi" width="15" height="15" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#caret-right-fill" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- termina el contenedor del dashboard-->    
    <script src="js/bootstrap.min.js"></script>
</body>

</html>