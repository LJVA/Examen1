<?php include_once dirname(__DIR__).'/UI/Include/encabezado.php'; require_once dirname(__DIR__).'/BL/citaServicios.php';
        $servicio = new citaServicios();
        $listadoCitas = $servicio->listaCitas();
;?>
<section>
    <br>
    <h1>Lista de Citas</h1>
    <table id="t1" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE DUEÑO</th>
                <th>NOMBRE MASCOTA</th>
                <th>RAZA MASCOTA</th>
                <th>EDAD MASCOTA</th>
                <th>FECHA CITA</th>
                <th>OBSERVACIONES</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                   if(count($listadoCitas)>0):                        
                   foreach($listadoCitas as $posicion=> $cita):?>                       
                   <tr>
                       <td><?=$cita->getId();?></td>
                       <td><?=$cita->getDueño();?></td>
                       <td><?=$cita->getMascota();?></td>
                       <td><?=$cita->getRaza();?></td>
                       <td><?=$cita->getEdad();?></td>
                       <td><?=$cita->getFecha();?></td>
                       <td><?=$cita->getObservacion();?></td>
                       <td><a href="modificarCita.php?codigo=<?=$cita->getId();?>">Editar</a></td>
                       <td><a href="../BL/citaController.php?accion=Eliminar&codigo=<?=$cita->getId();?>">Borrar</a></td>
                   </tr>                
                <?php
                   endforeach;
                   endif;
                ?>
        </tbody>
    </table>
</section>
<?php include_once dirname(__DIR__).'/UI/include/pie.php'; ?>