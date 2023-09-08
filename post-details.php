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
                                                        <a class="hover-flip-item-wrapper" href="<?=$CATEGORY_PAGE_URL?>">
                                                            <span class="hover-flip-item">
                                                                <span data-text="<?=$post['category'];?>"><?=$post['category'];?></span>
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
                                    <div class="title">
                                        <h4 class="mb--0">30+ Comments</h4>
                                    </div>
                                    <div class="add-comment-button cerchio">
                                        <a class="axil-button button-rounded" href="<?=$POSTS_URL?>" tabindex="0"><span>Add Your Comment</span></a>
                                    </div>
                                </div>

                                <!-- Start Comment Respond  -->
                                <div class="comment-respond">
                                    <h4 class="title">Post a comment</h4>
                                    <form action="post-layout-1.php#">
                                        <p class="comment-notes"><span id="email-notes">Your email address will not be
                                                published.</span> Required fields are marked <span
                                                class="required">*</span></p>
                                        <div class="row row--10">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label for="name">Your Name</label>
                                                    <input id="name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label for="email">Your Email</label>
                                                    <input id="email" type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label for="website">Your Website</label>
                                                    <input id="website" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="message">Leave a Reply</label>
                                                    <textarea id="message" name="message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <p class="comment-form-cookies-consent">
                                                    <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                                    <label for="wp-comment-cookies-consent">Save my name, email, and
                                                        website in this browser for the next time I comment.</label>
                                                </p>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-submit cerchio">
                                                    <input name="submit" type="submit" id="submit" class="axil-button button-rounded" value="Post Comment">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Comment Respond  -->

                                <!-- Start Comment Area  -->
                                <div class="axil-comment-area">
                                    <h4 class="title">2 comments</h4>
                                    <ul class="comment-list">
                                        <!-- Start Single Comment  -->
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="single-comment">
                                                    <div class="comment-img">
                                                        <img src="assets/images/post-images/author/author-b2.png" alt="Author Images">
                                                    </div>
                                                    <div class="comment-inner">
                                                        <h6 class="commenter">
                                                            <a class="hover-flip-item-wrapper" href="post-layout-1.php#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="Cameron Williamson">Cameron
                                                                        Williamson</span>
                                                                </span>
                                                            </a>
                                                        </h6>
                                                        <div class="comment-meta">
                                                            <div class="time-spent">Nov 23, 2018 at 12:23 pm</div>
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
                                                            <p class="b2">Duis hendrerit velit scelerisque felis tempus,
                                                                id porta
                                                                libero venenatis. Nulla facilisi. Phasellus viverra
                                                                magna commodo dui lacinia tempus. Donec malesuada nunc
                                                                non dui posuere, fringilla vestibulum urna mollis.
                                                                Integer condimentum ac sapien quis maximus. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <!-- Start Single Comment  -->
                                                <li class="comment">
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
                                                                        ornare.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Single Comment  -->
                                            </ul>
                                        </li>
                                        <!-- End Single Comment  -->

                                        <!-- Start Single Comment  -->
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="single-comment">
                                                    <div class="comment-img">
                                                        <img src="assets/images/post-images/author/author-b2.png" alt="Author Images">
                                                    </div>
                                                    <div class="comment-inner">
                                                        <h6 class="commenter">
                                                            <a class="hover-flip-item-wrapper" href="post-layout-1.php#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="Rahabi Khan">Rahabi Khan</span>
                                                                </span>
                                                            </a>
                                                        </h6>
                                                        <div class="comment-meta">
                                                            <div class="time-spent">Nov 23, 2018 at 12:23 pm</div>
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
                                                            <p class="b2">Duis hendrerit velit scelerisque felis tempus,
                                                                id porta
                                                                libero venenatis. Nulla facilisi. Phasellus viverra
                                                                magna commodo dui lacinia tempus. Donec malesuada nunc
                                                                non dui posuere, fringilla vestibulum urna mollis.
                                                                Integer condimentum ac sapien quis maximus. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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

        <!-- Start Instagram Area  -->
        <div class="axil-instagram-area axil-section-gap bg-color-extra03">
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
                                <a href="post-layout-1.php#">
                                    <img src="assets/images/small-images/instagram-md-01.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="post-layout-1.php#">
                                    <img src="assets/images/small-images/instagram-md-02.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="post-layout-1.php#">
                                    <img src="assets/images/small-images/instagram-md-03.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="post-layout-1.php#">
                                    <img src="assets/images/small-images/instagram-md-04.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="post-layout-1.php#">
                                    <img src="assets/images/small-images/instagram-md-05.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="post-layout-1.php#">
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
                                    <li><a href="post-layout-1.php#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="post-layout-1.php#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="post-layout-1.php#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="post-layout-1.php#"><i class="fab fa-linkedin-in"></i></a></li>
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
                                    <a href="index.php">
                                        <img class="dark-logo" src="assets/images/logo/logo-black.png" alt="Logo Images">
                                        <img class="light-logo" src="assets/images/logo/logo-white2.png" alt="Logo Images">
                                    </a>
                                </div>
                                <ul class="mainmenu justify-content-start">
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="post-layout-1.php#">
                                            <span class="hover-flip-item">
                                        <span data-text="Contact Us">Contact Us</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="post-layout-1.php#">
                                            <span class="hover-flip-item">
                                        <span data-text="Terms of Use">Terms of Use</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="post-layout-1.php#">
                                            <span class="hover-flip-item">
                                        <span data-text="AdChoices">AdChoices</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="post-layout-1.php#">
                                            <span class="hover-flip-item">
                                        <span data-text="Advertise with Us">Advertise with Us</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="post-layout-1.php#">
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