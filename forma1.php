<?php 
require 'db.php';
$user = R::dispense("users");
$user->firstname = $_POST["firstname"];
$user->lastname = $_POST["lastname"];
$user->age = $_POST["age"];
$user->work = $_POST["work"];
$user->about = $_POST["about"];
R::store($user);
echo "сохранено";