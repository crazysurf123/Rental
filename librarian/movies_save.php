<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$movie_title=$_POST['movie_title'];
$category_id=$_POST['category_id'];
$author=$_POST['author'];
$movie_copies=$_POST['movie_copies'];
$movie_pub=$_POST['movie_pub'];
$publisher_name=$_POST['publisher_name'];
$IMDB_Rating=$_POST['IMDB_Rating'];
$copyright_year=$_POST['copyright_year'];
/* $date_receive=$_POST['date_receive']; */
/* $date_added=$_POST['date_added']; */
$status=$_POST['status'];




								
mysql_query("insert into movie (movie_title,category_id,author,movie_copies,movie_pub,publisher_name,IMDB_Rating,copyright_year,date_added,status)
 values('$movie_title','$category_id','$author','$movie_copies','$movie_pub','$publisher_name','$IMDB_Rating','$copyright_year',NOW(),'$status')")or die(mysql_error());
 
 
header('location:movies.php');
}
?>	