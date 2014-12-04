<html>
	<head>
		<title>Consulta</title>
	</head>
	<body>
		<h1>Agregando</h1>
		<?php 
			if(&_GET["submit"]){
			if($_GET["firstName"]){
				echo "Your name is ".$_GET['firstName'];
				}else{
				 echo "nada";
				}
				
		}		
		?>
	</body>
</html>