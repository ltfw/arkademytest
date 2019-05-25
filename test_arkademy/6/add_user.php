<?php

include_once("koneksi.php");
$name = $_POST['progname'];

mysqli_query($conn, "INSERT INTO users(name) VALUES('$name')");

header('Location: http://localhost/test2/6');