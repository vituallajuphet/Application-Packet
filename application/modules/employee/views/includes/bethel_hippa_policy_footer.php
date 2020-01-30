<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="<?=base_url()?>assets/js/signature.js"></script>
<script>
    var hasSign = false;
 $(document).ready(function(){

	 $(function() {
        var sig = $('#sig').signature();

        $('#sig').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            alert(1)
        });
         $('#btn-clear').click(function(e) {
            e.preventDefault();
            console.log(sig);
            sig.signature('clear');
        });

        $('#sig canvas').click(function(e) {
            hasSign = true;
        });
    });
 })

 </script>
 <script>
         const base_url ="<?= base_url()?>";
         var vueapp = new Vue({
             el:"#vueapp",
             data(){
                 return{
                    fullname: "",
                    date: "",
                    hidden: "",
                 }
             },
             methods:{
                submitForm(){
                  if(hasSign){
                    var canvas=  document.getElementsByTagName("canvas");
                    document.getElementById('canvas_img').value = canvas[0].toDataURL('image/png');
                    let fdata = new FormData();
                    let canvass = $("#canvas_img").val();
                    fdata.append("canvas_img", canvass)
                    fdata.append("form_type", "bethel_hippa_policy")
                    fdata.append("fullname", this.fullname)
                    fdata.append("date", this.date)
                    axios.post(`${base_url}employee/submit_api_form`, fdata).then(res =>{
                        if(res.data.code == 200 ){
                            Swal.fire({ icon: 'success',  text: 'Submitted successfully!', })
                            this.fullname = "";
                            this.date = "";
                            var sig = $('#sig').signature();
                            sig.signature('clear');
                        }else{
                            Swal.fire({ icon: 'error', text: 'There is an error in submitting the form!', })
                        }
                    })
                  }else{
                    Swal.fire({ icon: 'error', title: 'Oops...', text: 'please add signature', })
                  }
                }
             },
             computed:{
              
             },
             mounted(){
               
             }
         })
    </script>

