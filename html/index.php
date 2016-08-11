<?php

echo("Hello, World!");

$mysqli = new mysqli("db", "wordpress", "wordpress", "wordpress");

$result = $mysqli->query('show databases;');

echo($result->num_rows);

