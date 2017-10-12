<?php
/**
 * Created by PhpStorm.
 * User: Aymen Bennour
 * Date: 12/10/2017
 * Time: 13:14
 * description: get the id of the clicked post and display the info related to that particular post
 **/
?>
<?php
//declare the function connectDb() to connect
function connectDb3($host,$db,$username,$password){
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
$conn3=connectDb3($host,$db,$username,$password);
//query that select all the post and order them according to their watch count
//the clicked post id
$id=$_GET['id'];
//prepare a query that select the row of the clicked id from posts
$query3=$conn3->prepare("select * from posts where id =".$id);
//execute the query
$query3->execute();
$result=$query3;
//fetch the result in row
$row=$result->fetch();
echo "<div id='post-wrapper' class='container'>";
echo "<img src=../../".$row['img_path']." class='post-cover-img' alt='cover image'>";
echo "<span class='tag-wrapper'><i>On  </i><strong> <a href='#'>".$row['tag']."</a></strong></span>";
echo "<span class='author-wrapper'><i>By  </i><strong> <a href='#'>".$row['author']."</a></strong></span>";
echo "<h1> ".$row['title']."</h1>";
echo "<p> ".$row['preview']."</p>";
$sectionQuery=$conn3->prepare("select * from post_body_section WHERE post_id =".$id);
$sectionQuery->execute();
// $sr1 stand for sub row1 which represent a row from the post_body_section table
//use counter i to display the section number
$i=1;
foreach ($sectionQuery as $sr1){
    echo "<div class='section-wrapper'>";
    echo "<h2>".$i ." .".$sr1['section_title']."</h2>";
    echo "<img src=../../".$sr1['section_img_path']." class='section-cover-img' alt='section cover image'>";
    echo "<p>".$sr1['section_body']."</p>";
    echo "</div>";//end of the section div
    $i=$i+1;
}
echo "</div>";//end of the post-wrapper



?>


