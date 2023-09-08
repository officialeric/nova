<!-- Start Sidebar Area  -->
<div class="sidebar-inner">

<!-- Start Single Widget  -->
<div class="axil-single-widget widget widget_categories mb--30">
    <ul>
    <?php foreach($fcategories as $category):  ?>
        <li class="cat-item">
            <a href="<?=$CATEGORY_PAGE_URL?>&post_category=<?=$category['category_name']?>" class="inner">
                <div class="thumbnail">
                    <img src="assets/images/post-images/category-image-03.jpg" alt="">
                </div>
                <div class="content">
                    <h5 class="title"><?=strtolower($category['category_name']);?></h5>
                </div>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
<!-- End Single Widget  -->

<!-- Start Single Widget  -->
<div class="axil-single-widget widget widget_search mb--30">
    <h5 class="widget-title">Search</h5>
    <form action="post-list.php#">
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

    <?php foreach($posts as $post):  ?>
        <!-- Start Single Post  -->
        <div class="content-block post-medium mb--20">
            <div class="post-thumbnail">
                <a href="<?=$POSTS_URL?>&post_id=<?=$post['id']?>">
                    <img src="admin/process/uploads/<?=$post['banner']?>" alt="Post Images">
                </a>
            </div>
            <div class="post-content">
                <h6 class="title"><a href="<?=$POSTS_URL?>&post_id=<?=$post['id']?>"><?=$post['title']?></a></h6>
                <div class="post-meta">
                    <ul class="post-meta-list">
                        <li><?=$post['createdAt']?></li>
                        <!-- <li>300k Views</li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Single Post  -->
       <?php endforeach; ?>
        

    </div>
    <!-- End Post List  -->

</div>
<!-- End Single Widget  -->

<!-- Start Single Widget  -->
<div class="axil-single-widget widget widget_social mb--30">
    <h5 class="widget-title">Stay In Touch</h5>
    <!-- Start Post List  -->
    <ul class="social-icon md-size justify-content-center">
        <li><a href="post-list.php#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="post-list.php#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="post-list.php#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="post-list.php#"><i class="fab fa-slack"></i></a></li>
        <li><a href="post-list.php#"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
    <!-- End Post List  -->
</div>
<!-- End Single Widget  -->


</div>
<!-- End Sidebar Area  -->