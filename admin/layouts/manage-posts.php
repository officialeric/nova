<?php include 'header.php' ?>


                <!-- Sidebar -left -->
                <?php include 'sidebar.php'; ?>
                    <!--- End Sidemenu -->

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <!--  -->
                                    </div>
                                    <h4 class="page-title">Manage Posts</h4>
                                </div>
                            </div>


                            <a class="col-12"  href="<?=$ADD_POST_URL?>">
                                <button class='btn btn-primary rounded'>Add Post</button>
                            </a>

                            <!-- <div class="col-12">
                                <button class='btn btn-primary rounded'>Add Post</button>
                            </div> -->



                        </div>
                        <!-- end page title -->
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <p>Search input should be here</p>
                                </div>
                                <div class="card-body">
                                    <table id="selection-datatable"
                                        class="table table-striped dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Banner</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>category</th>
                                                <th>CreatedAt</th>
                                                <th>Status</th>
                                                <th>CreatedBy</th>
                                                <th>Operations</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php $i=1; foreach($posts as $post) : ?>
                                            <tr>
                                                <td><?=$i++?></td>
                                                <td><img src="../process/uploads/<?=$post['banner']?>" alt="" width='80%'></td>
                                                <td><?=$post['title']?></td>
                                                
                                                <td>Click Edit to view full post</td>
                                                <td><?=$post['category']?></td>
                                                <td><?=$post['createdAt']?></td>

                                                <td><?=$post['status']?></td>
                                                <td><?=$post['posted_by']?></td>
                                                <td>
                                                    <div class="d-flex">
                                                    <a class="text-soft-danger" href="<?=$ADD_POST_URL?>&post_id=<?=$post['id'];?>">

                                                    <button class='btn btn-primary m-2'>
                                                    <span class="material-symbols-outlined">
                                                    edit
                                                    </span>           
                                                    </button>
                                                    </a>
                                                    
                                                    <a href="../process/posting.php?publish_id=<?=$post['id']?>" name='publish'>
                                                        <button class='btn btn-primary m-2'>
                                                            <span class="material-symbols-outlined">
                                                            post
                                                            </span>           
                                                        </button>
                                                    </a>

                                                    <a class="text-soft-danger" href="../process/delete-action.php?page=posts&user_id=<?=$_GET['user_id']?>&del_id=<?=$post['id'];?>">
                                                    <button class='btn btn-danger m-2'>
                                                    <span class="material-symbols-outlined">
                                                    delete
                                                    </span> 
                                                    </button>
                                                    </a>
                                                    </div>  
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                        </tbody>
                                    </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div> <!-- end row-->


                        
                        
            
        </div>        
        
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Daterangepicker js -->
        <script src="assets/vendor/daterangepicker/moment.min.js"></script>
        <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
        
        <!-- Apex Charts js -->
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

        <!-- Vector Map js -->
        <script src="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <!-- Dashboard App js -->
        <script src="assets/js/pages/dashboard.js"></script>


        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>
</html> 