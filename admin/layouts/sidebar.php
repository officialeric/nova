<div class="h-100" id="leftside-menu-container" data-simplebar>
    <!--- Sidemenu -->
    <ul class="side-nav">

        <li class="side-nav-title">Main</li>

        <li class="side-nav-item">
            <a href="<?=$BASE_URL;?>" class="side-nav-link">
                <span class="material-symbols-outlined">
                    dashboard
                </span> <span class="badge bg-success float-end">9+</span>
                <span class='ml-3'> Dashboard </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="<?=$USERS_URL;?>" class="side-nav-link">
                <span class="material-symbols-outlined">
                    manage_accounts
                </span> <!-- <span class="badge bg-success float-end">9+</span> -->
                <span class='ml-3'> Manage Users </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="<?=$ROLES_URL;?>" class="side-nav-link">
                <span class="material-symbols-outlined">
                    badge
                </span> <!-- <span class="badge bg-success float-end">9+</span> -->
                <span class='ml-3'> Manage Roles </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="<?=$CATEGORIES_URL;?>" class="side-nav-link">
                <span class="material-symbols-outlined">
                    category
                </span> <!-- <span class="badge bg-success float-end">9+</span> -->
                <span class='ml-3'> Manage Category </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="<?=$SUBSCRIBERS_URL;?>" class="side-nav-link">
                <span class="material-symbols-outlined">
                    category
                </span> <!-- <span class="badge bg-success float-end">9+</span> -->
                <span class='ml-3'> Subscribers </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="<?=$POSTS_URL;?>" class="side-nav-link">
                <span class="material-symbols-outlined">
                    post_add
                </span><!-- <span class="badge bg-success float-end">9+</span> -->
                <span class='ml-3'> Manage Posts </span>
            </a>
        </li>



        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="index.php#sidebarPages" aria-expanded="false"
                aria-controls="sidebarPages" class="side-nav-link">
                <span class="material-symbols-outlined">
                    switches
                </span><span class='ml-3'> Feature Activation </span>
                <span class="material-symbols-outlined ml-3">
                    expand_more
                </span>
            </a>
            <div class="collapse" id="sidebarPages">
                <ul class="side-nav-second-level">
                    <!-- <li>
                                        <a href="pages-starter.php">Starter Page</a>
                                    </li>
                                    <li>
                                        <a href="pages-contact-list.php">Contact List</a>
                                    </li>
                                    <li>
                                        <a href="pages-profile.php">Profile</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.php">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="pages-invoice.php">Invoice</a>
                                    </li> -->
                    <li>
                        <a href="#">Social Login</a>
                    </li>
                    <!-- <li>
                                        <a href="pages-pricing.php">Pricing</a>
                                    </li> -->
                    <li>
                        <a href="pages-maintenance.php">Maintenance</a>
                    </li>
                    <li>
                        <a href="error-404.php">Error 404</a>
                    </li>
                    <li>
                        <a href="error-404-alt.php">Error 404-alt</a>
                    </li>
                    <li>
                        <a href="error-500.php">Error 500</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="index.php#sidebarPagesAuth" aria-expanded="false"
                aria-controls="sidebarPagesAuth" class="side-nav-link">
                <span class="material-symbols-outlined">
                    settings
                </span> <span class='ml-3'> Setting</span>
                <span class="material-symbols-outlined ml-3">
                    expand_more
                </span> </a>
            <div class="collapse" id="sidebarPagesAuth">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="<?=$SET_HEADER_URL?>">Header</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li>
                        <a href="#">Footer</a>
                    </li>
                    <li>
                        <a href="auth-forgotpw.php">Forgot Password</a>
                    </li>
                    <li>
                        <a href="auth-lock-screen.php">Lock Screen</a>
                    </li>
                </ul>
            </div>
        </li>




    </ul>