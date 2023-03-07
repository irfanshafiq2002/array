<?php
// Retrieve data from form
$name = $_POST['name'];
$nomatrik = $_POST['nomatrik'];

// Create an array of data
$data = array(
	'name' => $name,
	'nomatrik' => $nomatrik
);

// Pass data to display.php
header('Location: hasil.php?name='.$name.'&nomatrik='.$nomatrik);
exit();
?>