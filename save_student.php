<?php
require('sql_connection.php');
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phone_number'];
$password = md5($_POST['password']);

$course_id = $_POST['course_id'];

$mysqli_connection->query("INSERT INTO students(NAME,EMAIL,PHONE_NUMBER,PASSWORD,COURSE_ID)VALUES('$name','$email','$number','$password','$course_id')");

header("Location:list_of_users.php");