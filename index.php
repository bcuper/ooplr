<?php
require_once 'core/init.php';

$user = DB::getInstance()->query("select * from user");

if($user->error()) {
    echo 'No user';
} else {
    echo 'ok';
}