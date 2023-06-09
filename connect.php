	<?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="portifolio";
	
		$conn= mysqli_connect($servername, $username, $password,$dbname);
		
		if(!$conn){
			die("error here".mysqli_connect_error());
			}
		echo"success";

	
	
	?>