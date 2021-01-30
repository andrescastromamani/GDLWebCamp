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
            $sql = "SELECT * FROM eventos";
            $resultado = $conn->query($sql);

        } catch (\EXception $e) {
            echo $e->getMessage();
        }
    ?>
    <div class="calendario">
        <?php $eventos = $resultado->fetch_assoc(); ?>
    </div>
    <pre> <?php var_dump($eventos); ?></pre>
    <?php $conn->close(); ?>
  </section><!--calendario-->

<?php include_once 'includes/templates/footer.php';?>