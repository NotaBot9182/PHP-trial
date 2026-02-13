<?php 



require "Database.php";
require "function.php";

$config = require "config.php";
$db = new database($config);

$id=$_GET['id'];

$x = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id'] ?? 1]);


require "views/note.view.php";
?>
