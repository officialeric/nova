<?php
include 'header.php';
?>




        <!-- Start Author Area  -->
        <div class="axil-author-area axil-author-banner bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-author">
                            <div class="media">
                                <div class="thumbnail">
                                    <a href="author.html#">
                                        <img src="admin/process/uploads/<?=$author['profile_img']?>" alt="Author Images">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="author-info">
                                        <h1 class="title"><a href="author.html#"><?=$author['fullname']?></a></h1>
                                        <span class="b3 subtitle">
                                           <b><?=strtoupper($author['role_name']);?></b>
                                        </span>
                                    </div>
                                    <div class="content">
                                        <p class="b1 description"><?=$author['about']?></p>
                                        <ul class="social-share-transparent size-md">
                                            <li><a href="author.html#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="author.html#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="author.html#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="author.html#"><i class="far fa-envelope"></i></a></li>
                                            <li><a href="author.html#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Author Area  -->

        <!-- Start Post List Wrapper  -->
        <div class="axil-post-list-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h2 class="title mb--40">Articles By This Author</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-8">
                        <?php foreach($posts as $post) :?>
                        <!-- Start Post List  -->
                        <div class="content-block post-list-view mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>&post_id=<?=$post['id']?>">
                                    <img src="admin/process/uploads/<?=$post['banner']?>" alt="Post Images">
                                </a>
                                <!-- <a class="video-popup icon-color-secondary size-medium position-top-center" href="post-details.html"><span class="play-icon"></span></a> -->
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="<?=$CATEGORY_PAGE_URL?>&post_category=<?=$post['category']?>">
                                            <span class="hover-flip-item">
                                                <span data-text="<?=$post['category']?>"><?=$post['category']?></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="<?=$POSTS_URL?>&post_id=<?=$post['id']?>"><?=$post['title']?></a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="<?=$AUTHOR_URL?>">
                                                    <span class="hover-flip-item">
                                                        <span data-text="<?=$post['posted_by']?>"><?=$post['posted_by']?></span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li><?=$post['createdAt']?></li>
                                                <!-- <li>3 min read</li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="author.html#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="author.html#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="author.html#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="author.html#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->
                        <?php endforeach; ?>

                        

                    </div>
                    <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                        <!-- Start Sidebar Area  -->
                        <?php include('sidebar.php') ?>
                        <!-- End Sidebar Area  -->



                    </div>
                </div>
            </div>
        </div>
        <!-- End Post List Wrapper  -->
        <?php include 'footer.php' ?>