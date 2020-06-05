<?php 

return [

	'client_id' => env('PAYPAL_CLIENT',''),
	'secret' => env('PAYPAL_SECRET',''),
	'settings' => array(
		'mode' => env('PAYPAL_MODE',''),
		'http.ConnectionTimeout' => 30 ,
		'log.logEnabled' => 'true',
		'log.Filename' => storage_path().'/logs/paypal.log',
		'log.LogLevel' => 'ERROR'
	),	

];