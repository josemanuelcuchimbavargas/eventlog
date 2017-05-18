<!DOCTYPE html>
<html>
    <head>
        <title>eventlog-JC</title>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" type="text/css" href="css/styleIndex.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    </head>
    <body class="theme-purple">
        <div class="overlay"></div>
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logoP.PNG" style="width: 166px;">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="">Inicio</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="">Próximos Eventos</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">Crear Evento</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="vistas/frmRegistrarUsuario.php">Registrarse</a></li>
                    </ul> 
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="vistas/frmIniciarSesion.php">Iniciar Sesión</a></li>
                    </ul>                                    
                </div>
            </div>
        </nav>
        <div div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
            <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/img1.jpg" />
                        <div class="carousel-caption">
                            <h3></h3>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/img2.jpg" />
                        <div class="carousel-caption">
                            <h3>Second slide label</h3>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/img3.jpg" />
                        <div class="carousel-caption">
                            <h3>Third slide label</h3>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <script type="text/javascript" src="plugins/jquery/jquery.js"></script>
        <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="plugins/node-waves/waves.js"></script>
        <script type="text/javascript" src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script type="text/javascript" src="plugins/jquery-validation/jquery.validate.js"></script>
    </body>
</html>


