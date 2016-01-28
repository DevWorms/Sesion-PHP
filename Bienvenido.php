<?php
    error_reporting(0);
    require_once 'class/sesion.php';
    session_start();
?>

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
                    <h2>¡Bienvenido!</h2>

                    <?php
                        echo "Nombre de Usuario: " . ($_SESSION['Nombre']) . "<br>";
                        echo "Id de Usuario: " . ($_SESSION['Id']) . "<br>";
                    ?>

                    <br><br>             
                    <form action="class/cerrar_sesion.php">
                        <button type="submit" action="" class="btn btn-danger btn-lg">LogOut</button>
                    </form>
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
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>