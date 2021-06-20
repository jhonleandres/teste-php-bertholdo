
<html>
	<title> MEU CEP </title>
	<body> 
		<form action="index.php" method="post">
		<label> Insira o CEP: </label>
		<input type="text" minlength="8" maxlength="8" name="cep">
		<input type="submit" value="Enviar">
	</body>
</html>

<?php

include("Address-class.php");

$address = new Address();


if(!empty($_POST['cep'])){
	
	$cep = $_POST['cep'];

	$data = $address->get_address($cep);

	echo "<br><br>CEP Informado: $cep<br>";
	echo "Rua: $data->logradouro<br>";
	echo "Bairro: $data->bairro<br>";
	echo "Estado: $data->uf<br>";
}


?>