<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09/10/2017
 * Time: 22:00
 */
?>
<div id="recent-posts-div" class="container shadow">
    <h4 class="aside-element-title">Recent Posts</h4>
    <?php
    //include the post_script
    include 'recent-posts-script.php';
    foreach ($all_the_post_by_date as $row){
        echo '<div class="recent-post"> ';
        echo '<img src="'.$row['img_path'].'" alt="popular post image">';
        echo '<h5><a href="#">'.$row['title'].'</a></h5>';
        echo '<br>';
        echo '<div class="date-div">
             <span><i>on </i></span><h3>'.$row['date'].'</h3>
             </div>';//end of date-div
        echo '</div>';//end of the popular-post div


    }//end of foreach

    ?>



</div><!-- end of popular-post-div -->
