<!DOCTYPE html>
<html>
    <head>
        <title>eventlog-JC</title>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" type="text/css" href="../css/styleIniciarSesion.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="logo">
                <a href="javascript:void(0);"><h3>Iniciar Sesión</h3></a>
            </div>
            <div class="card">
                <div class="body">
                    <form id="sign_in" method="POST">
                        <div class="msg"><img src="../img/logo1.PNG"></div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="Email" placeholder="Email" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="Contraseña" placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-8 p-t-5">
                                <input type="checkbox" name="Recordarme" id="checkRecordarme" class="filled-in chk-col-pink">
                                <label for="checkRecordarme">Recordarme</label>
                            </div>
                            <div class="col-xs-12">
                                <button class="btn btn-block bg-pink waves-effect" type="submit"><h5>Iniciar Sesión</h5></button>
                            </div>
                        </div>
                        <div class="row m-t-15 m-b--15">
                            <div class="col-xs-6">
                                <a href="frmRegistrarUsuario.php">Registrar Usuario!</a>
                            </div>
                            <div class="col-xs-6 align-right">
                                <a href="forgot-password.html">Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="../plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../plugins/node-waves/waves.min.js"></script>
    <script type="text/javascript" src="../plugins/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript" src="../js/admin.js"></script>
    <script type="text/javascript" src="../js/pages/examples/sign-in.js"></script>
</html>

