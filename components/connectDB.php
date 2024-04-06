<?php
$dbname = "ciondatabase";
$dbhost = "localhost:3306";
$dbpass = "";
$dbuser = "root";
$conn = null;
function convertIntoArray($conn, $query)
{
    $result = $conn->query($query);
    if ($result->num_rows == 0) {
        echo "No Data Found";
    }
    $rows = [];
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

try {
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
} catch (Exception $e) {
    echo "Oops! Something went wrong";
}
