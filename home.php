<!DOCTYPE html>
<html>
	<head>
		<title>Miguel Prego</title>
		<link rel="icon" href="SSS.png" type="image/gif" sizes="16x16">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	</head>
	
	<body>
		<h1>Smart Shock	web site</h1>
		<img src="SSS.png" style="width:200px;height:200px;">
		<h3>Please enter coordinates</h3>
		<form role="form" method="post" action="store.php">
			<ul style="width: 30%"> 
				<li style="width: 340px">
					<div class="form-group has-feedback">
						<label>Longitude:</label>
						<br>
						North <input type="radio" name="Lat1" value="North" checked="checked">
						South <input type="radio" name="Lat1" value="South">
						<br>
						<input class="element text" placeholder="38"   size="3" type="text" name="Lat2" value=""/>
						<input class="element text" placeholder="6608" size="5" type="text" name="Lat3" value=""/>
					</div>
				</li>
				<li style="width: 340px">
					<div class="form-group has-feedback"> 
						<label>Latitude:</label>
						<br>
						East <input type="radio" name="Lon1" value="East">
						West <input type="radio" name="Lon1" value="West" checked="checked">
						<br>
						<input class="element text" placeholder="9"    size="3" type="text" name="Lon2" value=""/>
						<input class="element text" placeholder="2049" size="5" type="text" name="Lon3" value=""/>
					</div>
				</li>
				<input type="submit" class="btn btn-primary" name="val" value="Submit">
			</ul>
		</form>
	
		<!-- <img src="Mapa_FCT.PNG" alt="O Mapa" style="width: 50%; height: 50%"> -->	
	</body>
</html>

