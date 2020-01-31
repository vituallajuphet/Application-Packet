<script>
    const base_url ="<?= base_url()?>";
    var vueapp = new Vue({
        el:"#vueapp",
        data(){
            return{
                fdata:{
                    applicant_name:"",
                    address:"",
                    has_specify:"No",
                    city:"",
                    state:"",
                    zip_code:"",
                    phone:"",
                    email_address:"",
                    job_order_number:"",
                    date:"2020-11-11",
                    work_company_name:"",
                    contact_name:"",
                    contact_phone_number:"",
                    contact_email:"",
                    contact_address:"",
                    description_of_nature:"CNA",
                    specify:"",
                    have_a_driver_license:"Yes",
                    Do_you_own_a_car:"Yes",
                }
            }
        },
        methods:{
            submitForm(){
                let formdata = new FormData();
                formdata.append("form_type", "per_diem_pay_form")
                formdata.append("fdata", JSON.stringify(this.fdata))
                axios.post(`${base_url}employee/api_submit_new_form`, formdata).then(res =>{
                        if(res.data.code == 200 ){
                        Swal.fire({ icon: 'success',  text: 'Submitted successfully!', })
                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    }else{
                        Swal.fire({ icon: 'error', text: 'There is an error in submitting the form!', })
                    }
                })
            }
        },
        computed:{
        
        },
        mounted(){
           
        }
    })
</script>

