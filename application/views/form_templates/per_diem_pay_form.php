<?php $frmdata = json_decode($form_data); ?>
<div class="template_form" style="border:1px solid gray;padding:10px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h3 class="text-center fbold mt-3"><?=$form_name?></h3>
                <hr>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Name of Job Applicant/Worker</label>
                <p class="p_val"><?= $frmdata->applicant_name?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Home Street Address </label>
               <p class="p_val"><?= $frmdata->address?></p>
            </div>
       </div>
       <hr>
       <div class="row">
            <div class="col-md-4">
                <label class="fbold" for="">City</label>
                <p class="p_val"><?= $frmdata->city?></p>
            </div>
            <div class="col-md-4">
                <label class="fbold" for="">State </label>
               <p class="p_val"><?= $frmdata->state?></p>
            </div>
            <div class="col-md-4">
                <label class="fbold" for="">Zip Code </label>
               <p class="p_val"><?= $frmdata->zip_code?></p>
            </div>
       </div>
       <hr>
       <div class="row">
            <div class="col-md-6">
                <label class="fbold" for="">Phone Number</label>
                <p class="p_val"><?= $frmdata->phone?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Email Address </label>
               <p class="p_val"><?= $frmdata->email_address?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Job Order Number</label>
                <p class="p_val"><?= $frmdata->job_order_number?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Date of Assignment</label>
               <p class="p_val"><?= $frmdata->date?></p>
            </div>
       </div>
       <hr>
       <div class="row">
            <div class="col-12">
                <label class="fbold" for="">Worksite Company Name</label>
                <p class="p_val"><?= $frmdata->work_company_name?></p>
            </div>
       </div>
       <div class="row">
            <div class="col-md-6">
                <label class="fbold" for="">Name of Contact Person at Work Site </label>
                <p class="p_val"><?= $frmdata->contact_name?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Contact Person Phone Number </label>
               <p class="p_val"><?= $frmdata->contact_phone_number?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Contact Person Email Address </label>
                <p class="p_val"><?= $frmdata->contact_email?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Work Site Address </label>
               <p class="p_val"><?= $frmdata->contact_address?></p>
            </div>
             <div class="col-md-6">
                <label class="fbold" for="">Description and Nature of Assignment</label>
                <p class="p_val"><?= $frmdata->description_of_nature?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for=""> Special Attire, Accessories, Tools, Protective, Equipment, Training or License Required  </label>
                <p class="p_val"><?= $frmdata->has_specify?></p>
               
            </div>
            <div class="col-md-12">
                 <?php 
                    if($frmdata->has_specify == "No"){ ?>
                         <label class="fbold" for="">Specify</label>
                        <p class="p_val"><?= $frmdata->specify?></p>
               <?php } ?>
              
            </div>
            <div class="col-md-12">
                 <br>
                 <h5 class="fbold">What Licensed Do You Currently Hold? </h5>
                 <hr>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Do you have a driver's license?</label>
                <p class="p_val"><?= $frmdata->have_a_driver_license?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Do you own a car?</label>
               <p class="p_val"><?= $frmdata->Do_you_own_a_car?></p>
            </div>

       </div>
    </div>
</div>