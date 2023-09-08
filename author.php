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
                                <a href="post-details.html">
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
                                <h4 class="title"><a href="<?=$POSTS_URL?>"><?=$post['title']?></a></h4>
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
                        <div class="sidebar-inner">

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_categories mb--30">
                                <ul>
                                    <li class="cat-item">
                                        <a href="author.html#" class="inner">
                                            <div class="thumbnail">
                                                <img src="assets/images/post-images/category-image-01.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Tech</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="author.html#" class="inner">
                                            <div class="thumbnail">
                                                <img src="assets/images/post-images/category-image-02.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Style</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="author.html#" class="inner">
                                            <div class="thumbnail">
                                                <img src="assets/images/post-images/category-image-03.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Travel</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="author.html#" class="inner">
                                            <div class="thumbnail">
                                                <img src="assets/images/post-images/category-image-04.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Food</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_search mb--30">
                                <h5 class="widget-title">Search</h5>
                                <form action="author.html#">
                                    <div class="axil-search form-group">
                                        <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </form>
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_postlist mb--30">
                                <h5 class="widget-title">Popular on Blogar</h5>
                                <!-- Start Post List  -->
                                <div class="post-medium-block">

                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium mb--20">
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="assets/images/small-images/blog-sm-01.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="post-details.html">The underrated design book that transformed the way I
                                                    work </a></h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>Feb 17, 2019</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium mb--20">
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="assets/images/small-images/blog-sm-02.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="post-details.html">Here’s what you should (and shouldn’t) do when</a>
                                            </h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>Feb 17, 2019</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium mb--20">
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="assets/images/small-images/blog-sm-03.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="post-details.html">How a developer and designer duo at Deutsche Bank keep
                                                    remote</a></h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>Feb 17, 2019</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                </div>
                                <!-- End Post List  -->

                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_social mb--30">
                                <h5 class="widget-title">Stay In Touch</h5>
                                <!-- Start Post List  -->
                                <ul class="social-icon md-size justify-content-center">
                                    <li><a href="author.html#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="author.html#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="author.html#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="author.html#"><i class="fab fa-slack"></i></a></li>
                                    <li><a href="author.html#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                                <!-- End Post List  -->
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_instagram mb--30">
                                <h5 class="widget-title">Instagram</h5>
                                <!-- Start Post List  -->
                                <ul class="instagram-post-list-wrapper">
                                    <li class="instagram-post-list">
                                        <a href="author.html#">
                                            <img src="assets/images/small-images/instagram-01.jpg" alt="Instagram Images">
                                        </a>
                                    </li>
                                    <li class="instagram-post-list">
                                        <a href="author.html#">
                                            <img src="assets/images/small-images/instagram-02.jpg" alt="Instagram Images">
                                        </a>
                                    </li>
                                    <li class="instagram-post-list">
                                        <a href="author.html#">
                                            <img src="assets/images/small-images/instagram-03.jpg" alt="Instagram Images">
                                        </a>
                                    </li>
                                    <li class="instagram-post-list">
                                        <a href="author.html#">
                                            <img src="assets/images/small-images/instagram-04.jpg" alt="Instagram Images">
                                        </a>
                                    </li>
                                    <li class="instagram-post-list">
                                        <a href="author.html#">
                                            <img src="assets/images/small-images/instagram-05.jpg" alt="Instagram Images">
                                        </a>
                                    </li>
                                    <li class="instagram-post-list">
                                        <a href="author.html#">
                                            <img src="assets/images/small-images/instagram-06.jpg" alt="Instagram Images">
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Post List  -->
                            </div>
                            <!-- End Single Widget  -->
                        </div>
                        <!-- End Sidebar Area  -->



                    </div>
                </div>
            </div>
        </div>
        <!-- End Post List Wrapper  -->
        <!-- Start Instagram Area  -->
        <div class="axil-instagram-area axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">Instagram</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--30">
                    <div class="col-lg-12">
                        <ul class="instagram-post-list">
                            <li class="single-post">
                                <a href="author.html#">
                                    <img src="assets/images/small-images/instagram-md-01.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="author.html#">
                                    <img src="assets/images/small-images/instagram-md-02.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="author.html#">
                                    <img src="assets/images/small-images/instagram-md-03.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="author.html#">
                                    <img src="assets/images/small-images/instagram-md-04.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="author.html#">
                                    <img src="assets/images/small-images/instagram-md-05.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="author.html#">
                                    <img src="assets/images/small-images/instagram-md-06.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Instagram Area  -->

        <!-- Start Footer Area  -->
        <div class="axil-footer-area axil-footer-style-1 bg-color-white">
            <!-- Start Footer Top Area  -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Post List  -->
                            <div class="inner d-flex align-items-center flex-wrap">
                                <h5 class="follow-title mb--0 mr--20">Follow Us</h5>
                                <ul class="social-icon color-tertiary md-size justify-content-start">
                                    <li><a href="author.html#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="author.html#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="author.html#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="author.html#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Post List  -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Top Area  -->

            <!-- Start Copyright Area  -->
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-12">
                            <div class="copyright-left">
                                <div class="logo">
                                    <a href="index.html">
                                        <img class="dark-logo" src="assets/images/logo/logo-black.png" alt="Logo Images">
                                        <img class="light-logo" src="assets/images/logo/logo-white2.png" alt="Logo Images">
                                    </a>
                                </div>
                                <ul class="mainmenu justify-content-start">
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="author.html#">
                                            <span class="hover-flip-item">
                                        <span data-text="Contact Us">Contact Us</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="author.html#">
                                            <span class="hover-flip-item">
                                        <span data-text="Terms of Use">Terms of Use</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="author.html#">
                                            <span class="hover-flip-item">
                                        <span data-text="AdChoices">AdChoices</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="author.html#">
                                            <span class="hover-flip-item">
                                        <span data-text="Advertise with Us">Advertise with Us</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="author.html#">
                                            <span class="hover-flip-item">
                                        <span data-text="Blogar Store">Blogar Store</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="copyright-right text-start text-lg-end mt_md--20 mt_sm--20">
                                <p class="b3">All Rights Reserved © 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area  -->
        </div>
        <!-- End Footer Area  -->

        <!-- Start Back To Top  -->
        <a id="backto-top"></a>
        <!-- End Back To Top  -->

    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/tweenmax.min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery.style.switcher.js"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>