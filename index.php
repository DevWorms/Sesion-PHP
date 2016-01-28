<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Start DevWorms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="navbar navbar-fixed-top header" id="subnav">
        <div class="col-md-12">
            <div class="navbar-header">                
                <img src="img/logo.png">               
            </div>
        </div> 
    </div>

                <br><br><br><br>
    <!--main-->
    <div class="container" id="main">
        <div class="panel panel-default">
            <div class="panel-body">

                <!-- **********************  FORM 1  **********************-->
                <div class="well" style="text-align:center">
                    <h2>Accede!</h2>
                    <br><br>                   

                    <!--<button class="btn btn-success" id="btn_form1"> LogIn </button>-->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ModalAcceso">LogIn</button>

                </div> 
                
                </div>
        </div>

        <!-- **********************  FOOTER  ********************** -->
        <div class="row">
            <div class="clearfix"></div>
                <hr>
                <div class="col-md-12 text-center">
                    <p style="color:#545B60">
                        <a href="http://devworms.com" target="_blank">DevWorms</a>
                    </p>
                </div>
        </div>

    </div>

    <!-- Login -->
    <div class="modal fade" id="ModalAcceso" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="text-align: center; color:#000">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Acceder</h4>
                </div>

                <div class="modal-body">
                    <form method="post" id="login_form" action='class/iniciar_sesion.php'>
                        <p><input type="email" class="form-control input-lg" id="correo" name="correo" placeholder="correo@devworms.com"></p>
                        <p><input type="password" class="form-control input-lg" id="contrasena" name="contrasena" placeholder="Password"></p>
                        <p>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <input type="submit" class="btn btn-primary" name="btn_acceder" id="btn_acceder" value="Acceder">
                            <hr />
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/postform.js"></script>
</body>
</html>