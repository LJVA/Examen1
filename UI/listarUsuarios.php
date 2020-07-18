<?php include_once dirname(__DIR__).'/UI/Include/encabezado.php'; require_once dirname(__DIR__).'/BL/usuarioServicios.php';
        $servicio = new usuarioServicios();
        $listado = $servicio->listaUsers();
;?>
<section>
    <br>
    <h1>DESACTIVAR USUARIOS / ACTIVAR USUARIOS</h1>
    <table id="t1" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>CEDULA</th>
                <th>NOMBRE COMPLETO</th>
                <th>TELEFONO</th>
                <th>CORREO</th>
                <th>DIRECCION</th>
                <th>ESTADO</th>
                <th>ROL</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php      
                   if(count($listado)>0):                        
                   foreach($listado as $posicion=> $user):?>
                   <tr>
                       <td><?=$user->getId();?></td>
                       <td><?=$user->getCedula();?></td>
                       <td><?=$user->getNombre();?></td>
                       <td><?=$user->getTelefono();?></td>
                       <td><?=$user->getCorreo();?></td>
                       <td><?=$user->getDireccion();?></td>
                       <td><?php if($user->getEstado() == 1){echo'ACTIVO';}else{echo'DESACTIVO';}?></td>
                       <td><?=$user->getRol();?></td>
                       <td><a href="../BL/usuarioController.php?accion=status&codigo=<?=$user->getId();?>">Cambiar Estado</a></td>
                   </tr>                
                <?php
                   endforeach;
                   endif;
                ?>
        </tbody>
    </table>
</section>
<?php include_once dirname(__DIR__).'/UI/include/pie.php'; ?>
