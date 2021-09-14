<?php
session_start();
include('db-connect.php');

$id = $_GET['id'];
$data = $_POST;

var_dump($data);


if(!empty($_POST)){
    $db = new queryBuilder($pdo);
    $db->update('kids', $data, $id);
    $_SESSION['alert'] = 'Статус обновлен';
}

header("Location:index.php");


