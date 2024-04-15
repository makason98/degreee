<?php
$host = '146.19.133.147'; // Remove https:// and any paths
$dbname = 'hlqkugtb_platform';
$username = 'hlqkugtb_admin';
$password = 'n^3q;uCy,5(o';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
