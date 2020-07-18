<?php include_once dirname(__DIR__).'/UI/Include/encabezado.php'; 

require_once dirname(__DIR__).'/BL/citaServicios.php';
    if(isset($_GET['codigo'])){
        $codigo = $_GET['codigo'];
        $servicios = new citaServicios();
        $citaXcodigo = $servicios->buscarXcodigo($codigo);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <section>
           <h1>Edicion datos de Citas</h1>
           <form action="../BL/citaController.php" method="post">
               <label for=''>ID CITA<input type="text" name="id" placeholder="ID CITA" readonly value="<?=$citaXcodigo->getId();?>"></label><br>
               <label for=''>NOMBRE DUEÑO MASCOTA<input type="text" name="dueño" placeholder="NOMBRE DUEÑO MASCOTA" value="<?=$citaXcodigo->getDueño();?>"></label><br>
               <label for=''>NOMBRE MASCOTA<input type="text" name="mascota" placeholder="NOMBRE MASCOTA" value="<?=$citaXcodigo->getMascota();?>"></label><br>
               <label for=''>RAZA MASCOTA<input type="text" name="raza" placeholder="RAZA MASCOTA" value="<?=$citaXcodigo->getRaza();?>"></label><br>
               <label for=''>EDAD MASCOTA<input type="text" name="edad" placeholder="EDAD MASCOTA" value="<?=$citaXcodigo->getEdad();?>"></label><br>
               <label for=''>FECHA CITA<input type="text" name="fecha" placeholder="FECHA CITA" value="<?=$citaXcodigo->getFecha();?>"></label><br>
               <label for=''>OBSERVACION<input type="text" name="observacion" placeholder="OBSERVACION" value="<?=$citaXcodigo->getObservacion();?>"></label><br>
               <input type="submit" name="accion" value="Modificar">
               <input type="submit" name="accion" value="Cancelar"> 
           </form>
        </section>
    </body>
</html>
<?php include_once dirname(__DIR__).'/UI/Include/pie.php'; ?>