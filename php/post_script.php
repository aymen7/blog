<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21/09/2017
 * Time: 12:01
 */
//include the functions script
include ('functions.php');
//declare the connection variables
$host="localhost";
$db="blog";
$username="root";
$password="";
//call the method to connect to database
$conn=connectDb($host,$db,$username,$password);
/*the selection of the posts from tha db*/
//$query is a sql query that select all the the rows
$query = $conn->prepare("SELECT * FROM posts");
//execute the query
$query->execute();
//$result is a table that contain all the rows
$result = $query;

