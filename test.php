<?php
header('location: /');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("127.0.0.1", "root", "1", "cookies");
$sql = "INSERT INTO requests (item, name, phone) VALUES  (?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sss", $_REQUEST["cookie"], $_REQUEST["client"], $_REQUEST["numberPhone"]);
$stmt->execute();