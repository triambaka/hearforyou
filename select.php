<?php 

$name= $_POST['name'];
header('Location: profile.php?name=' . $name .'');

?>