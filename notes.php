<?php 

require "Database.php";
require "function.php";

$config = require "config.php";
$db = new database($config);
$x=$db->query("select * from notes");



require "views/notes.view.php";
?>