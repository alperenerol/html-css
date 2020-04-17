<?php

// Connect to a database
$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');

echo 'Processing...';

// Check for POST variable (isset($_POST['name']))
if(isset($_POST['name'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']); // to create a legal SQL string, $name = inputName 
  //echo 'POST: Your name is '. $_POST['name'];

  $query = "INSERT INTO users(name) VALUES('$name')";
  // users is table in ajaxtest database, insert input name to name area

  if(mysqli_query($conn, $query)){
    echo 'User Added...';
  } else {
    echo 'ERROR: '. mysqli_error($conn);
  }
}

// Check for GET variable(isset($_GET['name'])) | We sent a GET request with HTML using the URL 'process.php?name=Brad')
if(isset($_GET['name'])){
  echo 'GET: Your name is '. $_GET['name']; // echo means print, this is our request response
}