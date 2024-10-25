<?php
require '/apache/htdocs/pagina2php/includes/header.php';  
?>
    <main >
        <form class="form" method="POST">
            <fieldset>
                <legend>Digite todos sus Datos</legend>
                <div class="campos">
                <div class="campo">
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" placeholder="Su Nombre Completo" required autofocus>
                </div>
                <div class="campo">
                    <label for="Telefono">Telefono</label>
                    <input type="number" name="Telefono" id="Telefono" placeholder="+57 3*********">
                </div>
                <div class="campo">
                    <label for="Email">Email</label>
                    <input type="text" name="Email" id="Email" placeholder="correo@correo.com">
                </div>
                <div class="campo">
                    <label for="Mensaje">Mensaje</label>
                    <textarea name="Mensaje" id="Mensaje"></textarea>
                </div>
                <input type="submit" class="btn">
                </div>
            </fieldset>
        </form>
    </main>
<?php 

$Nombre = $_POST['Nombre'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];
$Mensaje = $_POST['Mensaje'];
try{
    //code...
    require __DIR__ .('/includes/conexion_bd.php');
    $sql= "INSERT INTO formulario (Nombre, Telefono, correo, Mensaje) VALUES ('$Nombre', '$Telefono', '$Email', '$Mensaje'); ";
    $query= mysqli_query($coneccion, $sql);
    
} catch (\Throwable $th) {
    var_dump($th);
}



include '/apache/htdocs/pagina2php/includes/footer.php';

?>
