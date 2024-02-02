<?php
if (!isset($_SESSION['a']) && !isset($_SESSION['b']) && !isset($_SESSION['admins'])) {
    header('Location: index.php');
    exit;
  }
include("connection.php");
$id=$_POST['id'];
$delete = "DELETE FROM conference WHERE ConferenceID=$id";
$result = mysqli_query($conn,$delete) or die(mysqli_error());
?>