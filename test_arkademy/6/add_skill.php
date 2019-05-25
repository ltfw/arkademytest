<?php

include_once("koneksi.php");
$name = $_POST['skillname'];
$id = $_POST['user_id'];

mysqli_query($conn, "INSERT INTO skills(name,user_id) VALUES('$name','$id')");

header('Location: http://localhost/test_arkademy/6');
