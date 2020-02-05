<form id="submit_form" action="<?= base_url("employee/submit_form/fcra_authorization")?>" method="post">
    <div class="row">
            <div class="col-md-12">
            <h4 class="text-center mb-3"  style="font-weight:bold;">FCRA Authorization to Obtain a Consumer Report (Background/Credit Check)</h4>

              <p>Pursuant to the federal Fair Credit Reporting Act, I hereby authorize <span class="comp">Bethel Group LLC</span> and its designated agents and representatives to conduct a comprehensive review of my background through a consumer report and/or an investigative consumer report to be generated for employment, promotion, reassignment or retention as an employee. I understand that the scope of the consumer report/investigative consumer report may include, but is not limited to, the following areas: verification of Social Security number; current and previous residences; employment history, including all personnel files; education; references; credit history and reports; criminal history, including records from any criminal justice agency in any or all federal, state or county jurisdictions; birth records; motor vehicle records, including traffic citations and registration; and any other public records. </p>

                <input required type="checkbox" name="agreement"  style="-webkit-appearance:checkbox;"> I <input type="text" name="name" required placeholder="Enter name here" class="f-name"> , authorize the complete release of these records or data pertaining to me that an individual, company, firm, corporation or public agency may have. I hereby authorize and request any present or former employer, school, police department, financial institution or other persons having personal knowledge of me to furnish <input type="text" name="company" required placeholder="Enter company name here" class="f-name"> or its designated agents with any and all information in their possession regarding me in connection with an application of employment. I am authorizing that a photocopy of this authorization be accepted with the same authority as the original.</p>

                <p>   <input required type="checkbox" name="agreement2"  style="-webkit-appearance:checkbox;"> I understand that, pursuant to the federal Fair Credit Reporting Act, if any adverse action is to be taken based upon the consumer report, a copy of the report and a summary of the consumer’s rights will be provided to me.</p>
            </div>   
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Applicant Name</label>
                    <input  name="fullname" type="text" required class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Date</label>
                    <input name="date" type="date" required class="form-control">
                </div>
            </div> 
            <div class="col-md-12">
            <hr>
                <div id="form_recaptcha" class="required mt-4 mb-4"></div>

                <div class="form-group">
                
                    <button class="btn btn-success">Submit</button>
                </div>
                
            </div> 
    </div>
</form>