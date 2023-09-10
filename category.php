<?php
include 'header.php';

?>



        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area breadcrumb-style-1 bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner">
                            <h1 class="page-title"><?=$category['category_name']?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start Post List Wrapper  -->
        <div class="axil-post-list-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                        <?php foreach($cposts as $post) :?>
                        <!-- Start Post List  -->
                        <div class="content-block post-list-view mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>">
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
                                                <a class="hover-flip-item-wrapper" href="<?=$AUTHOR_URL?>&author_id=47">
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
                                        <li><a href="archive.html#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="archive.html#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="archive.html#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="archive.html#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->
                        <?php endforeach; ?>

                        

                    </div>
                    <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                        <?php include 'sidebar.php'?>



                    </div>
                </div>
            </div>
        </div>
        <!-- End Post List Wrapper  -->
        <?php include 'footer.php' ?>