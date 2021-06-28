<?php
	function resul($name, $age)
	{
		$conn = mysqli_connect($_SERVER['HTTP_HOST'], "root", "");

		if($conn->connect_error)
		{
			return "Ocorreu um erro: " . $conn->connect_error;
		}
		else if($_POST == false)
		{		
			mysqli_close($conn);
			return "Formulário em branco.";
		}
		else
		{
			mysqli_query($conn, "USE PHPForm");
			mysqli_query($conn, "INSERT INTO pessoa VALUES('$name', $age)");
			mysqli_close($conn);

			return "Formulário enviado.";
		}
	}

	echo resul($_POST['name'], $_POST['age']);
?>
