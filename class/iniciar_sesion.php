<?php
    error_reporting(0);

    include('Connector.php');
    $db = new Connector();

    function notificacion($msj) {
        echo 
        "<script>
            alert('" . $msj . "');
        </script>";
    }

    if (isset($_POST['btn_acceder'])) {
        $correo = $db->sec($_POST['correo']);
        $contrasena = $db->sec($_POST['contrasena']);

        if ($correo == null || $contrasena == null) {
            notificacion($msj = "Por favor complete todos los campos");
            header("Location:/loginPHP");
        } else {
                $consulta = "SELECT * FROM usuarios WHERE correo_usuario = '" . $correo . "' AND password_usuario = '" . $contrasena . "';";
                $db->execute($consulta);

                if ($result->num_rows == 1) {

                    while ($resultado = $result->fetch_assoc()) {
                        session_start();
                        $_SESSION["Nombre"] = $resultado['nombre_usuario'];
                        $_SESSION["Id"] = $resultado['id_usuario'];
                        session_write_close();
                    }

                    header("Location:/loginPHP/Bienvenido.php");

                } else {
                    notificacion($msj = "El usuario o contraseña son incorrectos, vuelve a intentar.");
                    header("Location:/loginPHP");
                }

            }
    }
?>