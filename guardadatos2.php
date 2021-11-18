<?php
    include "conexion.php";
    if(isset($_POST['btnAccion']))
    {
        switch ($_POST['btnAccion']) {
            case 'Guardar':
                $nombre = $_POST['nombre'];
                $representante = $_POST['representante'];
                $ciudad = $_POST['estado'];
                $estado = $_POST['ciudad'];

                $insertempresa1 = "INSERT INTO `registroempresanuevo` (`id`, `nombre`, `representante`, `ciudad`, `estado`) VALUES (NULL, '$nombre', '$representante', '$ciudad', '$estado');";
                $sentencia=$pdo->prepare($insertempresa1);
                $sentencia->execute();
                break;
            
            default:
                # code...
                break;
        }
    }

    

?>
