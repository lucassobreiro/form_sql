<?php
	if($_POST)
	{
		$name = $_POST['name'];
		$age = $_POST['age'];
		$conn = new mysqli($_SERVER['HTTP_HOST'], "root", "");	

		if($conn->connect_error)
		{
			die("Erro: " . $conn->connect_error);
		}
		mysqli_query($conn, "USE PHPForm");

		if(mysqli_query($conn, "INSERT INTO pessoa VALUES('$name', $age)")===TRUE)
		{
			echo "Formulário enviado.";
		}
		else
		{
			echo "Erro ao tentar enviar formulário.";
		}
		mysqli_close($conn);
	}
	else
	{
		echo "Formulário em branco.";
	}
?>

