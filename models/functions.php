<?php 

// Incharge of displaying view to user; it has nothing logical connected to it.
function view($path, $identifier='user', $data = null){
	if ($data) {
		extract($data);
	}
	
	if ($identifier=='user') {
		$path = $path. '.view.php';
		//include "views/{$path}.view.php";
		include __DIR__. "/../views/layout.php";
	} else {
		$path = $path. '.view.php';
		//include "views/{$path}.view.php";
		include __DIR__. "../../views/template.php";
	}
	

}

function redirect_to($path) {
	header("Location: " . $path);
	exit();
}

function logout(){
	
}