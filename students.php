<!DOCTYPE html>
<html>

<?php require('sql_connection.php') ?>
<head>
	<meta charset="utf-8">
	<title>STUDENTS</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

	<?php include 'header.php'; ?>

    <main class="py-4">
        <div class="container">

        	<h2>register as a student</h2>
        	<hr>

        	<form method="POST" action="save_student.php">
        		<div class="row">
        			<div class="col-md-6">
        				<label>Name</label><br>
        				<input type="text" name="student_name" class="form-control" required><br>

        				<label>Email</label><br>
        				<input type="email" name="email_address" class="form-control" required><br>


        				<label>Phone Number</label><br>
        				<input type="text" name="phone_number"  class="form-control" required><br>

        				<label>Password</label><br>
        				<input type="password" name="user_password" class="form-control" required><br>



        				<!-- read courses -->

        				<?php 

        				$results = $mysqli_connection->query("SELECT ID, NAME FROM courses ORDER BY ID ASC");
        				 ?>

        				<label>Course</label><br>
        				<select class="form-control" name="course_id">

        					<?php 

        					foreach ($results as $key => $value) {

	                           $id = $value["ID"];
	                           $name = $value["NAME"];

	                           echo "<option value='$id'>$name</option>";

	                        }


        					 ?>
        					 
        				</select>

        				<br>

        				
        	
        				<hr>


        				<button type="submit" class="btn btn-success">Register</button>

        			</div>
        		</div>
        	</form>

        </div>
    </main>

</body>
</html>