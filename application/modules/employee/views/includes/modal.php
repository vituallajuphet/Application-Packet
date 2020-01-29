<!-- start modal -->
<div id="uploadmodal" class="modal" tabindex="-1" role="dialog" aria-labelledby="vcenter" style="display: none; padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
         <form action="<?= base_url("employee/upload_file")?>" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <h4 class="modal-title" id="vcenter">File Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <!-- start -->
                 
                     <div class="form-body">
                                            <div class="card-body">
                                                <div class="row pt-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">File Title</label>
                                                            <input required type="text"name="file_title"  id="file_title" class="form-control" placeholder="Enter File name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">File Type</label>
                                                             <select required name="file_type" class="form-control custom-select">
                                                                <option value="">Select Type.</option>
                                                                <option value="License">License</option>
                                                                <option value="Certificate">Certificate</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                 
                                                </div>
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-success">
                                                            <label class="control-label">Upload File</label>
                                                             <input required name="file" type="file" class="form-control" >
                                                         </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6"> </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                            </div>
                                        </div>
                                  
                <!-- end -->
            </div>
            <div class="modal-footer">
                 <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
            </div>
            
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- end modal -->