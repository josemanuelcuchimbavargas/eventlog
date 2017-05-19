<!DOCTYPE html>
<html>
    <head>
        <title>eventlog-JC</title>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" type="text/css" href="../css/styleRegistrarUsuario.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    </head>
    <body class="signup-page">
        <div class="signup-box">
            <div class="logo">
                <a href="javascript:void(0);"><h3>Registrarse</h3></a>
            </div>
            <div class="card">
                <div class="body">
                    <form id="sign_up" method="POST">
                        <div class="msg"><img src="../img/logo1.PNG"></div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="Nombre" id="txtNombreRU" placeholder="Nombre" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <div class="form-line">
                                <input type="email" class="form-control" name="Email" id="txtEmailRU" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="Contraseña" id="txtContraseñaRU" minlength="6" placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="Confirmar Contraseña" id="txtConfirmarContraseñaRU" minlength="6" placeholder="Confirmar Contraseña" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-10 p-t-5">
                                <input type="checkbox" name="TerminosUsos" id="checkTerminosUsos" class="filled-in chk-col-pink">
                                <label for="checkTerminosUsos">He leído acepto <a href="javascript:void(0);">Terminos y Usos</a>.</label>
                            </div>
                            <div class="col-xs-12">
                                <button class="btn btn-block bg-pink waves-effect" type="submit" id="btnRegistro"><h5>Registrarse</h5></button>
                            </div>                        
                        </div>
                        <div class="m-t-25 m-b--5 align-center">
                            <a href="frmIniciarSesion.php">Ya tienes una cuenta?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../plugins/jquery/jquery.js"></script>
        <script type="text/javascript" src="../plugins/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="../plugins/node-waves/waves.js"></script>
        <script type="text/javascript" src="../plugins/jquery-validation/jquery.validate.js"></script>
        <script type="text/javascript" src="../js/admin.js"></script>
        <script type="text/javascript" src="../js/pages/examples/sign-up.js"></script>
        <script type="text/javascript" src="../js/controles/registro.js"></script>
    </body>
</html>


