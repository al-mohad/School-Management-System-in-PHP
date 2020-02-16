<?php 
/*
* Do not modify this file!!!
*/ 
session_start();
// DB
function connect() {
	try {
		$conn = new PDO('mysql:host=localhost;dbname=sms', 'root', '');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
	} catch (Exception $e) {
		return false;
	}
}
// DB END

function validate_user_creds($regNO, $password, $conn){
		$stmt = $conn->prepare("SELECT * FROM login WHERE regNO=? AND password=?");

	      // execute
	      $stmt->execute(array($regNO, $password));
	      // check match
	      $result = $stmt->rowCount();
	      // store rowcount
	      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
	      //
	      if ($result == 1) {
	      	return $row;
	      }
	      
	      return false;
}

function query($query, $bindings, $conn){
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);
	return $stmt;
}

function get($table_name, $conn, $limit = 7){
	try {
		$results = $conn->query("SELECT * FROM $table_name ORDER BY id DESC LIMIT $limit");
		return ($results->rowCount() > 0)
		? $results : false;
	} catch (Exception $e) {
		return false;
	}
}

function get_by_id($id,$conn){
	$query = query('SELECT * FROM posts WHERE id=:id LIMIT 1', array('id' => $id), $conn);
	return $query->fetchAll();
}
