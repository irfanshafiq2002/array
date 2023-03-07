<?php
// Retrieve data from URL
$name = $_GET['name'];
$nomatrik = $_GET['nomatrik'];

// Display data as a table
echo "<table>";
echo "<tr><td>Name:</td><td>" . $name . "</td></tr>";
echo "<tr><td>No Matrik:</td><td>" . $nomatrik . "</td></tr>";
echo "</table>";
?>
