<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09/10/2017
 * Time: 14:36
 */
//declare the function connectDb() to connect
function connectDb1($host,$db,$username,$password){
    try{
        $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch(PDOException $e){
        echo "failed to execute the query  ".$e->getMessage();
    }
}
//declare the connection variables
$host="localhost";
$db="blog";
$username="root";
$password="";
//call the method to connect to database
$conn1=connectDb1($host,$db,$username,$password);
//query that select all the post and order them according to their watch count
$query2=$conn1->prepare("select * from posts ORDER by watch_count DESC ");
$query2->execute();
$all_the_post_by_popularity=$query2;