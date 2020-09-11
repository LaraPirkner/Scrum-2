<?php
//upload your code to the database
require 'connect.php';
echo "<title>BitBin</title>";
$code = $_POST['code'];

$sql = "INSERT INTO code SET code = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam("", $code);
$stmt->execute([$code]);

$lastid = $pdo->lastInsertId();

echo "<a href='code_page.php?id=$lastid'>View you code</a>";
echo "<link rel='stylesheet' href='style.css'>";
