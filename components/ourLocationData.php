<?php
include './connectDB.php';
$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$stmt = $pdo->query("SELECT locations.id, branch AS center_name, address, cities.city AS city_name, map_url FROM locations JOIN cities ON locations.city = cities.city_id WHERE locations.city = 1 ;");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json_data = json_encode($rows);
header('Content-Type: application/json');
echo $json_data;
