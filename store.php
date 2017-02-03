<?php
	if(isset($_POST)){	
		$Lat1 = $_POST['Lat1'];
		$Lat2 = $_POST['Lat2'];
		$Lat3 = $_POST['Lat3'];
		$Lon1 = $_POST['Lon1'];
		$Lon2 = $_POST['Lon2'];
		$Lon3 = $_POST['Lon3'];
		
		$Lat = $Lat2 + $Lat3/10000;
		$Lon = $Lon2 + $Lon3/10000;
		
		if ($Lat1 == 'South')
			$Lat = $Lat * -1;
		
		if ($Lon1 == 'West')
			$Lon = $Lon * -1;
			
		$connect = mysqli_connect('localhost', 'root', '') or die('Não foi possível conectar: ' . mysql_error());
		mysqli_select_db($connect, 'tese') or die('Não foi possível seleccionar o banco da dados');
		
		
		$date = date("Y-m-d H:i:s");
		$query = 'INSERT INTO coordenadas (latitude, longitude, data) VALUES (\''.$Lat.'\',\''.$Lon.'\',\''.$date.'\')';
		$result = mysqli_query ($connect, $query) or die('A consulta falhou 2!: ' . mysqli_error($connect));
		if($result === TRUE){
			echo"Coordenada registada com sucesso!";
		}
		else
			echo"Ocorreu um erro no registo!";
	}
?>