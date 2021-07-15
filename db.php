<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once 'libs/rb-mysql.php';
R::setup('mysql:host=localhost;dbname=ucucom','root','root');
if(!R::testConnection()){
    exit('NOT CONNECTION WITH BASE');
}
$i="PEREMENNAY";
session_start();