<?php include_once dirname(__DIR__).'/UI/Include/encabezado.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <section>
           <h1>Registro de Citas</h1>
           <form action="../BL/citaController.php" method="post">
               <input type="text" name="dueño" placeholder="NOMBRE DUEÑO MASCOTA" ><br>
               <input type="text" name="mascota" placeholder="NOMBRE MASCOTA" ><br>
               <input type="text" name="raza" placeholder="RAZA MASCOTA" ><br>
               <input type="text" name="edad" placeholder="EDAD MASCOTA" ><br>
               <label for=''>Fecha de la Cita</label><br>
               <input type="date" name="fecha" placeholder="FECHA CITA" ><br>
               <label for=''>Observaciones</label><br>
               <textarea class="form-control" name="observacion"></textarea>
               <input type="submit" name="accion" value="Registrar">
               <input type="submit" name="accion" value="Cancelar"> 
           </form>
        </section>
    </body>
</html>
<?php include_once dirname(__DIR__).'/UI/Include/pie.php'; ?>