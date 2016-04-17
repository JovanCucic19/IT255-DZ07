<?php


header("Content-type: application/json");
	$test_array = array (
	'ime' => 'Jovan',
	'prezime' => 'Cucic',
	'brojTelefona' => '064 342 32 32',
	'email' => 'mojemail@email.com',
);
echo json_encode($test_array);

?>