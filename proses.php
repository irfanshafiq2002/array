<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $nomatrik = $_POST['nomatrik'];

  $user_data = array(
    'name' => $name,
    'nomatrik' => $nomatrik
  );

  session_start();
  $_SESSION['user_data'] = $user_data;

  // Save the user data to a file or database

  header('Location: hasil.php');
  exit;
}
