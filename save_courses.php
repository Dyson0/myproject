<?php

require('sql_connection.php');
$cName = $_POST['course_name'];
$mysqli_connection->query("INSERT INTO courses(NAME)VALUES('$cName')");

header("Location:courses.php");