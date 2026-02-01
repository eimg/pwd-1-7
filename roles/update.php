<?php

$id = $_POST['id'];
$name = $_POST['name'];
$value = $_POST['value'];

$sql = "UPDATE roles SET name='$name', value=$value WHERE id = $id";

$db = new PDO("mysql:dbhost=localhost;dbname=project", "root", "");

$db->query($sql);

header("location: index.php");
