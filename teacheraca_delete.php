<?php
if (!isset($_SESSION['a']) && !isset($_SESSION['b']) && !isset($_SESSION['admins'])) {
	header('Location: index.php');
	exit;
  }
?>
<div align="right">
<?php
	if(isset($_SESSION['a'])){
	echo "<p> <h3>Your login with ".$_SESSION['a']."<h3> </p>";
		}
?>
     
     <p><a href='sesdestroy.php'>logout</a></p>
     </div>
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"scientificcommunity");
$id=$_POST['id'];
$delete = "DELETE FROM teacher WHERE TeacherID="."'".$id."'";
$result = mysqli_query($conn,$delete) or die(mysqli_error());
?>