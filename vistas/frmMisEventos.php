<!DOCTYPE html>
<html>
    <head>
        <title>eventlog</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link type="text/css" rel="stylesheet" href="../css/styleAdministrador.css">   
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="theme-purple">
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-purple">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Cargando...</p>
            </div>
        </div>
        <div class="overlay"></div>
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="Comienza a escribir....">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="../index.php"><img src="../img/logoP.PNG" style="width:165px;"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">notifications</i>
                                <span class="label-count">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Notifiaciones</li>
                                <li class="body">
                                    <ul class="menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">person_add</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>12 new members joined</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 14 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-cyan">
                                                    <i class="material-icons">add_shopping_cart</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>4 sales made</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 22 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-red">
                                                    <i class="material-icons">delete_forever</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-orange">
                                                    <i class="material-icons">mode_edit</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy</b> changed name</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 2 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-blue-grey">
                                                    <i class="material-icons">comment</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> commented your post</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 4 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">cached</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> updated status</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-purple">
                                                    <i class="material-icons">settings</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>Settings updated</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> Yesterday
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">View All Notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- #END# Notifications -->
                        <!-- Tasks -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">flag</i>
                                <span class="label-count">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">TASKS</li> 
                                <li class="body">
                                    <ul class="menu tasks">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Footer display issue
                                                    <small>32%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Make new buttons
                                                    <small>45%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Create new dashboard
                                                    <small>54%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Solve transition issue
                                                    <small>65%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Answer GitHub questions
                                                    <small>92%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">View All Tasks</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section>
            <aside id="leftsidebar" class="sidebar">
                <div class="user-info">
                    <div class="image">
                        <img src="../img/user.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cristian Tovar</div>
                        <div class="email">ct3920@gmail.com</div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Mi Perfil</a></li>
                                <li role="seperator" class="divider"></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">group</i>Mis Usuarios</a></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                                <li role="seperator" class="divider"></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">input</i>Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <ul class="list">
                        <li class="header"></li>
                        <li class="active">
                            <a href="frmAdministrador.php">
                                <i class="material-icons">home</i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="frmProximosEventosAD.php">
                                <i class="material-icons">public</i>
                                <span>Próximos Eventos</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">event</i>
                                <span>Eventos</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="frmNuevoEvento.php">Nuevo Evento</a>
                                </li>
                                <li>
                                    <a href="frmMisEventos.php">Mis Eventos</a>
                                </li>
                                <li>
                                    <a href="">Clonar Evento</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">content_paste</i>
                                <span>Tareas</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="frmNuevaTarea.php">Asignar Tarea</a>
                                </li>
                                <li>
                                    <a href="frmMisTareas.php">Mis Tareas</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">group_add</i>
                                <span>Agregar Usuarios</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="frmNuevoUsuario.php">Nuevo Usuario</a>
                                </li>
                                <li>
                                    <a href="">Mis Usuarios</a>
                                </li>                             
                            </ul>
                        </li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">email</i>
                            <span>Correos Masivos</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="">Form Examples</a>
                            </li>
                        </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">account_balance</i>
                                <span>Historicos</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="frmHistorialEventos.php">Eventos</a>
                                </li>
                                <li>
                                    <a href="frmHistorialUsuarios.php">Usuarios</a>
                                </li>
                                <li>
                                    <a href="">Registros</a>
                                </li>
                            </ul>
                        </li>

                        <!--<li class="header">LABELS</li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="material-icons col-red">donut_large</i>
                                <span>Important</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="material-icons col-amber">donut_large</i>
                                <span>Warning</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="material-icons col-light-blue">donut_large</i>
                                <span>Information</span>
                            </a>
                        </li>
                    </ul>
                </div>
                        <!-- #Menu -->
                        <!-- Footer -->
                        <!--<div class="legal">
                            <div class="copyright">
                                
                            </div>
                            <div class="version">

                            </div>
                        </div>
                        <!-- #Footer -->
                        </aside>
                        <!-- #END# Left Sidebar -->
                        <!-- Right Sidebar -->
                        <aside id="rightsidebar" class="right-sidebar">
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">TEMAS</a></li>
                                <li role="presentation"><a href="#settings" data-toggle="tab">AJUSTES</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                                    <ul class="demo-choose-skin">
                                        <li data-theme="red" class="active">
                                            <div class="red"></div>
                                            <span>Red</span>
                                        </li>
                                        <li data-theme="pink">
                                            <div class="pink"></div>
                                            <span>Pink</span>
                                        </li>
                                        <li data-theme="purple">
                                            <div class="purple"></div>
                                            <span>Purple</span>
                                        </li>
                                        <li data-theme="deep-purple">
                                            <div class="deep-purple"></div>
                                            <span>Deep Purple</span>
                                        </li>
                                        <li data-theme="indigo">
                                            <div class="indigo"></div>
                                            <span>Indigo</span>
                                        </li>
                                        <li data-theme="blue">
                                            <div class="blue"></div>
                                            <span>Blue</span>
                                        </li>
                                        <li data-theme="light-blue">
                                            <div class="light-blue"></div>
                                            <span>Light Blue</span>
                                        </li>
                                        <li data-theme="cyan">
                                            <div class="cyan"></div>
                                            <span>Cyan</span>
                                        </li>
                                        <li data-theme="teal">
                                            <div class="teal"></div>
                                            <span>Teal</span>
                                        </li>
                                        <li data-theme="green">
                                            <div class="green"></div>
                                            <span>Green</span>
                                        </li>
                                        <li data-theme="light-green">
                                            <div class="light-green"></div>
                                            <span>Light Green</span>
                                        </li>
                                        <li data-theme="lime">
                                            <div class="lime"></div>
                                            <span>Lime</span>
                                        </li>
                                        <li data-theme="yellow">
                                            <div class="yellow"></div>
                                            <span>Yellow</span>
                                        </li>
                                        <li data-theme="amber">
                                            <div class="amber"></div>
                                            <span>Amber</span>
                                        </li>
                                        <li data-theme="orange">
                                            <div class="orange"></div>
                                            <span>Orange</span>
                                        </li>
                                        <li data-theme="deep-orange">
                                            <div class="deep-orange"></div>
                                            <span>Deep Orange</span>
                                        </li>
                                        <li data-theme="brown">
                                            <div class="brown"></div>
                                            <span>Brown</span>
                                        </li>
                                        <li data-theme="grey">
                                            <div class="grey"></div>
                                            <span>Grey</span>
                                        </li>
                                        <li data-theme="blue-grey">
                                            <div class="blue-grey"></div>
                                            <span>Blue Grey</span>
                                        </li>
                                        <li data-theme="black">
                                            <div class="black"></div>
                                            <span>Black</span>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="settings">
                                    <div class="demo-settings">
                                        <p>GENERAL SETTINGS</p>
                                        <ul class="setting-list">
                                            <li>
                                                <span>Report Panel Usage</span>
                                                <div class="switch">
                                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <span>Email Redirect</span>
                                                <div class="switch">
                                                    <label><input type="checkbox"><span class="lever"></span></label>
                                                </div>
                                            </li>
                                        </ul>
                                        <p>SYSTEM SETTINGS</p>
                                        <ul class="setting-list">
                                            <li>
                                                <span>Notifications</span>
                                                <div class="switch">
                                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <span>Auto Updates</span>
                                                <div class="switch">
                                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                                </div>
                                            </li>
                                        </ul>
                                        <p>ACCOUNT SETTINGS</p>
                                        <ul class="setting-list">
                                            <li>
                                                <span>Offline</span>
                                                <div class="switch">
                                                    <label><input type="checkbox"><span class="lever"></span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <span>Location Permission</span>
                                                <div class="switch">
                                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                        </aside>
                        </section>
                        <section class="content">                           
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="info-box bg-pink">
                                                <div class="icon">
                                                    <i class="material-icons">date_range</i>
                                                </div>
                                                <div class="content">
                                                    <div class="text"><h4>Mis Eventos</h4></div>
                                                    <div class="number count-to" data-from="0" data-to="80" data-speed="1000" data-fresh-interval="20">80</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="body">
                                            <table class="table table-bordered table-striped table-hover dataTable js-exportable ui-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre Evento</th>
                                                        <th>Categoria</th>
                                                        <th>Fecha Inicial</th>
                                                        <th>Hora Inicial</th>
                                                        <th>Fecha Final</th>
                                                        <th>Hora Final</th>
                                                        <th>Lugar</th>
                                                        <th>Dirección</th>
                                                        <th>Código Evento</th>

                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Nombre Evento</th>
                                                        <th>Categoria</th>
                                                        <th>Fecha Inicial</th>
                                                        <th>Hora Inicial</th>
                                                        <th>Fecha Final</th>
                                                        <th>Hora Final</th>
                                                        <th>Lugar</th>
                                                        <th>Dirección</th>
                                                        <th>Código Evento</th>

                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012/12/02</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>2009/09/15</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>2008/12/19</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Quinn Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2013/03/03</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Charde Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>36</td>
                                                        <td>2008/10/16</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Haley Kennedy</td>
                                                        <td>Senior Marketing Designer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>London</td>
                                                        <td>43</td>
                                                        <td>2012/12/18</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Tatyana Fitzpatrick</td>
                                                        <td>Regional Director</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>London</td>
                                                        <td>19</td>
                                                        <td>2010/03/17</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Michael Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>London</td>
                                                        <td>66</td>
                                                        <td>2012/11/27</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>2010/06/09</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>2009/04/10</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Bradley Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>London</td>
                                                        <td>41</td>
                                                        <td>2012/10/13</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Dai Rios</td>
                                                        <td>Personnel Lead</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Edinburgh</td>
                                                        <td>35</td>
                                                        <td>2012/09/26</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Jenette Caldwell</td>
                                                        <td>Development Lead</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>New York</td>
                                                        <td>30</td>
                                                        <td>2011/09/03</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>New York</td>
                                                        <td>40</td>
                                                        <td>2009/06/25</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Caesar Vance</td>
                                                        <td>Pre-Sales Support</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>New York</td>
                                                        <td>21</td>
                                                        <td>2011/12/12</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Doris Wilder</td>
                                                        <td>Sales Assistant</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Sidney</td>
                                                        <td>23</td>
                                                        <td>2010/09/20</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Angelica Ramos</td>
                                                        <td>Chief Executive Officer (CEO)</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2009/10/09</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Gavin Joyce</td>
                                                        <td>Developer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Edinburgh</td>
                                                        <td>42</td>
                                                        <td>2010/12/22</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Jennifer Chang</td>
                                                        <td>Regional Director</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Singapore</td>
                                                        <td>28</td>
                                                        <td>2010/11/14</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Brenden Wagner</td>
                                                        <td>Software Engineer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>28</td>
                                                        <td>2011/06/07</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Fiona Green</td>
                                                        <td>Chief Operating Officer (COO)</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>48</td>
                                                        <td>2010/03/11</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Shou Itou</td>
                                                        <td>Regional Marketing</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Tokyo</td>
                                                        <td>20</td>
                                                        <td>2011/08/14</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Michelle House</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Sidney</td>
                                                        <td>37</td>
                                                        <td>2011/06/02</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Suki Burks</td>
                                                        <td>Developer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>London</td>
                                                        <td>53</td>
                                                        <td>2009/10/22</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Prescott Bartlett</td>
                                                        <td>Technical Author</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>London</td>
                                                        <td>27</td>
                                                        <td>2011/05/07</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Gavin Cortez</td>
                                                        <td>Team Leader</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>22</td>
                                                        <td>2008/10/26</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Martena Mccray</td>
                                                        <td>Post-Sales support</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Edinburgh</td>
                                                        <td>46</td>
                                                        <td>2011/03/09</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Unity Butler</td>
                                                        <td>Marketing Designer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/12/09</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Howard Hatfield</td>
                                                        <td>Office Manager</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>51</td>
                                                        <td>2008/12/16</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Hope Fuentes</td>
                                                        <td>Secretary</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>41</td>
                                                        <td>2010/02/12</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Vivian Harrell</td>
                                                        <td>Financial Controller</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>62</td>
                                                        <td>2009/02/14</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Timothy Mooney</td>
                                                        <td>Office Manager</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>London</td>
                                                        <td>37</td>
                                                        <td>2008/12/11</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Jackson Bradshaw</td>
                                                        <td>Director</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>New York</td>
                                                        <td>65</td>
                                                        <td>2008/09/26</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Olivia Liang</td>
                                                        <td>Support Engineer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2011/02/03</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Bruno Nash</td>
                                                        <td>Software Engineer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>London</td>
                                                        <td>38</td>
                                                        <td>2011/05/03</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Sakura Yamamoto</td>
                                                        <td>Support Engineer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Tokyo</td>
                                                        <td>37</td>
                                                        <td>2009/08/19</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Thor Walton</td>
                                                        <td>Developer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2013/08/11</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Finn Camacho</td>
                                                        <td>Support Engineer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/07/07</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Serge Baldwin</td>
                                                        <td>Data Coordinator</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2012/04/09</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Zenaida Frank</td>
                                                        <td>Software Engineer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>New York</td>
                                                        <td>63</td>
                                                        <td>2010/01/04</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Zorita Serrano</td>
                                                        <td>Software Engineer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>56</td>
                                                        <td>2012/06/01</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Jennifer Acosta</td>
                                                        <td>Junior Javascript Developer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Edinburgh</td>
                                                        <td>43</td>
                                                        <td>2013/02/01</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Cara Stevens</td>
                                                        <td>Sales Assistant</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>New York</td>
                                                        <td>46</td>
                                                        <td>2011/12/06</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Hermione Butler</td>
                                                        <td>Regional Director</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2011/03/21</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Lael Greer</td>
                                                        <td>Systems Administrator</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>London</td>
                                                        <td>21</td>
                                                        <td>2009/02/27</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Jonas Alexander</td>
                                                        <td>Developer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>San Francisco</td>
                                                        <td>30</td>
                                                        <td>2010/07/14</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Shad Decker</td>
                                                        <td>Regional Director</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Edinburgh</td>
                                                        <td>51</td>
                                                        <td>2008/11/13</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Michael Bruce</td>
                                                        <td>Javascript Developer</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>Singapore</td>
                                                        <td>29</td>
                                                        <td>2011/06/27</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Donna Snider</td>
                                                        <td>Customer Support</td>
                                                        <td>Hola1</td>
                                                        <td>Hola2</td>
                                                        <td>Hola3</td>
                                                        <td>Hola4</td>
                                                        <td>New York</td>
                                                        <td>27</td>
                                                        <td>2011/01/25</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <script type="text/javascript" src="../plugins/jquery/jquery.js"></script>
                        <script type="text/javascript" src="../plugins/bootstrap/js/bootstrap.js"></script>
                        <script type="text/javascript" src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>
                        <script type="text/javascript" src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>                       
                        <script type="text/javascript" src="../plugins/node-waves/waves.js"></script>
                        <script type="text/javascript" src="../plugins/jquery-countto/jquery.countTo.js"></script>
                        <script type="text/javascript" src="../plugins/jquery-sparkline/jquery.sparkline.js"></script>
                        <script type="text/javascript" src="../plugins/dropzone/dropzone.js"></script>                                                                     
                        <script type="text/javascript" src="../plugins/raphael/raphael.js.js"></script>
                        <script type="text/javascript" src="../plugins/autosize/autosize.js"></script>
                        <script type="text/javascript" src="../plugins/momentjs/moment.js"></script> 
                        <script type="text/javascript" src="../plugins/dropzone/dropzone.js"></script>
                        <script type="text/javascript" src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
                        <script type="text/javascript" src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
                        <script type="text/javascript" src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
                        <script type="text/javascript" src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
                        <script type="text/javascript" src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
                        <script type="text/javascript" src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
                        <script type="text/javascript" src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
                        <script type="text/javascript" src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
                        <script type="text/javascript" src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
                        <script type="text/javascript" src="../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
                        <script type="text/javascript" src="../js/pages/forms/basic-form-elements.js"></script> 
                        <script type="text/javascript" src="../js/pages/tables/jquery-datatable.js"></script>
                        <script type="text/javascript" src="../js/pages/widgets/infobox/infobox-2.js"></script>
                        <script type="text/javascript" src="../js/admin.js"></script>
                        <script type="text/javascript" src="../js/pages/index.js"></script>
                        <script type="text/javascript" src="../js/demo.js"></script>
                        </body>
                        </html>
