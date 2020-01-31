<?php $frmdata = json_decode($form_data); ?>
<div class="template_form" style="border:1px solid gray;padding:10px;">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="text-center fbold mt-3"><?=$form_name?></h3>
                <hr>
            </div>
            <div class="col-md-12">
                 <h4 class="mb-3 mt-3">Nurses Knowledge and Skills Required:</h4>
                 <ul style="list-style-type: decimal">
					<li>Assists with proving patient care: records vital signs, discuses and record chief health concerns, performs tests, and administers injections.</li>
					<li>Place phone calls to pharmacies to order prescriptions: sets up referral contacts. Pulls and prepares patients charts: answers phone; perform other general office duties as required.</li>
					<li>Maintains neatness of work area; stocks patient rooms with supplies.</li>
					<li>Performs other duties as assigned. Giving medication as prescribed by a doctor.</li>
					<li>Taking vital signs, such as blood pressure, temperature and weight.</li>
					<li>Basic wound care including cleaning and bandaging injured areas.</li>
					<li>Giving injections of medication.</li>
					<li>Immunizations.</li>
					<li>Taking medical histories.</li>
					<li>Entering information’s into computer systems.</li>
					<li>Managing IV’s, catheters, urostomy and colostomy.</li>
					<li>Ensuring patients and their families understand release instructions</li>
					<li>Supervising CNAs ( Certified Nursing Assisatnts)</li>
					<li>Monitoring fluid and food intake and output</li>
					<li>Moving patients safely</li>
					<li>Assessing patients’ reactions to medications</li>
					<li>Assessing patients’ mental health</li>
					<li>Proving emotional support</li>
					<li>Assisting with daily need as bating and dressing</li>
					<li>Observation of patient’s skin for potential bed sores and do wound dressing</li>
					<li>Schedule appointments</li>
					<li>Keeping medical records current</li>
					<li>Writing prescriptions at physicians request </li>
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