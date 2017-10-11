<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21/09/2017
 * Time: 12:01
 */
//declare the function connectDb() to connect
function connectDb($host,$db,$username,$password){
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
$conn=connectDb($host,$db,$username,$password);

/*the selection of the posts from tha db*/
//$query is a sql query that select all the the rows
$query = $conn->prepare("SELECT * FROM posts ORDER by id DESC ");
//execute the query
$query->execute();
//$result is a table that contain all the rows
$result = $query;


