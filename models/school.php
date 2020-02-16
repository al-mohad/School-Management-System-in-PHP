<?php 

require 'config.php';
require 'db.php';
require 'functions.php';

$conn = connect();

if (!$conn) die (header('location:../../sms/controllers/500.php'));