<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
      <div class="formulario">
            <h2>Pagos con Paypal</h2>
            <?php
                $resultado = $_GET['exito'];
                //$paymentId = $_GET['paymentId'];
                echo "<pre>";
                    var_dump($resultado);
                echo "</pre>";

                if($resultado == "true"){
                    echo "el pago se realizo correctamente<br/>";
                    //echo "el id del pago es {$paymentId}";
                }
                else{
                    echo "No se realizo el pago";
                }
                /*echo "<pre>";
                    var_dump($_GET['exito']);
                echo "</pre>";*/
            ?>
        </div>
  </body>
  
  
</html>