<?php

$conn = new mysqli("localhost", "levyn", "1234", "harmony");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Query, Types, Params
function executeQuery($sql, $types, $params)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result;
}
