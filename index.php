<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:eugentest.database.windows.net,1433; Database = "eugentest", "eugenong", "@Eugencong564823");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "eugenong", "pwd" => "@Eugencong564823", "Database" => "eugentest", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:eugentest.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
