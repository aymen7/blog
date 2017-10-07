<section class="container">
    <div id="main-column" class="col-lg-8">
        <?php require ("post_script.php");
        foreach ($result as $row)
        {
            echo '<div class="post">
                <img src="'.$row['img_path'].'" alt="post image">
                <div class="title_body-wrapper">
                <h2 class="post-title">'.$row['title'].'</h2>
                <p class="post-body-teaser">'.$row['preview'].'</p>
                </div><!-- title_body-wrapper -->';
            echo '<div class="date_tag-wrapper">
                <div class="date-div">
                    <span><i>on </i></span><h3>'.$row['date'].'</h3>
                </div>
                <div class="tag-div">
                    <span><i>in </i></span><h3><a href="#">'.$row['tag'].'</a></h3>
                </div>
            </div><!-- date_tag-wrapper -->';

            echo '<div class="author-div">
                <span><i>by </i></span><h3><a href="#">'.$row['author'].'</a></h3>
            </div>';
            echo '<a href="#" class="btn btn-default">Continue Reading</a>';
            echo ' </div><!-- post----->';
            
        }
        //include aside
        require 'aside.php';
        //include pagination
        require 'pagination.php';

        ?>

</section>