<?php
/*****************
 Paypal intigration code modifed 
 easily access mode you can use Paymentgetway function and pass argument
********************************/
	$ap_payment_email = "Harimaliya@gmail.com";
	$currencycode = "USD"; 
	$SuccessCurrentUrl = "http://".$_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	$faildCurrentUrl = $SuccessCurrentUrl."&failed=failed";
	$servicename = "Tesrt";
	$servicecost = "20";
	$LastAppointmentId ="120";

include_once ('Scientechpaypal.php');	//$myScientechpaypal =new Scientechpaypal();
Scientechpaypal::Paymentgetway($ap_payment_email, $currencycode, $SuccessCurrentUrl, $faildCurrentUrl, $servicename, $servicecost, $LastAppointmentId);

?>