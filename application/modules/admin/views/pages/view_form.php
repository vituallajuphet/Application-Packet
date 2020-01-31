 <div class="page-wrapper" id="vueapp">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Online Form Details</h3>
            </div>
            <div class="col-md-7 align-self-center text-right d-none d-md-block">
                <!-- <button type="button" class="btn btn-info" @click="show_file_modal()"><i class="fa fa-plus-circle"></i> Add File</button> -->
            </div>
        </div>
        <!-- startt -->
        <div class="row">
                    <div class="col-12">
                         <div class="card">
                            <div class="card-body">
                                <?php 
                                    $data = $frmdata[0];
                                    $this->load->view("form_templates/".$frmdata[0]->form_type, $data);
                                ?>
                            </div>
                        </div>
                   </div>

        </div>
        <!-- end content -->

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