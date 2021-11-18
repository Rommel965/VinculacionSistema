<?php include "templates/header.php" ;
      include "guardadatos2.php";
?>


        <div class="btn-container">
            <button class="btn btn-primary" type="button">Agregar vacantes</button>
        <form method= "POST" action="">
            <button class="btn btn-primary" 
                name="btnAccion"
                value="Guardar"
                type="submit">Guardar</button>
            

            <input type="text" name="nombre" id="nombre"><br><br>
            <input type="text" name="representante" id="representante"><br><br>
            <select name="estado" id="estado">
                <option value="Campeche"> Campeche</option>
                <option value=""> ccc </option>
                <option value=""> Opcion 3 </option>
                <option value=""> Opcion 4 </option>
                <option value=""> Opcion 5 </option>
            </select><br><br>
            <select name="ciudad" id="ciudad">
                <option value="Calkini"> Calkiní </option>
                <option value=""> Opcion 2 </option>
                <option value=""> Opcion 3 </option>
                <option value=""> Opcion 4 </option>
                <option value=""> Opcion 5 </option>
            </select><br><br>
            <button class="btn btn-primary" type="button">Agregar departamento</button><br><br>
        </form>
            <?php
                $sentencia=$pdo->prepare("SELECT * FROM registroempresanuevo");
                $sentencia->execute();
                $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <table class="table table-light table-bordered">
                <tbody>
                    <tr>
                        <th width="25%" class="text-center">Nombre</th>
                        <th width="25%" class="text-center">Representante</th>
                        <th width="25%" class="text-center">Ciudad</th>
                        <th width="25%" class="text-center">Estado</th>
                    </tr>
                    <?php foreach($listaProductos as $producto){ ?>
                    <tr>
                        <td width="25%" class="text-center"><?php echo $producto['nombre']; ?></td>
                        <td width="25%" class="text-center"><?php echo $producto['representante']; ?></td>
                        <td width="25%" class="text-center"><?php echo $producto['ciudad']; ?></td>
                        <td width="25%" class="text-center"><?php echo $producto['estado']; ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

<?php include "templates/footer.php" ?>
