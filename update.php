<?php
$data = json_decode(file_get_contents('data.json'), true);
$index = $_POST['index'];
$data[$index] = [
    'name' => $_POST['name'],
    'email' => $_POST['email']
];
file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
header('Location: index.php');
