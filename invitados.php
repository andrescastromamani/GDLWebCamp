<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam modi maxime odio dignissimos, cum, laudantium velit numquam sapiente reiciendis, quasi reprehenderit culpa vitae repellat ullam doloremque dolor sunt exercitationem consectetur?</p>
</section>
<!--Seccion conferencia-->

    <?php
    try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM `invitados`";
        $resultado = $conn->query($sql);
    } catch (\EXception $e) {
        echo $e->getMessage();
    }
    ?>
    <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix">
            <?php while ($invitados = $resultado->fetch_assoc()) { ?>
                <li>
                    <div class="invitado">
                        <a href="#invitado<?php echo $invitados['id_invitado'];?>" class="invitado-info">
                            <img src="img/<?php echo $invitados['url_imagen'];?>" alt="invitado">
                            <p><?php echo $invitados['nombre_invitado']." ".$invitados['apellido_invitado']; ?></p>
                        </a>
                    </div>
                </li>
                <div style="display: none;">
                    <div class="invitado-info"  id="invitado<?php echo $invitados['id_invitado'];?>">
                        <h2><?php echo $invitados['nombre_invitado']." ".$invitados['apellido_invitado']; ?></h2>
                        <img src="img/<?php echo $invitados['url_imagen'];?>" alt="invitado">
                        <p><?php echo $invitados['descripcion'];?></p>
                    </div>
                </div>
            <?php } ?>
        </ul>
    </section>
    <!--Seccion invitados-->
    <?php $conn->close(); ?>

<?php include_once 'includes/templates/footer.php'; ?>