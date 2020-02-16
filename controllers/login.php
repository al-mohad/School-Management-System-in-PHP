<?php 

require '../models/school.php';

view('login', 'user');

if (isset($_POST['login_btn'])) {
	# code...
	$regNO		= $_POST['regNO'];
	$password	= $_POST['password'];

	$row = validate_user_creds($regNO, $password, $conn);

	if($row) {
	        $_SESSION['regNO'] 	= $row['regNO'];
	        $_SESSION['role'] 	= $row['role'];
	        $_SESSION['id']  		= $row['id'];

	       	if ($_SESSION['role'] =='Admin') {
	       		# code...
	       		echo "<script> location.replace('../controllers/admin/'); </script>";
	       		//header('location:../controllers/admin/');

	       	} elseif ($_SESSION['role'] =='Teacher') {
	       		# code...
	       		echo "<script> location.replace('../controllers/teacher/'); </script>";
	       		//header('location:../controllers/teacher/');

	       	} elseif ($_SESSION['role'] =='Parent') {
	       		# code...
	       		echo "<script> location.replace('../controllers/parent/'); </script>";
	       		//header('location:../controllers/parent/');
	       		
	       	} elseif ($_SESSION['role'] =='Student') {
	       		# code...
	       		echo "<script> location.replace('../controllers/student/'); </script>";
	       		//header('location:../controllers/student/');
	       	}
	       } else{
	       	echo "<script>$('#modal-wrongLogin').modal()</script>";
	       }
}

 ?>