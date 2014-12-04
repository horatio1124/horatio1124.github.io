<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-
scale=1">
<title>Employees CRUD</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5
elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the
page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/
3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/
1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript" src="jquery.min.js"></script>

<?php

	$con=msqli_connect("localhost","hgaldamez","hgaldamez","employees");

		if(mysqli_connect_error()){
			die("Could not connect");
		}
		

?>

<?php
		if(&_GET["submit"]){
			if($_GET["firstName"]){
				echo "Your name is ".$_GET['firstName'];
				}else{
				 echo "nada";
				}
				
		}		
?>

<style>

.wrapper{
	margin-left:33%;
	margin-right:33%;
	margin-top:10%;
}

.glyphs{
	color:#01A9DB;
}

.glyphSize{
	font-size:142%;
}

</style>

</head>


<body data-spy="scroll" data-target=".navbar-collapse">

	<div class="container inline col-lg-4 wrapper" align="center">
	
		<h2>Employees CRUD</h2>
		</br>
	
		<form action="index.php">
		
			<div class="input-group">
			
				<span class="glyphicon glyphicon-calendar input-group-addon glyphs"></span>
				<input class="form-control"type="date" placeholder="Birth-Date" name="birthDate"></input>
			</div>
			
			</br>
		
			<div class="input-group">
				<span class="glyphicon glyphicon-user input-group-addon glyphs"></span>
				<input class="form-control"type="text" placeholder="Nombre" name="firstName"></input>
			</div>
			
			
			</br>
			
			<div class="input-group">
			
				<span class="glyphicon glyphicon-user input-group-addon glyphs"></span>
				<input class="form-control"type="text" placeholder="Apellido" name="lastName"></input>
			</div>
			
			
			
			</br>
			
			<div class="input-group">
		
				<input class="form-control"type="checkbox" name="gender">Género (Checked=Masculino)</input>
			</div>
			
			</br>
			
			<div class="input-group">
			
				<span class="glyphicon glyphicon-calendar input-group-addon glyphs"></span>
				<input class="form-control"type="date" placeholder="Hire-Date" name="hireDate"></input>
			</div>
			
			</br>
			
			<div class="horizontal">
			
			<div class="form-group">
		
				<button id="addButton" type="submit" class="btn btn-primary btn-lg" value="Log in">
					<span class="glyphicon glyphicon-ok-circle glyphSize"></span>&nbspAgregar
				</button>
		
			</div>
			
			<div class="form-group">
		
				<button id="deleteButton" class="btn btn-warning btn-lg" value="Log in">
					<span class="glyphicon glyphicon-remove-circle glyphSize"></span>&nbspEliminar
				</button>
		
			</div>
			
			<div class="form-group">
		
				<button id="recoverButton" class="btn btn-info btn-lg" value="Log in">
					<span class="glyphicon glyphicon-download-alt glyphSize"></span>&nbspObtener
				</button>
		
			</div>
			
			</br>
		
		</form>
		
	<script>
	
	 document.getElementById("recoverButton").onclick=function(){
		alert("recoverButton has been clicked");
		
		<?php>
		
		$query="SELECT	 * FROM employees WHERE first_name LIKE "%",&name,"%"";

$result=mysqli_query($con,&query);

echo "<table border=1">

while($row=mysqli_fetch_array ($result)){
	echo "<tr>";
	echo "<td>".$row['first_name']."</td>";
	echo "<td>",$row['last_name']."</td>";
}

echo"</table>"

?>
	 }
	
	$("#addButton").mouseenter(function(){
		$(this).animate({
			width:"170px",
			},200);
	});

	$("#addButton").mouseleave(function(){
		$(this).animate({
			width:"123px",
			},200);
	});
	
	$("#deleteButton").mouseenter(function(){
		$(this).animate({
			width:"170px",
			},200);
	});

	$("#deleteButton").mouseleave(function(){
		$(this).animate({
			width:"123px",
			},200);
	});
	
	$("#recoverButton").mouseenter(function(){
		$(this).animate({
			width:"170px",
			},200);
	});

	$("#recoverButton").mouseleave(function(){
		$(this).animate({
			width:"123px",
			},200);
	});
	
	</script>
		
	</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files
as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>