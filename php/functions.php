<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21/09/2017
 * Time: 12:02
 */
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

//validate the data
function validate_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}