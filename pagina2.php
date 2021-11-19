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
                <option value=""> Aguascalientes </option>
                <option value=""> Baja California</option>
                <option value=""> Baja California Sur </option>
                <option value=""> Campeche </option>
                <option value=""> Chiapas  </option>
                <option value=""> Chihuahua</option>
                <option value=""> Ciudad de México</option>
                <option value=""> Coahuila </option>
                <option value=""> Colima  </option>
                <option value=""> Durango</option>
                <option value=""> Guanajuato </option>
                <option value=""> Guerrero </option>
                <option value=""> Hidalgo </option>
                <option value=""> Jalisco </option>
                <option value=""> Michoacán</option>
                <option value=""> Morelos</option>
                <option value=""> Nayarit</option>
                <option value=""> Nuevo León </option>
                <option value=""> Oaxaca </option>
                <option value=""> Puebla </option>
                <option value=""> Querétaro </option>
                <option value=""> Quintana Roo</option>
                <option value=""> San Luis Potosí </option>
                <option value=""> Sinaloa</option>
                <option value=""> Sonora </option>
                <option value=""> Tabasco </option>
                <option value=""> Tamaulipas </option>
                <option value=""> Tlaxcala</option>
                <option value=""> Veracruz </option>
                <option value=""> Yucatán</option>
                <option value=""> Zacatecas </option>


            </select><br><br>
            <select name="ciudad" id="ciudad">
                <option value=""> Ciudad  </option>
                <option value=""> Aguascalientes </option>
                <option value=""> Campeche </option>
                <option value=""> Cancún </option>
                <option value=""> Chetumal </option>
                <option value=""> Chihuahua</option>
                <option value=""> Ciudad del Carmen</option>
                <option value=""> Colima</option>
                <option value=""> Durango</option>
                <option value=""> Orizaba</option>
                <option value=""> Piedras Negras</option>
                <option value=""> Playa del Carmen</option>
                <option value=""> Veracruz</option>
                <option value=""> Villahermosa</option>
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
