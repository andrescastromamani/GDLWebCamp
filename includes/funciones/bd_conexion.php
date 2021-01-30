<?php 
    $conn = new mysqli('localhost:33066','root', '', 'gdlwebcamp');
    if($conn->connect_error){
         echo $error->$conn->$connect_error;
     }

    // $conn = mysqli_connect("localhost:33066", "root", "", "gdlwebcamp");
    // // Comprobamos la conexión
    // if (!$conn) {
    //     die("La conexión ha fallado: " . mysqli_connect_error());
    // }
    // echo "Conexión satisfactoria";
    // mysqli_close($conn);
?>
