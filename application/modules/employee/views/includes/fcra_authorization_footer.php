
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
