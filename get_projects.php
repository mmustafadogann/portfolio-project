<?php

include "db.php";

$stmt = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

header("Content-Type: application/json");
echo json_encode($projects);

?>