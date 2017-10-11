
<div id="popular-posts-div" class="container shadow">
    <h4 class="aside-element-title">Most Popular Posts</h4>
    <?php
    //include the post_script
    include 'popular_posts_script.php';
    foreach ($all_the_post_by_popularity as $row){
        echo '<div class="popular-post"> ';
        echo '<img src="'.$row['img_path'].'" alt="popular post image">';
        echo '<h5><a href="#">'.$row['title'].'</a></h5>';
        echo '<br>';
        echo '<div class="watch-count-wrapper">';
        echo '<span><i> watched </i></span>';
        echo '<i class="fa fa-eye" aria-hidden="true"></i> ';
        echo ' <span>'.$row['watch_count'].'</span>';
        echo '</div>';//end of the wrapper
        echo '</div>';//end of the popular-post div


    }//end of foreach

    ?>



</div><!-- end of popular-post-div -->


