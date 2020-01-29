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
                <h3 class="text-themecolor">Uploaded Files</h3>
            </div>
            <div class="col-md-7 align-self-center text-right d-none d-md-block">
                <button type="button" class="btn btn-info" @click="show_upload_modal()"><i class="fa fa-plus-circle"></i> Upload File</button>
            </div>
        </div>
       
        <!-- startt -->
        <div class="row">
                    <div class="col-12">
                         <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>File Name</th>
                                                <th>Uploaded By</th>
                                                <th>File Type</th>
                                                <th>Date Uploaded</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="file in files" :key="file.file_id">
                                                <td>{{file.file_title}}</td>
                                                <td>{{file.first_name}}</td>
                                                <td>{{file.file_type}}</td>
                                                <td>{{file.uploaded_date}}</td>
                                                <td class="text-center actionsbtn">
                                                    <a :href="b_url+'assets/uploads/'+file.file_name" target="_blank" class="text-success" style="font-size:14px;"><i class="fas fa-eye"></i></a>
                                                 
                                                    <a download :href="b_url+'assets/uploads/'+file.file_name" ><i class="fas fa-download"></i></a>
                                                   
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                   </div>

                            
        </div>
        <?php 
            if(!empty($has_modal)){
                $this->load->view($has_modal);
            }
        ?>
        
        <!-- end content -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
      
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
