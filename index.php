 <?php
include 'header.php';

?>



        <!-- Start Banner Area -->
        <h1 class="d-none">Home Default Blog</h1>
        <div class="slider-area bg-color-grey">
            <div class="axil-slide slider-style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="slider-activation axil-slick-arrow">
 
                            <?php foreach($recent_posts as $post) :
                              
                              $pauthor = $post['posted_by']; 
                              $sql = "SELECT * FROM users WHERE fullname='$pauthor'";
                              $result = mysqli_query($conn,$sql);

                              if(mysqli_num_rows($result) == 1){
                                $author = mysqli_fetch_assoc($result);
                              }  
                             ?>

                                <!-- Start Single Slide  -->
                                <div class="content-block">

                                    <!-- Start Post Thumbnail  -->
                                    <div class="post-thumbnail">
                                        <a href="<?=$POSTS_URL?>">
                                            <img src="admin/process/uploads/<?=$post['banner']?>" alt="Post Images">
                                        </a>
                                    </div>
                                    <!-- End Post Thumbnail  -->



                                    <!-- Start Post Content  -->
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
                                        <h2 class="title">
                                            <a href="<?=$POSTS_URL?>&post_id=<?=$post['id']?>">
                                            <?=$post['title']?>
                                            </a>
                                        </h2>
                                        <!-- Post Meta  -->
                                        <div class="post-meta-wrapper with-button">
                                            <div class="post-meta">
                                                <div class="post-author-avatar border-rounded" style='width:1%;'>
                                                    <img src="admin/process/uploads/<?=$author['profile_img']?>" alt="Author Images">
                                                </div>
                                                <div class="content">
                                                    <h6 class="post-author-name">
                                                        <a class="hover-flip-item-wrapper" href="<?=$AUTHOR_URL?>&author_id=<?=$author['id']?>">
                                                            <span class="hover-flip-item">
                                                                <span data-text="<?=$post['posted_by']?>"><?=$post['posted_by']?></span>
                                                            </span>
                                                        </a>
                                                    </h6>
                                                    <ul class="post-meta-list">
                                                        <li><?=$post['createdAt']?></li>
                                                        <li>300k Views</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="social-share-transparent justify-content-end">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-link"></i></a></li>
                                            </ul>
                                            <div class="read-more-button cerchio">
                                                <a class="axil-button button-rounded hover-flip-item-wrapper" href="<?=$POSTS_URL?>&post_id=<?=$post['id']?>">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Read Post">Read Post</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Post Content  -->

                                </div>
                                <!-- End Single Slide  -->

                            <?php endforeach ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

        <!-- Start Featured Area  -->
        <div class="axil-featured-post axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">Trendng Posts.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach($trending_posts as $post) : 

                        $pauthor = $post['posted_by']; 
                        $sql = "SELECT * FROM users WHERE fullname='$pauthor'";
                        $result = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result) == 1){
                          $author = mysqli_fetch_assoc($result);
                        }  
                    ?>
                    <!-- Start Single Post  -->
                    <div class="col-lg-6 col-xl-6 col-md-12 col-12 mt--30">
                        <div class="content-block content-direction-column axil-control is-active post-horizontal thumb-border-rounded">
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
                                <div class="post-meta">
                                    <div class="post-author-avatar border-rounded" style='width:1%;'>
                                        <img src="admin/process/uploads/<?=$author['profile_img']?>" alt="Author Images">
                                    </div>
                                    <div class="content">
                                        <h6 class="post-author-name">
                                            <a class="hover-flip-item-wrapper" href="<?=$AUTHOR_URL?>&author_id=<?=$author['id']?>">
                                                <span class="hover-flip-item">
                                                    <span data-text="<?=$post['posted_by']?>"><?=$post['posted_by']?></span>
                                                </span>
                                            </a>
                                        </h6>
                                        <ul class="post-meta-list">
                                            <li><?=$post['createdAt']?></li>
                                            <li>300k Views</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post-thumbnail" style='width:1%;'>
                                <a href="<?=$POSTS_URL?>">
                                    <img src="admin/process/uploads/<?=$post['banner']?>" alt="Post Images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Post  -->
                    <?php endforeach ?>

                    

    

        <!-- Start Categories List  -->
        <div class="axil-categories-list axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row align-items-center mb--30">
                    <div class="col-lg-6 col-md-8 col-sm-8 col-12">
                        <div class="section-title">
                            <h2 class="title">Trending Topics</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-4 col-12">
                        <div class="see-all-topics text-start text-sm-end mt_mobile--20">
                            <a class="axil-link-button" href="<?=$BASE_URL?>">See All Topics</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Start List Wrapper  -->
                        <div class="list-categories d-flex flex-wrap">

                        <?php foreach($rcategories as $category) : ?>
                            <!-- Start Single Category  -->
                            <div class="single-cat">
                                <div class="inner">
                                    <a href="<?=$BASE_URL?>">
                                        <div class="thumbnail">
                                            <img src="assets/images/post-images/post-sm-01.jpg" alt="post categories images">
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><?=strtolower($category['category_name'])?></h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach ?>
                            <!-- End Single Category  -->
                            

                            

                        </div>
                        <!-- Start List Wrapper  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Categories List  -->

        <!-- Start Trending Post Area  -->
        <div class="axil-trending-post-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">Most Popular</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Start Axil Tab Button  -->
                        <!-- <ul class="axil-tab-button nav nav-tabs mt--20" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="trend-one" data-bs-toggle="tab" href="<?=$BASE_URL?>trendone" role="tab" aria-controls="trend-one" aria-selected="true">Accessibility</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="trend-two" data-bs-toggle="tab" href="<?=$BASE_URL?>trendtwo" role="tab" aria-controls="trend-two" aria-selected="false">Android Dev</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="trend-three" data-bs-toggle="tab" href="<?=$BASE_URL?>trendthree" role="tab" aria-controls="trend-three" aria-selected="false">Blockchain</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="trend-four" data-bs-toggle="tab" href="<?=$BASE_URL?>trendfour" role="tab" aria-controls="trend-four" aria-selected="false">Gadgets</a>
                            </li>
                        </ul> -->
                        <!-- End Axil Tab Button  -->

                        <!-- Start Axil Tab Content  -->
                        <div class="tab-content">

                            <!-- Single Tab Content  -->
                            <div class="row trend-tab-content tab-pane fade show active" id="trendone" role="tabpanel" aria-labelledby="trend-one">
                                <div class="col-lg-8">
                                    <!-- Start Single Post  -->
                                <?php $i = 1; foreach($trending_posts as $post) : 

                                    $pauthor = $post['posted_by']; 
                                    $sql = "SELECT * FROM users WHERE fullname='$pauthor'";
                                    $result = mysqli_query($conn,$sql);

                                    if(mysqli_num_rows($result) == 1){
                                    $author = mysqli_fetch_assoc($result);
                                    }  
                                    ?>
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list"><?=($i++)?></span>
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
                                                <h3 class="title"><a href="<?=$POSTS_URL?>&post_id=<?=$post['id']?>"><?=$post['title']?></a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="<?=$AUTHOR_URL?>&author_id=<?=$author['id']?>">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="<?=$post['posted_by']?>"><?=$post['posted_by']?></span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li><?=$post['createdAt']?></li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="<?=$BASE_URL?>"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="<?=$POSTS_URL?>&post_id=<?=$post['id']?>">
                                                <img src="admin/process/uploads/<?=$post['banner']?>" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                    <!-- End Single Post  -->

                                    
                                </div>
                            </div>
                            <!-- Single Tab Content  -->

                                       
                        </div>
                        <!-- End Axil Tab Content  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Trending Post Area  -->

        <!-- Start Post Grid Area  -->
        <div class="axil-post-grid-area axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row axil-section-gapBottom">
                    <div class="col-lg-12">
                        <div class="axil-social-wrapper bg-color-white radius">
                            <ul class="social-with-text">
                                <li class="twitter"><a href="<?=$BASE_URL?>"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
                                <li class="facebook"><a href="<?=$BASE_URL?>"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
                                <li class="instagram"><a href="<?=$BASE_URL?>"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
                                <li class="youtube"><a href="<?=$BASE_URL?>"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
                                <li class="pinterest"><a href="<?=$BASE_URL?>"><i class="fab fa-pinterest"></i><span>Pinterest</span></a></li>
                                <li class="discord"><a href="<?=$BASE_URL?>"><i class="fab fa-discord"></i><span>Discord</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">Most Popular</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <ul class="axil-tab-button nav nav-tabs mt--20" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="grid-one" data-bs-toggle="tab" href="<?=$BASE_URL?>gridone" role="tab" aria-controls="grid-one" aria-selected="true">Accessibility</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="grid-two" data-bs-toggle="tab" href="<?=$BASE_URL?>gridtwo" role="tab" aria-controls="grid-two" aria-selected="false">Android Dev</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="grid-three" data-bs-toggle="tab" href="<?=$BASE_URL?>gridthree" role="tab" aria-controls="grid-three" aria-selected="false">Blockchain</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="grid-four" data-bs-toggle="tab" href="<?=$BASE_URL?>gridfour" role="tab" aria-controls="grid-four" aria-selected="false">Gadgets</a>
                            </li>
                        </ul>
                        <!-- Start Tab Content  -->
                        <div class="grid-tab-content tab-content mt--10">

                            <!-- Start Single Tab Content  -->
                            <div class="single-post-grid tab-pane fade show active" id="gridone" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                                        <!-- Start Post Grid  -->
                                        <div class="content-block post-grid post-grid-large mt--30">
                                            <div class="post-thumbnail">
                                                <a href="<?=$POSTS_URL?>">
                                                    <img src="assets/images/post-images/post-grid-01.jpg" alt="Post Images">
                                                </a>
                                            </div>
                                            <div class="post-grid-content">
                                                <div class="post-content">
                                                    <div class="post-cat">
                                                        <div class="post-cat-list">
                                                            <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="DESIGN">DESIGN</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h3 class="title"><a href="<?=$POSTS_URL?>">Get Ready To Up Your
                                                            Creative Game With The New DJI Mavic Air 2</a></h3>
                                                    <div class="post-meta-wrapper">
                                                        <div class="post-meta">
                                                            <div class="post-author-avatar border-rounded">
                                                                <img src="assets/images/post-images/author/author-image-2.png" alt="Author Images">
                                                            </div>
                                                            <div class="content">
                                                                <h6 class="post-author-name">
                                                                    <a class="hover-flip-item-wrapper" href="author.php">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                                        </span>
                                                                    </a>
                                                                </h6>
                                                                <ul class="post-meta-list">
                                                                    <li>Feb 17, 2019</li>
                                                                    <li>300k Views</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <ul class="social-share-transparent justify-content-end">
                                                            <li><a href="<?=$BASE_URL?>"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="<?=$BASE_URL?>"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="<?=$BASE_URL?>"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="<?=$BASE_URL?>"><i class="fas fa-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Post Grid  -->
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="<?=$POSTS_URL?>">
                                                            <img src="assets/images/post-images/post-grid-07.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="LIFESTYLE">LIFESTYLE</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="<?=$POSTS_URL?>">The underrated
                                                                    design book
                                                                    that transformed the</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="<?=$POSTS_URL?>">
                                                            <img src="assets/images/post-images/post-grid-08.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="TRAVEL">TRAVEL</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="<?=$POSTS_URL?>">Apple reimagines
                                                                    the iPhone experience with iOS 14 </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab Content  -->

                            <!-- Start Single Tab Content  -->
                            <div class="single-post-grid tab-pane fade" id="gridtwo" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                                        <!-- Start Post Grid  -->
                                        <div class="content-block post-grid post-grid-large mt--30">
                                            <div class="post-thumbnail">
                                                <a href="<?=$POSTS_URL?>">
                                                    <img src="assets/images/post-images/post-grid-09.jpg" alt="Post Images">
                                                </a>
                                            </div>
                                            <div class="post-grid-content">
                                                <div class="post-content">
                                                    <div class="post-cat">
                                                        <div class="post-cat-list">
                                                            <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="DESIGN">DESIGN</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h3 class="title"><a href="<?=$POSTS_URL?>">Get Ready To Up Your
                                                            Creative Game With The New DJI Mavic Air 2</a></h3>
                                                    <div class="post-meta-wrapper">
                                                        <div class="post-meta">
                                                            <div class="post-author-avatar border-rounded">
                                                                <img src="assets/images/post-images/author/author-image-2.png" alt="Author Images">
                                                            </div>
                                                            <div class="content">
                                                                <h6 class="post-author-name">
                                                                    <a class="hover-flip-item-wrapper" href="author.php">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                                        </span>
                                                                    </a>
                                                                </h6>
                                                                <ul class="post-meta-list">
                                                                    <li>Feb 17, 2019</li>
                                                                    <li>300k Views</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <ul class="social-share-transparent justify-content-end">
                                                            <li><a href="<?=$BASE_URL?>"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="<?=$BASE_URL?>"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="<?=$BASE_URL?>"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="<?=$BASE_URL?>"><i class="fas fa-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Post Grid  -->
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="<?=$POSTS_URL?>">
                                                            <img src="assets/images/post-images/post-grid-02.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="LIFESTYLE">LIFESTYLE</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="<?=$POSTS_URL?>">The underrated
                                                                    design book
                                                                    that transformed the</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="<?=$POSTS_URL?>">
                                                            <img src="assets/images/post-images/post-grid-03.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="TRAVEL">TRAVEL</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="<?=$POSTS_URL?>">Apple reimagines
                                                                    the
                                                                    iPhone experience with iOS 14 </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab Content  -->

                            <!-- Start Single Tab Content  -->
                            <div class="single-post-grid tab-pane fade" id="gridthree" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                                        <!-- Start Post Grid  -->
                                        <div class="content-block post-grid post-grid-large mt--30">
                                            <div class="post-thumbnail">
                                                <a href="<?=$POSTS_URL?>">
                                                    <img src="assets/images/post-images/post-grid-09.jpg" alt="Post Images">
                                                </a>
                                            </div>
                                            <div class="post-grid-content">
                                                <div class="post-content">
                                                    <div class="post-cat">
                                                        <div class="post-cat-list">
                                                            <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="DESIGN">DESIGN</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h3 class="title"><a href="<?=$POSTS_URL?>">Get Ready To Up Your
                                                            Creative Game With The New DJI Mavic Air 2</a></h3>
                                                    <div class="post-meta-wrapper">
                                                        <div class="post-meta">
                                                            <div class="post-author-avatar border-rounded">
                                                                <img src="assets/images/post-images/author/author-image-2.png" alt="Author Images">
                                                            </div>
                                                            <div class="content">
                                                                <h6 class="post-author-name">
                                                                    <a class="hover-flip-item-wrapper" href="author.php">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                                        </span>
                                                                    </a>
                                                                </h6>
                                                                <ul class="post-meta-list">
                                                                    <li>Feb 17, 2019</li>
                                                                    <li>300k Views</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <ul class="social-share-transparent justify-content-end">
                                                            <li><a href="<?=$BASE_URL?>"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="<?=$BASE_URL?>"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="<?=$BASE_URL?>"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="<?=$BASE_URL?>"><i class="fas fa-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Post Grid  -->
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="<?=$POSTS_URL?>">
                                                            <img src="assets/images/post-images/post-grid-07.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="LIFESTYLE">LIFESTYLE</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="<?=$POSTS_URL?>">The underrated
                                                                    design book
                                                                    that transformed the</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="<?=$POSTS_URL?>">
                                                            <img src="assets/images/post-images/post-grid-08.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="TRAVEL">TRAVEL</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="<?=$POSTS_URL?>">Apple reimagines
                                                                    the
                                                                    iPhone experience with iOS 14 </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab Content  -->

                            <!-- Start Single Tab Content  -->
                            <div class="single-post-grid tab-pane fade" id="gridfour" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                                        <!-- Start Post Grid  -->
                                        <div class="content-block post-grid post-grid-large mt--30">
                                            <div class="post-thumbnail">
                                                <a href="<?=$POSTS_URL?>">
                                                    <img src="assets/images/post-images/post-grid-01.jpg" alt="Post Images">
                                                </a>
                                            </div>
                                            <div class="post-grid-content">
                                                <div class="post-content">
                                                    <div class="post-cat">
                                                        <div class="post-cat-list">
                                                            <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="DESIGN">DESIGN</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h3 class="title"><a href="<?=$POSTS_URL?>">Get Ready To Up Your
                                                            Creative Game With The New DJI Mavic Air 2</a></h3>
                                                    <div class="post-meta-wrapper">
                                                        <div class="post-meta">
                                                            <div class="post-author-avatar border-rounded">
                                                                <img src="assets/images/post-images/author/author-image-2.png" alt="Author Images">
                                                            </div>
                                                            <div class="content">
                                                                <h6 class="post-author-name">
                                                                    <a class="hover-flip-item-wrapper" href="author.php">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                                        </span>
                                                                    </a>
                                                                </h6>
                                                                <ul class="post-meta-list">
                                                                    <li>Feb 17, 2019</li>
                                                                    <li>300k Views</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <ul class="social-share-transparent justify-content-end">
                                                            <li><a href="<?=$BASE_URL?>"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="<?=$BASE_URL?>"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="<?=$BASE_URL?>"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="<?=$BASE_URL?>"><i class="fas fa-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Post Grid  -->
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="<?=$POSTS_URL?>">
                                                            <img src="assets/images/post-images/post-grid-02.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="LIFESTYLE">LIFESTYLE</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="<?=$POSTS_URL?>">The underrated
                                                                    design book
                                                                    that transformed the</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="<?=$POSTS_URL?>">
                                                            <img src="assets/images/post-images/post-grid-03.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="TRAVEL">TRAVEL</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="<?=$POSTS_URL?>">Apple reimagines
                                                                    the
                                                                    iPhone experience with iOS 14 </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab Content  -->

                        </div>
                        <!-- End Tab Content  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Post Grid Area  -->

        <!-- Start Post List Wrapper  -->
        <div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                        <div class="axil-banner">
                            <div class="thumbnail">
                                <a href="<?=$BASE_URL?>">
                                    <img class="w-100" src="assets/images/add-banner/banner-01.png" alt="Banner Images">
                                </a>
                            </div>
                        </div>
                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control is-active mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>">
                                    <img src="assets/images/post-images/post-list-11.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                            <span class="hover-flip-item">
                                                <span data-text="FOOD">FOOD</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="<?=$POSTS_URL?>">Security isn’t just a technology problem
                                        it’s about design, too </a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.php">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Jane Ara">Jane Ara</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>">
                                    <img src="assets/images/post-images/post-list-12.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                            <span class="hover-flip-item">
                                                <span data-text="LIFESTYLE">LIFESTYLE</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="<?=$POSTS_URL?>">The 1 tool that helps remote teams collaborate better</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.php">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Fatima Jane">Fatima Jane</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>">
                                    <img src="assets/images/post-images/post-list-15.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                            <span class="hover-flip-item">
                                                <span data-text="TRAVEL">TRAVEL</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="<?=$POSTS_URL?>">Traditional design won’t save us in the COVID-19 era</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.php">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Esrat Ara">Esrat Ara</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>">
                                    <img src="assets/images/post-images/post-list-13.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                            <span class="hover-flip-item">
                                                <span data-text="DESIGN">DESIGN</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="<?=$POSTS_URL?>">Get Ready To Up Your Creative Game With The New DJI Mavic Air 2</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.php">
                                                    <span class="hover-flip-item">
                                                        <span data-text="John Doe">John Doe</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>">
                                    <img src="assets/images/post-images/post-list-14.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                            <span class="hover-flip-item">
                                                <span data-text="FOOD">FOOD</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="<?=$POSTS_URL?>">Security isn’t just a technology problem
                                        it’s about design, too </a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.php">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Asifa Fr">Asifa Fr</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

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

        <!-- Start Video Area  -->
        <div class="axil-video-post-area axil-section-gap bg-color-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">Featured Video</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-md-6 col-12">
                        <!-- Start Post List  -->
                        <div class="content-block post-default image-rounded mt--30">
                            <div class="post-thumbnail">
                                <a href="<?=$POSTS_URL?>">
                                    <img src="assets/images/post-images/post-dark-01.jpg" alt="Post Images">
                                </a>
                                <a class="video-popup position-top-center" href="<?=$POSTS_URL?>"><span
                                        class="play-icon"></span></a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                            <span class="hover-flip-item">
                                                <span data-text="CAREERS">CAREERS</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="title"><a href="<?=$POSTS_URL?>">Security isn’t just a technology problem
                                        it’s about design, too</a></h3>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.php">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?=$BASE_URL?>"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-md-6 col-12">
                        <div class="row">
                            <!-- Start Post List  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="content-block post-default image-rounded mt--30">
                                    <div class="post-thumbnail">
                                        <a href="<?=$POSTS_URL?>">
                                            <img src="assets/images/post-images/post-dark-04.jpg" alt="Post Images">
                                        </a>
                                        <a class="video-popup size-medium position-top-center" href="<?=$POSTS_URL?>"><span class="play-icon"></span></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                    <span class="hover-flip-item">
                                                        <span data-text="DESIGN">DESIGN</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h5 class="title"><a href="<?=$POSTS_URL?>">Get Ready To Up Your Creative Game With The </a></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post List  -->

                            <!-- Start Post List  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="content-block post-default  image-rounded mt--30">
                                    <div class="post-thumbnail">
                                        <a href="<?=$POSTS_URL?>">
                                            <img src="assets/images/post-images/post-dark-03.jpg" alt="Post Images">
                                        </a>
                                        <a class="video-popup size-medium position-top-center" href="<?=$POSTS_URL?>"><span class="play-icon"></span></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                    <span class="hover-flip-item">
                                                        <span data-text="LEADERSHIP">LEADERSHIP</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h5 class="title"><a href="<?=$POSTS_URL?>">Traditional design won’t save us in the COVID-19 era</a></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post List  -->

                            <!-- Start Post List  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="content-block post-default image-rounded mt--30">
                                    <div class="post-thumbnail">
                                        <a href="<?=$POSTS_URL?>">
                                            <img src="assets/images/post-images/post-dark-04.jpg" alt="Post Images">
                                        </a>
                                        <a class="video-popup size-medium position-top-center" href="<?=$POSTS_URL?>"><span class="play-icon"></span></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                    <span class="hover-flip-item">
                                                        <span data-text="PRODUCT UPDATES">PRODUCT UPDATES</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h5 class="title"><a href="<?=$POSTS_URL?>">New: Freehand Templates, built for the whole team</a></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post List  -->

                            <!-- Start Post List  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="content-block post-default image-rounded mt--30">
                                    <div class="post-thumbnail">
                                        <a href="<?=$POSTS_URL?>">
                                            <img src="assets/images/post-images/post-dark-05.jpg" alt="Post Images">
                                        </a>
                                        <a class="video-popup size-medium position-top-center" href="<?=$POSTS_URL?>"><span class="play-icon"></span></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="<?=$BASE_URL?>">
                                                    <span class="hover-flip-item">
                                                        <span data-text="COLLABORATION">COLLABORATION</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h5 class="title"><a href="<?=$POSTS_URL?>">The 1 tool that helps remote teams
                                                collaborate better</a></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post List  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Video Area  -->

        <?php include 'footer.php' ?>