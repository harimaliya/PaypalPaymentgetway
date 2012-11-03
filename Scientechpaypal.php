<?php
include_once('Paypal.php');			
class Scientechpaypal //extends Paypal
{
		// Create an instance of the paypal library
		function Paymentgetway($ap_payment_email, $currencycode, $SuccessCurrentUrl, $faildCurrentUrl, $servicename, $servicecost, $LastAppointmentId)
		{	
		
			//include_once('Paypal.php');	
			$myPaypal = new Paypal();					
			// Specify your paypal email
			$myPaypal->addField('business', $ap_payment_email);					
			// Specify the currency
			$myPaypal->addField('currency_code', $currencycode);	 //$currencyname			
			// Specify the url where paypal will send the user on success/failure
			$myPaypal->addField('return', $SuccessCurrentUrl);									//Success
			$myPaypal->addField('cancel_return', $faildCurrentUrl);			//Failed
			// Specify the url where paypal will send the IPN
			// Specify the product information
			$myPaypal->addField('item_name', $servicename);
			$myPaypal->addField('amount', $servicecost); //$$servicecost
			$myPaypal->addField('item_number', $LastAppointmentId); 
			
			// Enable test mode if needed
			$myPaypal->enableTestMode();					
			// Let's start the train!
			$myPaypal->submitPayment();
		}	
}

?>