    <script src="<?=base_url()?>assets/js/vue.min.js"></script>
    <script src="<?=base_url()?>assets/js/axios.js"></script>
   
    <script src="<?=base_url()?>assets/module/jquery/jquery.min.js"></script>
     <script src="<?=base_url()?>assets/js/formvalidate.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?=base_url()?>assets/module/bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/module/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?=base_url()?>assets/module/ps/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?=base_url()?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url()?>assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url()?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="<?=base_url()?>assets/module/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/module/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
     <script src="<?=base_url()?>assets/module/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?=base_url()?>assets/module/sweetalert2/sweet-alert.init.js"></script>
    <script src="<?=base_url()?>assets/module/styleswitcher/jQuery.style.switcher.js"></script>
    <script>

         const base_url ="<?= base_url()?>";
         var vueapp = new Vue({
             el:"#vueapp",
             data(){
                 return{
                    onlineforms :  [],
                    b_url:base_url
                 }
             },
             methods:{
                get_files(){
                    return new Promise((resolve, reject)=> {
                        axios.get(`${base_url}admin/api_get_onlineforms`).then(res => {
                            this.onlineforms = res.data;
                            resolve(200)
                        })
                    }) 
                },
                showDelete(onlineform_id){
                    let self = this;
                    Swal.fire({
                        text: "Are you sure to delete this form data?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                        if (result.value) {
                            let fdata = new FormData();
                            fdata.append("onlineform_id", onlineform_id);
                            axios.post(`${base_url}admin/api_delete_formdata`, fdata).then(res => {
                                Swal.fire( '', 'Form data has been deleted.', 'success' )
                                if(res.data.code == 200){
                                     self.onlineforms = res.data.data
                                }
                            })
                        }
                    })
                }
             },
             computed:{
                
             },
             mounted(){
               this.get_files().then((res)=>{
                   let tbl = $('#myTable').DataTable();
                   tbl.order( [ 3, 'desc' ] ).draw();
              })
             }
         })
    </script>

    <?php 
        if(!empty($this->session->flashdata("has_swal"))){
            $swal = $this->session->flashdata("has_swal");
          ?>
            <script>
               Swal.fire({ icon: '<?=$swal["type"]?>',  text: '<?=$swal["msg"]?>' });
            </script>
          <?php
        }
    ?>


    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?=base_url()?>assets/module/styleswitcher/jQuery.style.switcher.js"></script>
     </body>
</html>
