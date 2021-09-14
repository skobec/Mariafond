<?php
session_start();

include('db-connect.php');

$id = $_GET['id'];
$avatar = $_FILES['avatar']['name'];
$img_path  =  $_FILES['avatar']['tmp_name'];

function name_for_avatar($file_name){
    if (!empty($file_name)){
        $name = '../img/avatars/' . uniqid('avatar-') . '.jpg';
    }
    return $name;
};

$name = name_for_avatar($avatar);

    $db = new queryBuilder($pdo);
    move_uploaded_file($img_path, $name);
    $data = [
        avatar => ltrim($name, '..\/')
    ];
    //var_dump(ltrim($name, '..\/'));
    //die;
    $db->update('kids', $data, $id);
    $_SESSION['alert'] = 'Фото загружено';

header("Location:" . $_SERVER['HTTP_REFERER']);


