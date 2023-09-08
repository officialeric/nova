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
                        <h4 class="page-title">Manage Categories</h4>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <button type="button" class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Add Category
                    </button>
                </div>
                
<!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">ADD CATEGORY</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <form action="../process/adding-activity.php" method="post" id='form'>
                                        <label for="inputGroupFile04">Category Name</label>
                                        <div class="input-group">
                                            <input type="text" name="category" class="form-control" id="inputGroupFile04"
                                                aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-soft-danger"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" name="add_cat" class="btn btn-primary"
                                        form='form'>
                                        Add
                                    </button>
                                </div>
                            

                        </div>
                    </div>
               
<!--/ meta -->

</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Multi item selection</h4>
                <p class="text-muted mb-0">
                    This example shows the multi option. Note how a click on a row will toggle its
                    selected state without effecting other rows,
                    unlike the os and single options shown in other examples.
                </p>
            </div>
            <div class="card-body">
                <table id="selection-datatable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Category</th>
                            <th>Action</th>

                        </tr>
                    </thead>


                    <tbody>
                        <?php $i = 0; foreach($results as $result): $i++;?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?=$result['category_name'];?></td>
                            <td>
                                <a class="text-soft-danger" href="../process/delete-action.php?page=category&user_id=<?=$_GET['user_id']?>&del_id=<?=$result['id'];?>">
                                    <button type="button" class="btn btn-soft-danger">
                                        Remove
                                    </button>
                                </a>
                            </td>

                        </tr>
                        <?php endforeach; ?>
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