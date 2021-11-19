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
                <option value=""> Estado</option>
                <option value="Aguascalientes"> Aguascalientes </option>
                <option value="Baja California"> Baja California</option>
                <option value="Baja California Sur"> Baja California Sur </option>
                <option value="Campeche"> Campeche </option>
                <option value="Chiapas "> Chiapas  </option>
                <option value="Chihuahua"> Chihuahua</option>
                <option value="Ciudad de México"> Ciudad de México</option>
                <option value="Coahuila"> Coahuila </option>
                <option value="Colima"> Colima  </option>
                <option value="Durango"> Durango</option>
                <option value="Guanajuato"> Guanajuato </option>
                <option value="Guerrero"> Guerrero </option>
                <option value="Hidalgo"> Hidalgo </option>
                <option value="Jalisco "> Jalisco </option>
                <option value="Veracruz"> Veracruz </option>
                <option value="Yucatán"> Yucatán</option>
                <option value=""> Zacatecas </option>


            </select><br><br>
            <select name="ciudad" id="ciudad">
                <option value=""> Ciudad  </option>
                <option value="Campeche"> Campeche </option>
                <option value="Cancún"> Cancún </option>
                <option value="Chetumal"> Chetumal </option>
                <option value="Chihuahua"> Chihuahua</option>
                <option value="Ciudad del Carmen"> Ciudad del Carmen</option>
                <option value="Colima"> Colima</option>
                <option value="Durango"> Durango</option>
                <option value="Orizaba"> Orizaba</option>
                <option value="Playa del Carmen"> Playa del Carmen</option>
                <option value="Veracruz"> Veracruz</option>
                <option value=" Villahermosa"> Villahermosa</option>
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
