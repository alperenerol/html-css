<?php 
// Create Connection
$conn = mysqli_connect('localhost', 'root', '123456', 'ajaxtest');

$query = 'SELECT * FROM users'; // select all from users table.

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data and put in variable
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users); // put in JSON format.