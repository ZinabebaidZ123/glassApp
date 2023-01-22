<?php
require_once("autoload.php");


$glass = new DB('items');
$glass->connect();
$id= 17;
if(isset($_GET['id'])){
    $id= $_GET['id'];
}
$data = $glass->get_record_by_id($id,"id");
require_once("views/details.php");
// $db->disconnect()
?>
?>