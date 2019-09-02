<?php
 $dBServername = "localhost:8100";
 $dBUsername = "root";
 $dBPassword = "123456";
 $dBName = "loginsystem";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if (!conn)
	die("Coonection failed :".mysqli_connect_error());