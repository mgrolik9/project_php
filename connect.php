<?php

$user = '';
$pass = '';
$db = 'movies';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
?>