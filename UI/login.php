<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN TANUKI</title>
        <link rel="stylesheet" type="text/css" href="Css/estilos.css">
    </head>
    <body>
        <section>
            <br>
            <h1>Inicio Sesion</h1>
            <form method="post" action="../BL/usuarioController.php">		
                    <input type="text" placeholder="Correo" name="correo" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="submit" name="accion" value="Ingresar">
            </form>
        </section>
        <footer>
        <p>&copy; Lonnys Varela Primer Examen Programacion IV -- Veterinaria TANUKI<p>
        </footer>                
    </body>
</html>