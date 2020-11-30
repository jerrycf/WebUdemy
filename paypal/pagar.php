<?php 

 if(!isset($_POST['producto'], $_POST['precio'])) {
   exit("hubo un error");
 }
 
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;


require 'config.php';
 
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$envio = 0;
$total = $precio + $envio;

$compra = new Payer();
$compra->setPaymentMethod("paypal");


$articulo = new Item();
$articulo->setName($producto)
      ->setCurrency('MXN')
      ->setQuantity(1)
      ->setPrice($precio);
      
      
$listaArticulos = new ItemList();
$listaArticulos->setItems(array($articulo));
  
$detalles = new Details();
$detalles->setShipping($envio)
         ->setTax(1.6)
          ->setSubtotal($precio); 
          
          
$cantidad = new Amount();
$cantidad->setCurrency('MXN')
          ->setTotal($total)
          ->setDetails($detalles);
          
$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
               ->setItemList($listaArticulos)
               ->setDescription('Pago ')
               ->setInvoiceNumber(uniqid());
               
//$baseUrl = getBaseUrl();
$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl("http://localhost/paypal/pago_finalizado.php?exito=true")
              ->setCancelUrl("http://localhost/paypal/pago_finalizado.php?exito=false");
              
              
$pago = new Payment();
$pago->setIntent("sale")
     ->setPayer($compra)
     ->setRedirectUrls($redireccionar)
     ->setTransactions(array($transaccion));
     
     try {
       $pago->create($apiContext);
     } catch (PayPal\Exception\PayPalConnectionException $pce) {
       // Don't spit out errors or use "exit" like this in production code
       echo "Hubo un error al crear el pago, regresando...";
       exit;
   }

$aprobado = $pago->getApprovalLink();


header("Location: {$aprobado}");