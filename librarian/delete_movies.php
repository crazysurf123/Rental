<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("update movie set status = 'Archive' where movie_id='$id'")or die(mysql_error());
header('location:movies.php');
?>