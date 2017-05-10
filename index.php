<!DOCTYPE html>
<html>
<head>
	<title>Examen Parcial</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="images/cabecera.jpg" style="text-align:center;width:100%;height:100%;"/>
			</div>		
		</div>
		
		<div class="row">
			
			<div class="col-md-6">
			<h3>For data scientists</h3>
			<table>
			  <?php
			  $servername = "us-cdbr-iron-east-03.cleardb.net";
			  $username = "b74ba3320e82ec";
			  $password = "2d194843";
			  $dbname = "ad_bb6ddb2f34daf52";
			  // Create connection
			  $conn = new mysqli($servername, $username, $password, $dbname);
			  // Check connection
			  if ($conn->connect_error) {
			      die("Connection failed: " . $conn->connect_error);
			  }
			  $sql = "SELECT * from servicios where codigo_servicio=0001 or codigo_servicio=0002 or codigo_servicio=0003";
			  $result = $conn->query($sql);
			  if ($result->num_rows > 0)  {
			      // output data of each row
			      while($row = $result->fetch_assoc()) {?>
			      <tr>
			      <td><img src=<?php echo $row['imagen_servicio']?>></td>
			      <td><?php echo $row['nombre_servicio']?></td>
			      </tr>
			      <tr>
			      <td></td>
			      <td><?php echo $row['descripcion_servicio']?></td>
			      </tr>
			      <?php }
			  } else {
			      echo "0 results";
			  }
			  $conn->close();
			 ?> 
		    </table>
			</div>
			
			<div class="col-md-6">
			<h3>For IT professionals</h3>
			<table>
			  <?php
			  $servername = "us-cdbr-iron-east-03.cleardb.net";
			  $username = "b74ba3320e82ec";
			  $password = "2d194843";
			  $dbname = "ad_bb6ddb2f34daf52";
			  // Create connection
			  $conn = new mysqli($servername, $username, $password, $dbname);
			  // Check connection
			  if ($conn->connect_error) {
			      die("Connection failed: " . $conn->connect_error);
			  }
			  $sql = "SELECT * from servicios where codigo_servicio=0004 or codigo_servicio=0005 or codigo_servicio=0006";
			  $result = $conn->query($sql);
			  if ($result->num_rows > 0)  {
			      // output data of each row
			      while($row = $result->fetch_assoc()) {?>
			      <tr>
			      <td><img src=<?php echo $row['imagen_servicio']?>></td>
			      <td><?php echo $row['nombre_servicio']?></td>
			      </tr>
			      <tr>
			      <td></td>
			      <td><?php echo $row['descripcion_servicio']?></td>
			      </tr>
			      <?php }
			  } else {
			      echo "0 results";
			  }
			  $conn->close();
			 ?> 
		    </table>
			
			</div>
			
		</div>
		
		<br></br>
		<div class="row">
			<div class="col-md-12">
				<img src="images/pie.jpg" style="text-align:center;width:100%;height:100%;"/>
			</div>		
		</div>
	</div>
	
</body>
</html>
