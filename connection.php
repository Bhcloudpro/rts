<?php
$conn=mysqli_connect("suni-researchproj-server.mysql.database.azure.com","rvywyrgoee","042C622L445P3118$");
$db=mysqli_select_db($conn,"suni-researchproj-database");
if($conn)
{
echo"";
}

else{
	
	echo "Connection Problem!! Check your connection!!";
}
?>
