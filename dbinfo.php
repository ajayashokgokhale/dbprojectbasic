<?php
global $db ;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$db_name = 'demodb_1';
$db_user = 'root';
$db_pass = '';
$db_host = 'localhost';


$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);