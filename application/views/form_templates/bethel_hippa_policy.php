<?php $frmdata = json_decode($form_data); ?>
<div class="template_form" style="border:1px solid gray;padding:10px;">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="text-center fbold mt-3"><?=$form_name?></h3>
                <hr>
            </div>
            <div class="col-md-12">
                 <h4 class="mb-3 mt-3">HIPAA CONFIDENTIALITY POLICY</h4>

                 <h5>PURPOSE:</h5>
                <p>To ensure patient-client, organizational and employee information remains secure.
                The use and disclosure of patient information is governed by the rules and regulations established under HIPAA, the Health Insurance Portability and Accountability Act of 1996. I acknowledge that during the course of performing my assigned duties with <span class="comp">Bethel Group LLC</span> , I may have access to, use, or disclose confidential health information. I hereby agree to handle such information in a confidential manner at all times during and after my employment and commit to the following obligations: </p>

               <h5>POLICY:</h5>

                 <ul style="list-style-type:none;">
                     <li>1. All employees must keep organizational, patient and employee information in the strict confidence. Non-clinical staff responsible for the processing, input or filling of agency information will not discuss any patient information with other staff or non-employees. Staff are expected to:</li>
                 </ul>

                <ul style="list-style-type: lower-latin;padding-left: 21px;">
                    <li>Ensure confidentiality whenever making telephone calls regarding patient care with attention paid to cell phone use due to the possibility of monitoring.</li>
                    <li>Secure all patient documentation upon removal from the office.</li>
                    <li>Maintain medical records and patient information in appropriate location.</li>
                    <li>Not review or use patient information except for their own patients.</li>
                </ul>


                A breach of agency or patient confidentiality may result in disciplinary action up to and including dismissal.

                <ul style="list-style-type:none">
                    <li> 2. All employees requiring access to any organizational, patient or employee information must sign a copy of a ‘Confidentiality Statement’.</li>
                    <li>3. Confidentiality policies and procedures must be included as part of new employee orientation and annual employee in-service education. </li>
                 </ul>
                 
                <hr class="mt-4 mb-4">
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Employee Name</label>
               <p class="p_val"><?= $frmdata->employee_name?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Date</label>
               <p class="p_val"><?= $frmdata->date?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Signature</label><br>
                <img style="border:1px solid #e3dfdf;" src="<?=base_url("assets/images/signatures/").$frmdata->signature?>" alt="signature">
            </div>
       </div>
    </div>
</div>