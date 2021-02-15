<?php
 require 'paypal/autoload.php';

 define('URL_SITIO','http://localhost:8080/Curso%20de%20Desarrollo%20Web/GDLWebCamp/');

 $apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AQ-t2CLfXanN5-VY40zv00VX4a0Hq7KIY2Y8yuNnkReeJOFKGHVZfq6zeJ0m39nIyKbtm6KDnHt9pTw8',//cliente ID
        'EFZ3N1ToRhluXVD0lmMjjQFDiRW3ILNdJwg-E6I_N2XOU4OMKDSeWlq_IFXcpfpP-QzW_KcMpJqrwZRV'//Secret
    )
 );

 //var_dump($apiContext);