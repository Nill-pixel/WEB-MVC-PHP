<?php

header('Content-Type: application/json');

$pdo = new PDO('mysql:dbname=test;host:localhost', 'root', '');

$stm = $pdo->prepare("INSERT INTO test (id, name) VALUES (uuid(), ?)");
$stm->execute([$_POST['name']]);

echo json_encode(["msg" => "Created"]);