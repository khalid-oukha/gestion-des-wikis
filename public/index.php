<?php
define('URL_DIR', 'http://localhost/wikis/');
require "../vendor/autoload.php";
require "../router/Router.php";


$db = Connection::getdatabaseObj();
$pdo=$db->GetConnection();
var_dump($pdo);die;