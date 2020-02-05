 <script>
         const base_url ="<?= base_url()?>";
         var vueapp = new Vue({
             el:"#vueapp",
             data(){
                 return{
                    files :  [],
                    b_url:base_url
                 }
             },
             methods:{
                show_upload_modal(){
                    $("#uploadmodal").modal();
                },
                get_files(){
                    return new Promise((resolve, reject)=> {
                        axios.get(`${base_url}employee/api_get_files`).then(res => {
                            this.files = res.data;
                            resolve(200)
                        })
                    }) 
                }
             },
             computed:{
                
             },
             mounted(){
               this.get_files().then((res)=>{
                    $('#myTable').DataTable();
                }) 
                
             }

         })
</script>