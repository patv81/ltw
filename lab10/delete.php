<?php 
require_once('access.php');
if (isset($_GET['id'])){
    $id=$_GET['id'];
    deleterow($id);
}
header("Location: index2.php");
?>
