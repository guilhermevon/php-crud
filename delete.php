<?php
$data = json_decode(file_get_contents('data.json'), true);
$index = $_GET['index'];
unset($data[$index]);
$data = array_values($data); // reindexa
file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
header('Location: index.php');
