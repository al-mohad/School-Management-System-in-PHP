<?php 
global $newsfeed;
require '../../models/school.php';

$topics = get('topics', $conn, 8);

if (isset($_POST['viewSingleNewsFeed'])) {
	# code...
	$newsfeed = get_by_id((int)$_GET['id'], $conn);
}

view('admin/newsFeed', 'admin', array('topics' => $topics, 'newsfeed' => $newsfeed));