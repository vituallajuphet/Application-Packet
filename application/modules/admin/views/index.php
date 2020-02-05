 <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
               
            </div>
           
         
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex p-10 no-block">
                            <div class="align-slef-center">
                                <h2 class="m-b-0"><?= count($active_users);?></h2>
                                <h6 class="text-muted m-b-0 dashh6">Number of Employee</h6>
                            </div>
                            <div class="align-self-center display-6 ml-auto"><i class="text-deff icon-Target-Market"></i></div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success bg-def" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex p-10 no-block">
                            <div class="align-slef-center">
                                <h2 class="m-b-0 "><?= count($allfiles);?></h2>
                                <h6 class="text-muted m-b-0 dashh6">Number of Files</h6>
                            </div>
                            <div class="align-self-center display-6 ml-auto"><i class="text-info text-blue icon-Files"></i></div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info bg-blue" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex p-10 no-block">
                            <div class="align-slef-center">
                                <h2 class="m-b-0 "><?= count($allonlineforms);?></h2>
                                <h6 class="text-muted m-b-0 dashh6">Number of Online forms</h6>
                            </div>
                            <div class="align-self-center display-6 ml-auto"><i class="text-info text-blue icon-File-HorizontalText"></i></div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info bg-blue" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                    </div>
                </div>
            </div>
    
        </div>
      
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        Bethel Group
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>