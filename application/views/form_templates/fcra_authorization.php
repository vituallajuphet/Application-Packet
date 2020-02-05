<?php $frmdata = json_decode($form_data);
?>
<div class="template_form" style="border:1px solid gray;padding:10px;">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="text-center fbold mt-3"><?=$form_name?></h3>
                <hr>
            </div>
            <div class="col-md-12">
                <h4>FCRA Authorization to Obtain a Consumer Report (Background/Credit Check)</h4>
              
              <p>Pursuant to the federal Fair Credit Reporting Act, I hereby authorize <span class="comp">Bethel Group LLC</span> and its designated agents and representatives to conduct a comprehensive review of my background through a consumer report and/or an investigative consumer report to be generated for employment, promotion, reassignment or retention as an employee. I understand that the scope of the consumer report/investigative consumer report may include, but is not limited to, the following areas: verification of Social Security number; current and previous residences; employment history, including all personnel files; education; references; credit history and reports; criminal history, including records from any criminal justice agency in any or all federal, state or county jurisdictions; birth records; motor vehicle records, including traffic citations and registration; and any other public records. </p>
              
              <span style="color:green"><i class="fa fa-check"></i></span> I <span class="dsp-name"><?= $frmdata->name;?></span>, authorize the complete release of these records or data pertaining to me that an individual, company, firm, corporation or public agency may have. I hereby authorize and request any present or former employer, school, police department, financial institution or other persons having personal knowledge of me to furnish <span class="dsp-name"><?= $frmdata->company;?></span> or its designated agents with any and all information in their possession regarding me in connection with an application of employment. I am authorizing that a photocopy of this authorization be accepted with the same authority as the original.</p>
 
            
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Applicant Name</label>
               <p class="p_val"><?= $frmdata->fullname?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Date</label>
               <p class="p_val"><?= $frmdata->date?></p>
            </div>
       </div>
    </div>
</div>