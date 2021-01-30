<?php include_once 'includes/templates/header.php';?>

  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam modi maxime odio dignissimos, cum, laudantium velit numquam sapiente reiciendis, quasi reprehenderit culpa vitae repellat ullam doloremque dolor sunt exercitationem consectetur?</p>
  </section><!--Seccion conferencia-->

  <section class="seccion contenedor">
    <h2>Calendario de Eventos</h2>
    <?php 
        try {
            require_once('includes/funciones/bd_conexion.php');
            $sql = "SELECT id_evento,nombre_evento,fecha_evento,hora_evento,cat_evento,icono,nombre_invitado,apellido_invitado ";
            $sql .= "FROM eventos ";
            $sql .= "INNER JOIN categoria_evento ";
            $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= "INNER JOIN invitados ";
            $sql .= "ON eventos.id_inv_evento = invitados.id_invitado ";
            $sql .= "ORDER BY id_evento ";

            $resultado = $conn->query($sql);

        } catch (\EXception $e) {
            echo $e->getMessage();
        }
    ?>

    <div class="calendario">
        <?php 
            $calendario =array();
            while($eventos = $resultado->fetch_assoc()){
                $fecha = $eventos['fecha_evento'];
                $evento = array(
                    'titulo'=>$eventos['nombre_evento'],
                    'fecha'=>$eventos['fecha_evento'],
                    'hora'=>$eventos['hora_evento'],
                    'categoria'=>$eventos['cat_evento'],
                    'icono' => $eventos['icono'],
                    'invitado'=>$eventos['nombre_invitado']." ".$eventos['apellido_invitado']
                );
                $calendario [$fecha][] = $evento;
            }
        ?>
            
        <?php 
            //Imprimir todos los eventos
            foreach($calendario as $dia=>$lista_eventos){ ?>
                <h3>
                    <i class="fa fa-calendar"></i>
                    <?php 
                        setlocale(LC_TIME,'spanish');
                        echo strftime("%A, %d de %B del %Y",strtotime($dia));
                    ?>
                </h3>
                <?php foreach ($lista_eventos as $evento) {?>
                    <div class="dia">
                        <p class= "titulo"><?php echo $evento['titulo'];?></p>
                        <p class="hora">
                            <i class="fa fa-clock" aria-hidden ="true"></i>
                            <?php echo $evento['fecha'] ." ". $evento['hora'];?>
                        </p>
                        <p class= "categoria">
                            <i class="fa <?php echo $evento['icono'] ;?>" aria-hidden ="true"></i>
                            <?php echo $evento['categoria'];?></p>
                        <p class="invitado">
                            <i class="fa fa-user" aria-hidden ="true"></i>
                            <?php echo $evento['invitado'];?>
                        </p>
                    </div>
                <?php }//foreach?>
            <?php }?>
    </div>
    <?php $conn->close(); ?>
  </section><!--calendario-->

<?php include_once 'includes/templates/footer.php';?>