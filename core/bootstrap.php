<?php 
$config = require 'views/config.php';
require 'core/database/connection.php';
require 'core/class.php';
require 'core/router.php';

$pdo = connect::getConnection($config['database']);	
$output = query($pdo);
