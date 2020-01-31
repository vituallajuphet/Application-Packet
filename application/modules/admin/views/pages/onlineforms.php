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
                <h3 class="text-themecolor">Onlineform Panel</h3>
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
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Onlineform ID</th>
                                                <th>Form Name</th>
                                                <th>Submitted By</th>
                                                <th>Date Submitted</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="frm in onlineforms" :class="frm.is_read == 0 ? 'fbold' : ''">
                                                <td>{{frm.onlineform_id}}</td>
                                                <td>{{frm.form_name}}</td>
                                                <td>{{frm.first_name}}</td>
                                                <td>{{frm.form_submitted}}</td>
                                               <td class="text-center actionsbtn">
                                                    <a :href="b_url+'admin/view_form/'+frm.onlineform_id" title="View" class="text-success" style="font-size:14px;"><i class="fas fa-eye"></i></a>
                                                    <a  href="javascript:;" title="Delete" style="color:red" @click="showDelete(frm.onlineform_id)"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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