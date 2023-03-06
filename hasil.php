<?php
session_start();

$user_data = $_SESSION['user_data']; 

// Display the user data
echo 'Name: ' . $user_data['name'] . '<br>';
echo 'No Matrik: ' . $user_data['nomatrik'] . '<br>';

unset($_SESSION['user_data']);