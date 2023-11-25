<?php
// Database connection settings
// (This should be secure and possibly outside of the web root)
$host = "localhost"; // The MySQL database host name.
$user = "ugkpqzaxjhsvg"; // Your MySQL database username.
$pass = "ncrlmg5usbvr"; // Your MySQL database password.
$dbname = "dbrc3uwg4pyghm"; // Your MySQL database name.

header('Content-Type: application/json');

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->query("SELECT * FROM user");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($users);
}
catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(array("error" => $e->getMessage()));
}
?>