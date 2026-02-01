<?php

$id = $_GET['id'];
$sql = "DELETE FROM roles WHERE id=$id";

$db = new PDO("mysql:dbhost=localhost;dbname=project", "root", "");
$db->query($sql);

header("location: index.php");
