<?php include_once dirname(__DIR__).'/UI/Include/encabezado.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <section>
           <h1>Registro de Usuarios</h1>
           <form action="../BL/usuarioController.php" method="post">
               <input type="text" name="cedula" placeholder="CEDULA" ><br>
               <input type="text" name="nombre" placeholder="NOMBRE COMPLETO" ><br>
               <input type="text" name="telefono" placeholder="TELEFONO" ><br>
               <input type="text" name="correo" placeholder="CORREO ELECTRONICO" ><br>
               <input type="password" name="password" placeholder="CONTRASEÑA" ><br>
               <input type="text" name="direccion" placeholder="DIRECCION" ><br>
               <label for=''>Tipo de Usuario</label><br>
               <input type="radio" name="rol" value="Administrador" >Administrador
               <input type="radio" name="rol" value="Asistente" >Asistente<hr>
               <input type="submit" name="accion" value="Registrar">
               <input type="submit" name="accion" value="Cancelar"> 
           </form>
        </section>
    </body>
</html>
<?php include_once dirname(__DIR__).'/UI/Include/pie.php'; ?>
