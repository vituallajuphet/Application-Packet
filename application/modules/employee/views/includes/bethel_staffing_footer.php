<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="<?=base_url()?>assets/js/signature.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script type="text/javascript">
  var onloadCallback = function() {
    grecaptcha.render('form_recaptcha', {
      'sitekey' : '6LftnpIUAAAAAGSTlCV2ZtZxiKevQ7SrM5baht7p'
    });
  };
</script>

<script>

 $(document).ready(function(){
     $('#form_recaptcha .recaptcha-checkbox-checkmark').addClass('required');
    $("select[name=How_did_you_hear_about_us]").change(function(){
        let val = $(this).val();
        if(val == "Other"){
            $(".div-others").show();
        }else{
            $(".div-others").hide();
        }
    })

    $("input[name=Veteran_of_the_US_Military]").change(function(){
       let val = $(this).val();
       if(val == "Yes"){
           $(".veterance-branch").show()
       }else{
           $(".veterance-branch").hide()
       }
    })
    $("input[name=Have_you_been_Convicted]").change(function(){
       let val = $(this).val();
       if(val == "Yes"){
           $(".please_explain").show()
       }else{
           $(".please_explain").hide()
       }
    })

    $("#submit_form").submit(function(e){
         
          var gcap = grecaptcha.getResponse();
          if(gcap.length == 0){
              Swal.fire({ icon: 'error', text: 'Invalid recaptcha', })
              e.preventDefault();
              return;
          }

      })

    
 })

 </script>
