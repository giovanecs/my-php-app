<?php

echo "<h1>Hello World with PHP ". phpversion() ." !!!</h1>";
echo "<h2>**running in container with docker compose</h2>";

$mysqli = new mysqli("mysql", "root", "123", "my_app");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}else{
    printf("MySQL connect sucess, server version: %d\n", $mysqli->server_version);
}

/* close connection */
$mysqli->close();