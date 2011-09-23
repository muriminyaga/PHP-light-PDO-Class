<?php
include 'config.php';
include 'class.lpdo.php';
$db = new lpdo($config['Database']);

$table = 'yourtable';
$condition = array('id' => 1, 'name' => 'yourname', array('id', 'name'));
//get one
$rs = $db->get_one($table, $condition);
print_r($rs);
//get more res
$rs = $db->get_rows($table, $condition);
print_r($rs);
?>