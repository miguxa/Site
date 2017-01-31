<?php
	$tablesize = $_GET['tablesize'];
	$number = ($_GET['number']-1)*$tablesize;

	$connect = mysqli_connect('localhost', 'root', '') or die('Não foi possível conectar: ' . mysql_error());
	mysqli_select_db($connect, 'tese') or die('Não foi possível seleccionar o banco da dados');

	$query = 'SELECT LATITUDE, LONGITUDE FROM COORDENADAS LIMIT '.$tablesize.' OFFSET '.$number;

	$result = mysqli_query ($connect, $query) or die('A consulta falhou!: ' . mysqli_error($connect));
	$number = mysqli_num_rows($result);

    echo '<table style="width:100%" border="2" cellpadding="5" align="center">'
            . '<tr bgcolor="#00FF00">'
            . '<th>Latitude</th>'
            . '<th>Longitude</th>'
            . '<th> </th>'
            . '</tr>';

    if(mysqli_num_rows($result)>0)        
		while($rows = mysqli_fetch_array($result)){
			echo '<tr align="center">'
                . '<td>', $rows['LATITUDE'], '</td>'
                . '<td>', $rows['LONGITUDE'], '</td>'
                . '<td>', '<a href="showLocation.php?latitude='.$rows['LATITUDE'].'&longitude='.$rows['LONGITUDE'].'"> Mapa </a>', '</td>'
                . '</tr>';
	}
	echo '</table>';

	$query = 'SELECT COUNT(ID) FROM COORDENADAS';
	$result = mysqli_query ($connect, $query) or die('A consulta falhou!: ' . mysqli_error($connect));
	$counter =intval(mysqli_fetch_row($result)[0]);
	$pages = ceil($counter/  $tablesize);

	echo "<p>";
	for($i=1; $i<=$pages; $i++){
		if($_GET['number'] == $i)
			echo $i.' ';
		else
			echo '<a href="listlocations.php?number='.$i.'&tablesize='.$tablesize.'">'.$i.'</a> ';
	}
?>