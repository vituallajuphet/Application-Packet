<?php $frmdata = json_decode($form_data); ?>
<div class="template_form" style="border:1px solid gray;padding:10px;">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="text-center fbold mt-3"><?=$form_name?></h3>
                <hr>
            </div>
            <div class="col-md-12">
                 Declination of Hepatitis B Vaccine.
                The following statement of declination of the hepatitis B vaccine must be signed by an employee who:
                <ul>
                    <li>Chooses <strong style="font-weight:bold;">not</strong> to accept the vaccine. </li>
                    <li>Has had appropriate training regarding hepatitis B, hepatitis B vaccination, the efficacy, safety, method of administration and benefits of vaccination, given free of charge to the employee. </li>
                </ul>

                 <span style="color:green"><i class="fa fa-check"></i></span> I understand that due to my occupational exposure to blood or other potentially infectious materials I may be at risk of acquiring hepatitis B virus (HBV) infection. I have been given the opportunity to be vaccinated with hepatitis B vaccine, at no charge to myself. However, I decline hepatitis B vaccination at this time. I understand that by declining this vaccine I continue to be at risk of acquiring hepatitis B, a serious disease. If in the future I continue to have occupational exposure to blood or other potentially infectious materials and I want to be vaccinated with hepatitis B vaccine, I can receive the vaccination series at no charge to me.</p>
                 <hr class="mt-4">
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Applicant Name</label>
               <p class="p_val"><?= $frmdata->applicant_name?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Date</label>
               <p class="p_val"><?= $frmdata->date?></p>
            </div>
       </div>
    </div>
</div>