<?php
include 'header.php';

?>



        <!-- Start Post Single Wrapper  -->
        <div class="post-single-wrapper axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- Start Banner Area -->
                        <div class="banner banner-single-post post-formate post-layout pb--40">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Start Single Slide  -->
                                        <div class="content-block">
                                            <!-- Start Post Content  -->
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="<?=$CATEGORY_PAGE_URL?>&post_category=<?=$post['category']?>">
                                                            <span class="hover-flip-item">
                                                                <span data-text="<?=$post['category'];?>">
                                                                    <?=$post['category'];?>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h1 class="title"><?=$post['title'];?></h1>
                                                <!-- Post Meta  -->
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="post-author-avatar border-rounded" style="width: 1%;">
                                                            <img src="admin/process/uploads/<?=$author['profile_img']?>" alt="Author Images">
                                                        </div>
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
                                                                <!-- <li>300k Views</li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="post-layout-1.php#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="post-layout-1.php#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="post-layout-1.php#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="post-layout-1.php#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Post Content  -->
                                        </div>
                                        <!-- End Single Slide  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Banner Area -->

                        <!-- Start Blog Details  -->
                            <?php
                                echo $post['description'];   
                            ?>
                        <!-- end blog details -->

                            <!-- Start Author  -->
                            <div class="about-author">
                                <div class="media">
                                    <div class="thumbnail" style="width: 10%;">
                                        <a href="<?=$AUTHOR_URL?>&author_id=<?=$author['id']?>">
                                            <img src="admin/process/uploads/<?=$author['profile_img']?>" alt="Author Images">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="author-info">
                                            <h5 class="title">
                                                <a class="hover-flip-item-wrapper" href="<?=$AUTHOR_URL?>&author_id=<?=$author['id']?>">
                                                    <span class="hover-flip-item">
                                                        <span data-text="<?=$author['fullname']?>"><?=$author['fullname']?></span>
                                                    </span>
                                                </a>
                                            </h5>
                                            <span class="b3 subtitle">Sr. UX Designer</span>
                                        </div>
                                        <div class="content">
                                            <p class="b1 description"><?=$author['about']?></p>
                                            <ul class="social-share-transparent size-md">
                                                <li><a href="post-layout-1.php#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="post-layout-1.php#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="post-layout-1.php#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="post-layout-1.php#"><i class="far fa-envelope"></i></a></li>
                                                <li><a href="post-layout-1.php#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Author  -->

                            <!-- Start Comment Form Area  -->
                            <div class="axil-comment-area">
                                <div class="axil-total-comment-post">
                                    <?php if(isset($_GET['user_id'])) : ?>
                                   <div class="add-comment-button cerchio">
                                        <a class="axil-button button-rounded" href="process/includes/control.php?user_id=<?=$_SESSION['id']?>&post_id=<?=$_GET['post_id']?>" tabindex="0"><span>Like</span></a>
                                    </div>
                                    <?php endif ?>
                                   <div class="title">
                                        <h4 class="mb--0"><?=$total_likes.' '.($total_likes == 1 ? 'Like' : 'Likes')?></h4>
                                    </div>
                                    <div class="title">
                                        <h4 class="mb--0"><?=$total_comments.'+ Comments'?></h4>
                                    </div>
                                    <?php if(isset($_GET['user_id'])) : ?>

                                    <div class="add-comment-button cerchio">
                                        <a class="axil-button button-rounded" href="#comment-field" tabindex="0"><span>Add Your Comment</span></a>
                                    </div>
                                    <?php endif ?>
                                </div>
 
                                <!-- Start Comment Respond  -->
                                <?php if(isset($_GET['user_id'])) : ?>

                                <div class="comment-respond" id='comment-field'>
                                    <h4 class="title">Post a comment</h4>
                                    <form action="process/includes/comment.php" method='post'>
                                        <input type="hidden" name="post_id" value='<?=$_GET['post_id']?>'>
                                        <input type="hidden" name="user_id" value='<?=$_GET['user_id']?>'>
                                        <p class="comment-notes"><span id="email-notes">Your email address will not be
                                                published.</span> Required fields are marked <span
                                                class="required">*</span></p>
                                        <div class="row row--10">
                                            
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="message">Leave a Comment</label>
                                                    <textarea id="message" name="message" required></textarea>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-12">
                                                <p class="comment-form-cookies-consent">
                                                    <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                                    <label for="wp-comment-cookies-consent">Save my name, email, and
                                                        website in this browser for the next time I comment.</label>
                                                </p>
                                            </div> -->
                                            <div class="col-lg-12">
                                                <div class="form-submit cerchio">
                                                    <input name="comment" type="submit" id="submit" class="axil-button button-rounded" value="Post Comment">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php endif ?>
                                <!-- End Comment Respond  -->

                                <!-- Start Comment Area  -->
                                <div class="axil-comment-area">
                                    <h4 class="title"><?=$total_comments.' '.($total_comments == 1 ? 'Comment' : 'Comments')?></h4>
                                    <ul class="comment-list">
                                        <!-- Start Single Comment  -->
                                        <?php foreach($comments as $comment) : 

                                        $pauthor = $comment['commented_by']; 
                                        $sql = "SELECT * FROM users WHERE id=$pauthor";
                                        $result = mysqli_query($conn,$sql);

                                        if(mysqli_num_rows($result) == 1){
                                        $commenter = mysqli_fetch_assoc($result);
                                        }  
                                        ?>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="single-comment">
                                                    <div class="comment-img">
                                                        <img src="process/auth/uploads/<?=$commenter['profile_img']?>" alt="Author Images">
                                                    </div>
                                                    <div class="comment-inner">
                                                        <h6 class="commenter">
                                                            <a class="hover-flip-item-wrapper" href="#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="<?=$commenter['username']?>"><?=$commenter['fullname']?></span>
                                                                </span>
                                                            </a>
                                                        </h6>
                                                        <div class="comment-meta">
                                                            <div class="time-spent"><?=$comment['commentedAt']?></div>
                                                            <div class="reply-edit">
                                                                <div class="reply">
                                                                    <a class="comment-reply-link hover-flip-item-wrapper" href="#comment-field">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Reply">Reply</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p class="b2"><?=$comment['content']?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="children">

                                                <!-- Start Single Comment  -->
                                                <!-- <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="single-comment">
                                                            <div class="comment-img">
                                                                <img src="assets/images/post-images/author/author-b3.png" alt="Author Images">
                                                            </div>
                                                            <div class="comment-inner">
                                                                <h6 class="commenter">
                                                                    <a class="hover-flip-item-wrapper" href="post-layout-1.php#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Rahabi Khan">Rahabi
                                                                                Khan</span>
                                                                        </span>
                                                                    </a>
                                                                </h6>
                                                                <div class="comment-meta">
                                                                    <div class="time-spent">Nov 23, 2018 at 12:23 pm
                                                                    </div>
                                                                    <div class="reply-edit">
                                                                        <div class="reply">
                                                                            <a class="comment-reply-link hover-flip-item-wrapper" href="post-layout-1.php#">
                                                                                <span class="hover-flip-item">
                                                                                    <span data-text="Reply">Reply</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <p class="b2">Pellentesque habitant morbi tristique
                                                                        senectus et netus et malesuada fames ac turpis
                                                                        egestas. Suspendisse lobortis cursus lacinia.
                                                                        Vestibulum vitae leo id diam pellentesque
                                                                        ornare.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li> -->
                                                <!-- End Single Comment  -->
                                            </ul>
                                        </li>
                                        <?php endforeach ?>
                                        <!-- End Single Comment  -->

                                        
                                    </ul>
                                </div>
                                <!-- End Comment Area  -->

                            </div>
                            <!-- End Comment Form Area  -->


                        </div>
                        <!-- End Blog Details  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Post Single Wrapper  -->

        <!-- Start More Stories Area  -->
        <div class="axil-more-stories-area axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">More Stories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Start Stories Post  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <!-- Start Post List  -->
                        <div class="post-stories content-block mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>">
                                    <img src="assets/images/post-single/stories-01.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a href="post-layout-1.php#">LEADERSHIP</a>
                                    </div>
                                </div>
                                <h5 class="title"><a href="<?=$POSTS_URL?>">Microsoft and Bridgestone launch real-time
                                        tire</a></h5>
                            </div>
                        </div>
                        <!-- End Post List  -->
                    </div>
                    <!-- Start Stories Post  -->

                    <!-- Start Stories Post  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <!-- Start Post List  -->
                        <div class="post-stories content-block mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>">
                                    <img src="assets/images/post-single/stories-02.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a href="post-layout-1.php#">DESIGN</a>
                                    </div>
                                </div>
                                <h5 class="title"><a href="<?=$POSTS_URL?>">Microsoft and Bridgestone launch real-time
                                        tire</a></h5>
                            </div>
                        </div>
                        <!-- End Post List  -->
                    </div>
                    <!-- Start Stories Post  -->

                    <!-- Start Stories Post  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <!-- Start Post List  -->
                        <div class="post-stories content-block mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>">
                                    <img src="assets/images/post-single/stories-03.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a href="post-layout-1.php#">PRODUCT UPDATES</a>
                                    </div>
                                </div>
                                <h5 class="title"><a href="<?=$POSTS_URL?>">Microsoft and Bridgestone launch real-time
                                        tire</a></h5>
                            </div>
                        </div>
                        <!-- End Post List  -->
                    </div>
                    <!-- Start Stories Post  -->

                    <!-- Start Stories Post  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <!-- Start Post List  -->
                        <div class="post-stories content-block mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>">
                                    <img src="assets/images/post-single/stories-04.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a href="post-layout-1.php#">COLLABORATION</a>
                                    </div>
                                </div>
                                <h5 class="title"><a href="<?=$POSTS_URL?>">Microsoft and Bridgestone launch real-time
                                        tire</a></h5>
                            </div>
                        </div>
                        <!-- End Post List  -->
                    </div>
                    <!-- Start Stories Post  -->
                </div>
            </div>
        </div>
        <!-- End More Stories Area  -->

        <?php include 'footer.php' ?>