<?php 
require 'db.php';
function sendForm($data){
   
    $user = R::dispense("users");
    $user->firstname = $data["firstname"];
    $user->lastname = $data["lastname"];
    $user->age = $data["age"];
    $user->work = $data["work"];
    $user->about = $data["about"];
    R::store($user);
    echo "ok";
   }
  
if($_POST["klick"]){
       $forma=sendForm($_POST);
       if($forma == "ok"){
        header('Location: index.php');
    }else{
        echo "error";
    }
}
