<?php
require('sql_connection.php');

$results = $mysqli_connection->query("SELECT ID, NAME FROM courses ORDER BY ID ASC");

foreach ($results as $key => $value) {

	$cId = $value["ID"];
	$cName = $value["NAME"];

	echo "

	<tr> 

	   <td> $cId </td>


	   <td> $cName </td>
	   <td> <a href='delete_user.php?districts_id=".$value['ID']."'>Delete </a> <a> Update </a> </td>
		

	</tr>
	";
	 
}