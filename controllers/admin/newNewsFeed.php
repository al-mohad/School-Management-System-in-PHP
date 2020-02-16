<?php 

require '../../models/school.php';
include_once '../../views/inc/modals.php';

if (isset($_POST['publish_feed'])) {
	# code...
	$title 		= $_POST['title'];
	$body		= $_POST['body'];
	$author		= $_SESSION['regNO'];
	$date		= date('d-m-Y');
	
	query("INSERT INTO topics (title, body, author, date) 
	VALUES (:title, :body, :author, :date)", 
	array('title'=>$title, 'body'=>$body, 'author' =>$author, 'date'=>$date), 
	$conn);
	echo "<script>$('#modal-newsFeedFieldsRequired').modal()</script>";
	
	}

view('admin/newNewsFeed', 'admin');
