<?php

if(!isset($_POST['producto'], $_POST['precio'])){
    exit('Hubo un error');
}

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;



require 'config.php';
$producto = htmlspecialchars($_POST['producto']);
$precio = htmlspecialchars($_POST['precio']);
$precio = (int)$precio;
//var_dump($precio);
$envio = 3;
$total = $precio + $envio;

$compra = new Payer();
$compra->setPaymentMethod('paypal');
//echo $compra->getPaymentMethod();//obter el metodo de pago
$articulo = new Item();
$articulo->setName($producto)
         ->setCurrency('USD')
         ->setQuantity(1)
         ->setPrice($precio);

//echo $articulo->getQuantity();
//echo $articulo->getName();
//echo $articulo->getPrice();

$listaArticulos = new ItemList();
$listaArticulos->setItems(array($articulo));

$detalles = new Details();
$detalles->setShipping($envio)
         ->setSubTotal($precio);

$cantidad = new Amount();
$cantidad->setCurrency('USD')
         ->setTotal($total)
         ->setDetails($detalles);

$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
            ->setItemList($listaArticulos)
            ->setDescription('Pago ')
            ->setInvoiceNumber(uniqid());

$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO."/pago_finalizado.php?exito=true")
              ->setCancelUrl(URL_SITIO."/pago_finalizado.php?exito=false");

//echo $redireccionar->getReturnUrl();

$pago = new Payment();
$pago->setIntent("sale")
     ->setPayer($compra)
     ->setRedirectUrls($redireccionar)
     ->setTransactions(array($transaccion));

try {
    $pago->create($apiContext);
} catch (PayPal\Exception\PayPalConnectionException $pce) {
    echo "<pre>";
        print_r(json_decode($pce->getData()));
        exit;
    echo "</pre>";
}

$aprobado = $pago->getApprovalLink();
header("Location: {$aprobado}");