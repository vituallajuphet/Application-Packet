<?php $frmdata = json_decode($form_data); ?>
<div class="template_form" style="border:1px solid gray;padding:10px;">
   <div class="row">
     <div class="col-md-12">
                <h3 class="text-center fbold mt-3"><?=$form_name?></h3>
                <hr>
            </div>
   </div>
    <div class="container">
     <h4 style="font-weight:bold;">Employment Application</h4>
    <div class="row">
            <div class="col-md-12 mb-3">
                <span class="comp">Bethel Group LLC</span> is an equal opportunity employer and does not discriminate because of race, sex, color, religion, age, national origin, sexual orientation, disability, veteran status or ancestry. <span class="comp">Bethel Group LLC</span> intends to comply fully with applicable federal, state and local laws relative to equal opportunity.
            </div>   
            
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold"> Position </label>
                    <p class="p_val"><?= $frmdata->Position?></p>
                </div>
            </div>
             <div class="col-md-6">
              
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" >Last Name</label>
                    <p class="p_val"><?= $frmdata->Last_name?></p>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > First Name</label>
                    <p class="p_val"><?= $frmdata->First_name?></p>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > Street</label>
                    <p class="p_val"><?= $frmdata->Street?></p>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                     <label class="fbold" > City</label>
                    <p class="p_val"><?= $frmdata->City?></p>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > State</label>
                    <p class="p_val"><?= $frmdata->State?></p>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                  <label class="fbold" > Zip</label>
                    <p class="p_val"><?= $frmdata->Zip_Code?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > Phone</label>
                    <p class="p_val"><?= $frmdata->Phone?></p>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > Email Address</label>
                    <p class="p_val"><?= $frmdata->Email?></p>
                </div>
            </div>  
            <div class="col-md-12">
                <hr>
                <h4 class="mb-4">Driver's License</h4>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="fbold" > State</label>
                    <p class="p_val"><?= $frmdata->Driver_state?></p>
                </div>
            </div>  
            <div class="col-md-4">
                <div class="form-group">
                    <label class="fbold" > Number</label>
                    <p class="p_val"><?= $frmdata->Driver_Number?></p>
                </div>
            </div> 
            <div class="col-md-4">
                <div class="form-group">
                    <label class="fbold" > Expiry Date</label>
                    <p class="p_val"><?= $frmdata->Driver_date?></p>
                </div>
            </div> 
            <div class="col-md-4">
                <div class="form-group">
                    <label class="fbold" > How did you hear about us?</label>
                    <p class="p_val"><?= $frmdata->How_did_you_hear_about_us?></p>

                    <div class="div-others mt-3" style="">
                        <label class="fbold" > Others</label>
                        <p class="p_val"><?= $frmdata->Others?></p> 
                    </div>
                </div>
            </div> 
            <div class="col-md-8">
                <div class="form-group">
                        <label class="fbold" > Have you filled out an application here within the last year?</label>
                        <p class="p_val"><?= $frmdata->Have_you_filled?></p> 
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                        <label class="fbold" > If hired, can you provide documentation to show that you are legally eligible to work in the United States?</label>
                        <p class="p_val"><?= $frmdata->if_hired?></p>   
                </div>
            </div>  
            <div class="col-md-12">
                <p>Employment is contingent upon proof of employment verification.</p>
                <hr>
                <h4 class="mb-4 text-center" style="font-weight:bold;">Work Availability</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                          <label class="fbold" > Are you employed now?</label>
                        <p class="p_val"><?= $frmdata->is_employed?></p>   
                </div>
            </div>  
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > May we contact your current employer?</label>
                        <p class="p_val"><?= $frmdata->can_contact_employer?></p>     
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > Shifts Available </label>
                    <p class="p_val"><?= $frmdata->Shifts_Available?></p>   
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                   <label class="fbold" > Salary Expectation  </label>
                    <p class="p_val"><?= $frmdata->Salary_Expectation?></p>   
                </div>
            </div>  
            <div class="col-md-12">
                <h4>CLINICAL APPLICANTS (LPN/RN/ PT/RPT)</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label class="fbold" > Professional License  </label>
                     <p class="p_val"><?= $frmdata->Professional_License?></p>    
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="fbold" > Do you Poses any Certification or special skills  </label>
                     <p class="p_val"><?= $frmdata->Do_you_poses_any_certification?></p> 
                </div>
            </div>
            <div class="col-md-12">
                <h4>CNA/HHA/PCA APPLICANTS</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                     <label class="fbold" > Certification  </label>
                     <p class="p_val"><?= $frmdata->Certification?></p> 
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                      <label class="fbold" > Do you Poses any special skills or additional certifications  </label>
                     <p class="p_val"><?= $frmdata->Do_you_poses_any_special_skills?></p> 
                </div>

                <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Education Experience</h4>
                <h4 class="mb-3">High School</h4>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > Name of School</label>
                    <p class="p_val"><?= $frmdata->HS_name_of_school?></p> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label class="fbold" > Location of School</label>
                    <p class="p_val"><?= $frmdata->HS_location?></p>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label class="fbold" > Number of years completed</label>
                    <p class="p_val"><?= $frmdata->HS_number_years?></p> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                     <label class="fbold" > Did you graduate</label>
                    <p class="p_val"><?= $frmdata->hs_did_graduate?></p> 
                </div>
            </div>
            <div class="col-md-12">
                <h4 class="mb-3">College</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label class="fbold" > Name of School</label>
                    <p class="p_val"><?= $frmdata->Col_name_of_school?></p> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label class="fbold" > Location of School</label>
                    <p class="p_val"><?= $frmdata->Col_location?></p> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label class="fbold" > Number of years completed </label>
                    <p class="p_val"><?= $frmdata->Col_number_years?></p> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > Did you graduate </label>
                    <p class="p_val"><?= $frmdata->Col_did_graduate?></p>   
                </div>
            </div>
            <div class="col-md-12">
                <h4 class="mb-3">Vocational School</h4>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > Name of School </label>
                    <p class="p_val"><?= $frmdata->Voc_name_of_school?></p>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label class="fbold" > Location of School  </label>
                    <p class="p_val"><?= $frmdata->Voc_location?></p>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                       <label class="fbold" > Number of years completed </label>
                    <p class="p_val"><?= $frmdata->Voc_number_years?></p>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                     <label class="fbold" > Did you graduate </label>
                    <p class="p_val"><?= $frmdata->Voc_did_graduate?></p>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > Are you capable of performing in a reasonable manner, with or without a reasonable accommodation, the essential functions involved in the job or occupation for which you have applied? </label>
                    <p class="p_val"><?= $frmdata->Are_you_capable_of_performing?></p>   
                </div>
            </div>
            <div class="col-md-12">
                A description of the activities involved in such a job or occupation is attached.
                <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Veteran Status</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > Veteran of the U.S. Military Service? </label>
                    <p class="p_val"><?= $frmdata->Veteran_of_the_US_Military?></p>   
                </div>
                
            </div>  
            <div class="col-md-6 veterance-branch">
                <div class="form-group">
                    <label class="fbold" > Which branch?   </label>
                    <p class="p_val"><?= $frmdata->Veteran_branch?></p>   
                </div>
                
            </div>  
            <div class="col-md-12">
                  <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Language</h4>
                <h4>Spanish </h4>
            </div>  
            <div class="col-md-6">
                <div class="form-group">
                      <label class="fbold" > Other language   </label>
                    <p class="p_val"><?= $frmdata->Other_language?></p>    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label class="fbold" > Capabilities  </label>
                    <p class="p_val"><?= $frmdata->Capabilities?></p>    
                </div>
            </div>
            <div class="col-md-12">
            <hr>
               <h4 class="mb-3 text-center" style="font-weight:bold;">Sealed Record Notice</h4>
               <p> An Applicant for employment with a sealed record on file with the commissioner or probation may answer “No Record” with respect to any injury herein relative to prior arrests, criminal court appearances or convictions. In addition, any applicant for employment may answer “No Record” with respect to any injury relative to prior arrests, court appearances, and adjustments in all cases of delinquency or as a child in need of services which does not result in a complaint transfer to the superior court for criminal prosecution. Within the past five years, have you been convicted of a misdemeanor? (Applicants may answer “NO” with respect to a first conviction for drunkenness, simple assault, speeding, minor traffic violations, affray or disturbance of the peace)</p>
            </div>
            <div class="col-md-12">
                 <p class="p_val"><?= $frmdata->An_Applicant_for_employment_with_sealed?></p>    
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="fbold" > Have you been convicted of a felony?  </label>
                    <p class="p_val"><?= $frmdata->Have_you_been_Convicted?></p>    
                </div>
                <div class="form-group please_explain">
                    <label class="fbold" > Please explain </label>
                    <p class="p_val"><?= $frmdata->please_explain?></p>  
                </div>
                <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Emergency Contact</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label class="fbold" > Name  </label>
                    <p class="p_val"><?= $frmdata->Emergency_Name?></p>   
                </div>
            </div>
            <div class="col-md-6">  </div>
            <div class="col-md-6">
                <div class="form-group">
                       <label class="fbold" > Relationship  </label>
                      <p class="p_val"><?= $frmdata->Emergency_Relationship?></p>   
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label class="fbold" > Phone Number    </label>
                      <p class="p_val"><?= $frmdata->Emergency_Contact?></p>  
                </div>
            </div>
            <div class="col-md-12">
            <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Employment Verification</h4>
                <h4 class="mb-3">Employment Verification</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                     <label class="fbold" > Facility/Company name  </label>
                      <p class="p_val"><?= $frmdata->Facility_name?></p>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label class="fbold" > Job Title </label>
                      <p class="p_val"><?= $frmdata->Facility_job_title?></p>  
                </div>
            </div>
            <div class="col-md-12">
                <h4 class="mb-3">Employment Verification</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                      <label class="fbold" > From </label>
                      <p class="p_val"><?= $frmdata->Facility_date_from?></p>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > To </label>
                      <p class="p_val"><?= $frmdata->Facility_date_to?></p>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label class="fbold" > Supervisor’s contacts or Email  </label>
                      <p class="p_val"><?= $frmdata->Facility_email?></p>  
                </div>
            </div>
            <div class="col-md-12">
                  <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Professional References</h4>
                <p>Please list three individuals who you have worked with in the past that have knowledge of your skills, strengths and weaknesses and can describe what it is like working with you. (No Relatives)</p>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                     <label class="fbold" > Name </label>
                      <p class="p_val"><?= $frmdata->Professional_Name?></p>  
                </div>
            </div>
            <div class="col-md-6"> </div>
            <div class="col-md-6">
                <div class="form-group">
                   <label class="fbold" > Phone Number   </label>
                      <p class="p_val"><?= $frmdata->Professional_Contact?></p>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label class="fbold" > Occupation</label>
                      <p class="p_val"><?= $frmdata->Professional_Occupation?></p> 
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                     <label class="fbold" > Name </label>
                      <p class="p_val"><?= $frmdata->Professional_Name2?></p>  
                </div>
            </div>
            <div class="col-md-6"> </div>
            <div class="col-md-6">
                <div class="form-group">
                     <label class="fbold" > Phone Number   </label>
                      <p class="p_val"><?= $frmdata->Professional_Contact2?></p>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > Occupation</label>
                      <p class="p_val"><?= $frmdata->Professional_Occupation2?></p> 
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                   <label class="fbold" > Name </label>
                      <p class="p_val"><?= $frmdata->Professional_Name3?></p>  
                </div>
            </div>
            <div class="col-md-6"> </div>
            <div class="col-md-6">
                <div class="form-group">
                   <label class="fbold" > Phone Number   </label>
                      <p class="p_val"><?= $frmdata->Professional_Contact3?></p>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" > Occupation</label>
                      <p class="p_val"><?= $frmdata->Professional_Occupation3?></p> 
                </div>
            </div>
            <div class="col-md-12">
            <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Authorization</h4>
                
                <div class="form-check">
                    <span style="color:#73ca73;display:inline-block;margin-right:6px;"><i class="fa fa-check"></i></span> I hereby certify that the information submitted within this document is accurate. I understand that this document is not a contract for employment with <span class="comp">Bethel Group LLC</span> for either employment or for providing of any benefit. Any offers of employment are made conditional upon the verification of information provided though this document and a supplemental inquiry. I understand that any falsification on this initial or supplemental documents will result in disqualification for employment or termination of services. I understand that as a requirement of employment with <span class="comp">Bethel Group LLC</span> verification of education, including any degrees or certification programs and state licensure as well as criminal background screen are required for all applicants.
                     </label> 
                </div>
                <div class="form-check mt-3">
                     <span style="color:#73ca73;display:inline-block;margin-right:6px;"><i class="fa fa-check"></i></span> I hereby authorize all previous educational institutions, certification programs, and state licensing facilities to release my information to <span class="comp">Bethel Group LLC</span>.
                     </label> 
                </div>
                <div class="form-check mt-3">
                   <span style="color:#73ca73;display:inline-block;margin-right:6px;"><i class="fa fa-check"></i></span> I understand that some client facilities may require drug screening and that my Recruitment Specialist will inform me of these requirements before I accept an assignment at one of these facilities.
                     </label> 
                </div>
                <div class="form-check mt-3">
                    <span style="color:#73ca73;display:inline-block;margin-right:6px;"><i class="fa fa-check"></i></span> I hereby authorize my current and previous employers to release information regarding my work performance to <span class="comp">Bethel Group LLC</span>.
                     </label> 
                </div>
                <div class="form-check mt-3">
                    <span style="color:#73ca73;display:inline-block;margin-right:6px;"><i class="fa fa-check"></i></span> Upon termination, I authorize the release of reference information regarding my work performance. I release all such employers from any liability for issuing this information to <span class="comp">Bethel Group LLC</span>. I understand and agree that if I am offered employment by <span class="comp">Bethel Group LLC</span>, it will be on an at-will basis. This means that either <span class="comp">Bethel Group LLC</span> or I may terminate the employment relationship at any time, for any reason, with or without cause or notice. I understand Bethel Group LLC is a temporary agency, and as such <span class="comp">Bethel Group LLC</span> cannot promise the availability of requested work unless different contract signed.
                     </label> 
                </div>
                <div class="form-check mt-3">
                    <span style="color:#73ca73;display:inline-block;margin-right:6px;"><i class="fa fa-check"></i></span> I agree to conform to all rules and regulations of <span class="comp">Bethel Group LLC</span> as they presently exist or are later modified.
                     </label> 
                </div>
                <div class="form-check mt-3">
                  <span style="color:#73ca73;display:inline-block;margin-right:6px;"><i class="fa fa-check"></i></span> I understand that I am not required to provide my social security number. I understand that if I choose to provide my social security number, it will be used in connection with the background checks described above, including verification of my state licensure.
                     </label> 
                </div>
                <div class="form-check mt-3">
                    <span style="color:#73ca73;display:inline-block;margin-right:6px;"><i class="fa fa-check"></i></span> I authorize <span class="comp">Bethel Group LLC</span> to release any employment records, including health records and my social security number (if provided) submitted to <span class="comp">Bethel Group LLC</span> to any client of <span class="comp">Bethel Group LLC</span> for consideration of employment at customer facility. I understand that <span class="comp">Bethel Group LLC</span> is not responsible for any actions or omissions of its clients, including without limitation any misuse of my personal information by such clients, or any failure by such clients to protect and keep confidential my personal information.
                     </label> 
                </div>
                <div class="form-check mt-3">
                    <span style="color:#73ca73;display:inline-block;margin-right:6px;"><i class="fa fa-check"></i></span> I hereby release <span class="comp">Bethel Group LLC</span> from any and all liability arising out of such clients’ use or possession of my personal information.
                     </label> 
                </div>
            </div>
            <div class="col-md-12 mb-4">

            </div>
            <div class="col-md-6">
                <div class="form-group">
                        <label class="fbold" > Name of Applicant </label>
                      <p class="p_val"><?= $frmdata->Applicant_name?></p> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                         <label class="fbold" > Date </label>
                      <p class="p_val"><?= $frmdata->applicant_date?></p>  
                </div>
            </div>
            <div class="col-md-12">
                <p><span class="comp">Bethel Group LLC</span> is committed to respectful and equal treatment for all employees. This commitment includes non-discrimination towards applicants and employees on the grounds of race, color, creed, religion, age, sex, disability, national origin, ancestry, sexual orientation, marital status, or with regard to public assistance, or union or non-union status. This prevails throughout the employment relationship, including, but not limited to recruitment, selection, training, transfer, compensation, promotion, demotion, layoff and termination. Our goal is to provide staffing services to our clients in a manner that is fast but still maintains an outstanding level of quality. In order to accomplish this, we utilize different types of technology on a daily basis. These technologies include, but are not limited to: text messages, newsletters, and automated voice recordings. The nature of many of our job opportunities are last-minute, so in order to make sure you receive notification in the most timely fashion possible, please select the method of contact you prefer:</p>
            </div>


    </div>

    </div>
</div>