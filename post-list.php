<?php      
   include 'header.php';

?>




        <h1 class="d-none">Home Tech Blog</h1>
        <!-- Start Post List Wrapper  -->
        <div class="axil-post-list-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                      <!-- Start Post List  -->
                    <?php 
                    foreach($All_posts as $post):  
                        $post_author = $post['posted_by'];

                        $authors = mysqli_query($conn,"SELECT * FROM users WHERE fullname='$post_author'");
                        if(mysqli_num_rows($authors) === 1){
                            $author = mysqli_fetch_assoc($authors);
                        }

                    ?>
                        <div class="content-block post-list-view mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>&post_id=<?=$post['id']?>">
                                    <img src="admin/process/uploads/<?=$post['banner']?>" alt="Post Images">
                                </a>
                                <!-- <a class="video-popup size-medium position-top-center icon-color-secondary" href="<?=$POSTS_URL?>&post_id=<?=$post['id']?>"><span class="play-icon"></span></a> -->
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="<?=$CATEGORY_PAGE_URL?>&post_category=<?=$post['category']?>">
                                            <span class="hover-flip-item">
                                                <span data-text="<?=$post['category'];?>"><?=$post['category'];?></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="<?=$POSTS_URL?>&post_id=<?=$post['id']?>"><?=$post['title'];?></a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="<?=$AUTHOR_URL?>&author_id=<?=$author['id']?>">
                                                    <span class="hover-flip-item">
                                                        <span data-text="<?=$post['posted_by'];?>"><?=$post['posted_by'];?></span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li><?=$post['createdAt'];?></li>
                                                <!-- <li>3 min read</li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="post-list.php#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="post-list.php#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="post-list.php#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="post-list.php#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                        <!-- End Post List  -->

                    </div>
                    <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                    <?php include 'sidebar.php' ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Post List Wrapper  -->

        <?php include 'footer.php' ?>