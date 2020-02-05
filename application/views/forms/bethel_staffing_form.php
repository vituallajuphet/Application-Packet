<form id="submit_form" action="<?= base_url("employee/submit_form/bethel_staffing")?>" method="post">
     <h4 style="font-weight:bold;">Employment Application</h4>
    <div class="row">
            <div class="col-md-12 mb-3">
                <span class="comp">Bethel Group LLC</span> is an equal opportunity employer and does not discriminate because of race, sex, color, religion, age, national origin, sexual orientation, disability, veteran status or ancestry. <span class="comp">Bethel Group LLC</span> intends to comply fully with applicable federal, state and local laws relative to equal opportunity.
            </div>   
            
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color: #d7744e">*</span> Position </label>
                    <input  name="Position" type="text" placeholder="Enter Position here" required class="form-control">
                </div>
            </div>
             <div class="col-md-6">
              
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color: #d7744e">*</span> Last Name</label>
                    <input name="Last_name" placeholder="Enter Last Name here" type="text" required class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color: #d7744e">*</span> First Name</label>
                    <input name="First_name" placeholder="Enter First Name here" type="text" required class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color: #d7744e">*</span> Street</label>
                    <input name="Street" type="text" placeholder="Enter Street here" required class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color: #d7744e">*</span> City</label>
                    <input name="City" type="text"  placeholder="Enter City here" required class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color: #d7744e">*</span> State</label>
                    <input name="State" type="text" placeholder="Enter State here"  required class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color: #d7744e">*</span> Zip</label>
                    <input name="Zip_Code" type="text" placeholder="Enter Zip here" required class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color: #d7744e">*</span> Phone</label>
                    <input name="Phone" type="text" placeholder="Enter Phone here"  required class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color: #d7744e">*</span> Email Address</label>
                    <input name="Email" type="email" placeholder="Enter Email Address here" required class="form-control">
                </div>
            </div>  
            <div class="col-md-12">
                <hr>
                <h4 class="mb-4">Driver's License</h4>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">State</label>
                    <input name="Driver_state" placeholder="Enter State" type="text" class="form-control">
                </div>
            </div>  
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Number </label>
                    <input name="Driver_Number" placeholder="Enter Number" type="text" class="form-control">
                </div>
            </div> 
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Expiry Date</label>
                    <input name="Driver_date" type="date" class="form-control">
                </div>
            </div> 
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">How did you hear about us?</label>
                    <select name="How_did_you_hear_about_us" class="form-control">
                        <option value="">Please Select</option>
                        <option value="Relative">Relative</option>
                        <option value="Internet">Internet</option>
                        <option value="Employment Agency">Employment Agency</option>
                        <option value="Friend">Friend</option>
                        <option value="Other">Other</option>
                    </select>

                    <div class="div-others mt-3" style="display:none;">
                        <label class="control-label">Others</label>
                         <input required name="Others" placeholder="Enter here" type="text" class="form-control">
                    </div>
                </div>
            </div> 
            <div class="col-md-8">
                <div class="form-group">
                    <label class="control-label"> Have you filled out an application here within the last year? </label><br>
                       <div class="form-check form-check-inline">
                            <input required checked class="form-check-input" type="radio" name="Have_you_filled" id="Have_you_filled1" value="Yes">
                            <label class="form-check-label" for="Have_you_filled1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio"  name="Have_you_filled" id="Have_you_filled2" value="No">
                            <label class="form-check-label" for="Have_you_filled2">No</label>
                        </div>     
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> If hired, can you provide documentation to show that you are legally eligible to work in the United States? </label><br>
                       <div class="form-check form-check-inline">
                            <input required checked class="form-check-input" type="radio" name="if_hired" id="if_hired1" value="Yes">
                            <label class="form-check-label" for="if_hired1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio"  name="if_hired" id="if_hired2" value="No">
                            <label class="form-check-label" for="if_hired2">No</label>
                        </div>     
                </div>
            </div>  
            <div class="col-md-12">
                <p>Employment is contingent upon proof of employment verification.</p>
                <hr>
                <h4 class="mb-4 text-center" style="font-weight:bold;">Work Availability</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Are you employed now? </label><br>
                       <div class="form-check form-check-inline">
                            <input required checked class="form-check-input" type="radio" name="is_employed" id="is_employed" value="Yes">
                            <label class="form-check-label" for="is_employed">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio"  name="is_employed" id="is_employed2" value="No">
                            <label class="form-check-label" for="is_employed2">No</label>
                        </div>     
                </div>
            </div>  
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> May we contact your current employer?  </label><br>
                       <div class="form-check form-check-inline">
                            <input required checked class="form-check-input" type="radio" name="can_contact_employer" id="can_contact_employer" value="Yes">
                            <label class="form-check-label" for="can_contact_employer">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio"  name="can_contact_employer" id="can_contact_employer2" value="No">
                            <label class="form-check-label" for="can_contact_employer2">No</label>
                        </div>     
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Shifts Available </label><br>
                    <select name="Shifts_Available" class="form-control">
                        <option value="7am - 3pm">7am - 3pm</option>
                        <option value="3pm - 11pm">3pm - 11pm</option>
                        <option value="11pm - 7am">11pm - 7am</option>
                    </select>    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Salary Expectation </label><br>
                      <input name="Salary_Expectation" placeholder="Enter Amount here" type="text" class="form-control"> 
                </div>
            </div>  
            <div class="col-md-12">
                <h4>CLINICAL APPLICANTS (LPN/RN/ PT/RPT)</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Professional License</label><br>
                      <input name="Professional_License" placeholder="Enter License here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="poses"class="control-label">Do you Poses any Certification or special skills </label><br>
                      <textarea style="width:100%;height:100px;" name="Do_you_poses_any_certification" id="poses" class="form-class" placeholder="Enter details here"></textarea> 
                </div>
            </div>
            <div class="col-md-12">
                <h4>CNA/HHA/PCA APPLICANTS</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Certification</label><br>
                      <input name="Certification" placeholder="Enter Certification here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="poses2"class="control-label"> Do you Poses any special skills or additional certifications  </label><br>
                      <textarea style="width:100%;height:100px;" name="Do_you_poses_any_special_skills" id="poses2" class="form-class"  placeholder="Enter details here"></textarea> 
                </div>

                <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Education Experience</h4>
                <h4 class="mb-3">High School</h4>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Name of School </label><br>
                      <input name="HS_name_of_school" placeholder="Enter Name here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Location of School  </label><br>
                      <input name="HS_location" placeholder="Enter Location here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Number of years completed  </label><br>
                      <input name="HS_number_years" placeholder="Enter years here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Did you graduate   </label><br>
                      <div class="form-check form-check-inline">
                            <input required checked class="form-check-input" type="radio" name="hs_did_graduate" id="hs_did_graduate" value="Yes">
                            <label class="form-check-label" for="hs_did_graduate">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio"  name="hs_did_graduate" id="hs_did_graduate2" value="No">
                            <label class="form-check-label" for="hs_did_graduate2">No</label>
                        </div>  
                </div>
            </div>
            <div class="col-md-12">
                <h4 class="mb-3">College</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Name of School </label><br>
                      <input name="Col_name_of_school" placeholder="Enter Name here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Location of School  </label><br>
                      <input name="Col_location" placeholder="Enter Location here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Number of years completed  </label><br>
                      <input name="Col_number_years" placeholder="Enter years here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Did you graduate   </label><br>
                      <div class="form-check form-check-inline">
                            <input required checked class="form-check-input" type="radio" name="Col_did_graduate" id="Col_did_graduate" value="Yes">
                            <label class="form-check-label" for="Col_did_graduate">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio"  name="Col_did_graduate" id="Col_did_graduate2" value="No">
                            <label class="form-check-label" for="Col_did_graduate2">No</label>
                        </div>  
                </div>
            </div>
            <div class="col-md-12">
                <h4 class="mb-3">Vocational School</h4>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Name of School </label><br>
                      <input name="Voc_name_of_school" placeholder="Enter Name here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Location of School  </label><br>
                      <input name="Voc_location" placeholder="Enter Location here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Number of years completed  </label><br>
                      <input name="Voc_number_years" placeholder="Enter years here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Did you graduate   </label><br>
                      <div class="form-check form-check-inline">
                            <input required checked class="form-check-input" type="radio" name="Voc_did_graduate" id="Voc_did_graduate" value="Yes">
                            <label class="form-check-label" for="Col_did_graduate">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio"  name="Voc_did_graduate" id="Voc_did_graduate2" value="No">
                            <label class="form-check-label" for="Voc_did_graduate2">No</label>
                        </div>  
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Are you capable of performing in a reasonable manner, with or without a reasonable accommodation, the essential functions involved in the job or occupation for which you have applied?  </label><br>
                      <div class="form-check form-check-inline">
                            <input required checked class="form-check-input" type="radio" name="Are_you_capable_of_performing" id="Are_you_capable_of_performing" value="Yes">
                            <label class="form-check-label" for="Are_you_capable_of_performing">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio"  name="Are_you_capable_of_performing" id="Are_you_capable_of_performing2" value="No">
                            <label class="form-check-label" for="Are_you_capable_of_performing2">No</label>
                        </div>  
                </div>
            </div>
            <div class="col-md-12">
                A description of the activities involved in such a job or occupation is attached.
                <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Veteran Status</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Veteran of the U.S. Military Service?   </label><br>
                      <div class="form-check form-check-inline">
                            <input required  class="form-check-input" type="radio" name="Veteran_of_the_US_Military" id="Veteran_of_the_US_Military" value="Yes">
                            <label class="form-check-label" for="Veteran_of_the_US_Military">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input checked required class="form-check-input" type="radio"  name="Veteran_of_the_US_Military" id="Veteran_of_the_US_Military2" value="No">
                            <label class="form-check-label" for="Veteran_of_the_US_Military2">No</label>
                        </div>  
                </div>
                
            </div>  
            <div class="col-md-6 veterance-branch" style="display:none;">
                <div class="form-group">
                    <label class="control-label"> Which branch?    </label><br>
                    <input name="Veteran_branch" placeholder="Enter branch here" type="text" class="form-control"> 
                </div>
                
            </div>  
            <div class="col-md-12">
                  <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Language</h4>
                <h4>Spanish </h4>
            </div>  
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Other language  </label><br>
                      <input name="Other_language" placeholder="Enter language here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Capabilities   </label><br>
                      <input name="Capabilities" placeholder="Enter language here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-12">
            <hr>
               <h4 class="mb-3 text-center" style="font-weight:bold;">Sealed Record Notice</h4>
               <p> An Applicant for employment with a sealed record on file with the commissioner or probation may answer “No Record” with respect to any injury herein relative to prior arrests, criminal court appearances or convictions. In addition, any applicant for employment may answer “No Record” with respect to any injury relative to prior arrests, court appearances, and adjustments in all cases of delinquency or as a child in need of services which does not result in a complaint transfer to the superior court for criminal prosecution. Within the past five years, have you been convicted of a misdemeanor? (Applicants may answer “NO” with respect to a first conviction for drunkenness, simple assault, speeding, minor traffic violations, affray or disturbance of the peace)</p>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                      <div class="form-check form-check-inline">
                            <input required checked class="form-check-input" type="radio" name="An_Applicant_for_employment_with_sealed" id="Are_you_capable_of_performing" value="Yes">
                            <label class="form-check-label" for="An_Applicant_for_employment_with_sealed">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio"  name="An_Applicant_for_employment_with_sealed" id="An_Applicant_for_employment_with_sealed2" value="No">
                            <label class="form-check-label" for="An_Applicant_for_employment_with_sealed2">No</label>
                        </div>  
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                       <label class="control-label"> Have you been convicted of a felony?    </label><br>
                      <div class="form-check form-check-inline">
                            <input required  class="form-check-input" type="radio" name="Have_you_been_Convicted" id="Have_you_been_Convicted" value="Yes">
                            <label class="form-check-label" for="Have_you_been_Convicted">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input checked required class="form-check-input" type="radio"  name="Have_you_been_Convicted" id="Have_you_been_Convicted2" value="No">
                            <label class="form-check-label" for="Have_you_been_Convicted2">No</label>
                        </div>  
                </div>
                <div class="form-group please_explain" style="display:none;">
                    <label class="control-label"> Please explain  </label><br>
                    <textarea style="width:100%;height:100px;" name="please_explain" id="please_explain" class="form-class" placeholder="Enter details here"></textarea> 
                </div>
                <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Emergency Contact</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Name </label><br>
                      <input name="Emergency_Name" placeholder="Enter Name here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">  </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Relationship  </label><br>
                      <input name="Emergency_Relationship" placeholder="Enter Relationship here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Phone Number  </label><br>
                      <input name="Emergency_Contact" placeholder="Enter Number here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-12">
            <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Employment Verification</h4>
                <h4 class="mb-3">Employment Verification</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Facility/Company name </label><br>
                      <input name="Facility_name" placeholder="Enter Name here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Job Title  </label><br>
                      <input name="Facility_job_title" placeholder="Enter Job Title here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-12">
                <h4 class="mb-3">Employment Verification</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> From </label><br>
                      <input name="Facility_date_from" placeholder="Enter date here" type="date" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> To </label><br>
                      <input name="Facility_date_to" placeholder="Enter date here" type="date" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Supervisor’s contacts or Email  </label><br>
                      <input name="Facility_email" placeholder="Enter contact here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-12">
                  <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Professional References</h4>
                <p>Please list three individuals who you have worked with in the past that have knowledge of your skills, strengths and weaknesses and can describe what it is like working with you. (No Relatives)</p>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Name </label><br>
                      <input name="Professional_Name" placeholder="Enter Name here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6"> </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Phone Number  </label><br>
                      <input name="Professional_Contact" placeholder="Enter Number here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Occupation  </label><br>
                      <input name="Professional_Occupation" placeholder="Enter Occupation here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Name </label><br>
                      <input name="Professional_Name2" placeholder="Enter Name here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6"> </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Phone Number  </label><br>
                      <input name="Professional_Contact2" placeholder="Enter Number here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Occupation  </label><br>
                      <input name="Professional_Occupation2" placeholder="Enter Occupation here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Name </label><br>
                      <input name="Professional_Name3" placeholder="Enter Name here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6"> </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Phone Number  </label><br>
                      <input name="Professional_Contact3" placeholder="Enter Number here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"> Occupation  </label><br>
                      <input name="Professional_Occupation3" placeholder="Enter Occupation here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-12">
            <hr>
                <h4 class="mb-3 text-center" style="font-weight:bold;">Authorization</h4>
                
                <div class="form-check">
                     <input type="checkbox" required class="form-check-input" name="Authorization1" id="Authorization1">
                     <label class="form-check-label" for="Authorization1">I hereby certify that the information submitted within this document is accurate. I understand that this document is not a contract for employment with <span class="comp">Bethel Group LLC</span> for either employment or for providing of any benefit. Any offers of employment are made conditional upon the verification of information provided though this document and a supplemental inquiry. I understand that any falsification on this initial or supplemental documents will result in disqualification for employment or termination of services. I understand that as a requirement of employment with <span class="comp">Bethel Group LLC</span> verification of education, including any degrees or certification programs and state licensure as well as criminal background screen are required for all applicants.
                     </label> 
                </div>
                <div class="form-check mt-3">
                     <input type="checkbox" required name="Authorization2" class="form-check-input" id="Authorization2">
                     <label class="form-check-label" for="Authorization2">I hereby authorize all previous educational institutions, certification programs, and state licensing facilities to release my information to <span class="comp">Bethel Group LLC</span>.
                     </label> 
                </div>
                <div class="form-check mt-3">
                     <input type="checkbox" required name="Authorization3" class="form-check-input" id="Authorization3">
                     <label class="form-check-label" for="Authorization3">I understand that some client facilities may require drug screening and that my Recruitment Specialist will inform me of these requirements before I accept an assignment at one of these facilities.
                     </label> 
                </div>
                <div class="form-check mt-3">
                     <input type="checkbox" required name="Authorization4" class="form-check-input" id="Authorization4">
                     <label class="form-check-label" for="Authorization4">I hereby authorize my current and previous employers to release information regarding my work performance to <span class="comp">Bethel Group LLC</span>.
                     </label> 
                </div>
                <div class="form-check mt-3">
                     <input type="checkbox" required name="Authorization5" class="form-check-input" id="Authorization5">
                     <label class="form-check-label" for="Authorization5">Upon termination, I authorize the release of reference information regarding my work performance. I release all such employers from any liability for issuing this information to <span class="comp">Bethel Group LLC</span>. I understand and agree that if I am offered employment by <span class="comp">Bethel Group LLC</span>, it will be on an at-will basis. This means that either <span class="comp">Bethel Group LLC</span> or I may terminate the employment relationship at any time, for any reason, with or without cause or notice. I understand Bethel Group LLC is a temporary agency, and as such <span class="comp">Bethel Group LLC</span> cannot promise the availability of requested work unless different contract signed.
                     </label> 
                </div>
                <div class="form-check mt-3">
                     <input type="checkbox" required name="Authorization6" class="form-check-input" id="Authorization6">
                     <label class="form-check-label" for="Authorization6">I agree to conform to all rules and regulations of <span class="comp">Bethel Group LLC</span> as they presently exist or are later modified.
                     </label> 
                </div>
                <div class="form-check mt-3">
                     <input type="checkbox" required name="Authorization7" class="form-check-input" id="Authorization7">
                     <label class="form-check-label" for="Authorization7">I understand that I am not required to provide my social security number. I understand that if I choose to provide my social security number, it will be used in connection with the background checks described above, including verification of my state licensure.
                     </label> 
                </div>
                <div class="form-check mt-3">
                     <input type="checkbox" required name="Authorization8" class="form-check-input" id="Authorization7">
                     <label class="form-check-label" for="Authorization8">I authorize <span class="comp">Bethel Group LLC</span> to release any employment records, including health records and my social security number (if provided) submitted to <span class="comp">Bethel Group LLC</span> to any client of <span class="comp">Bethel Group LLC</span> for consideration of employment at customer facility. I understand that <span class="comp">Bethel Group LLC</span> is not responsible for any actions or omissions of its clients, including without limitation any misuse of my personal information by such clients, or any failure by such clients to protect and keep confidential my personal information.
                     </label> 
                </div>
                <div class="form-check mt-3">
                     <input type="checkbox" required name="Authorization8" class="form-check-input" id="Authorization7">
                     <label class="form-check-label" for="Authorization8">I hereby release <span class="comp">Bethel Group LLC</span> from any and all liability arising out of such clients’ use or possession of my personal information.
                     </label> 
                </div>
            </div>
            <div class="col-md-12 mb-4">

            </div>
            <div class="col-md-6">
                <div class="form-group">
                        <label class="control-label"><span style="color: #d7744e">*</span> Name of Applicant  </label><br>
                        <input name="Applicant_name" required placeholder="Enter name here" type="text" class="form-control"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                        <label class="control-label"><span style="color: #d7744e">*</span> Date  </label><br>
                        <input name="applicant_date" required placeholder="Enter date here" type="date" class="form-control"> 
                </div>
            </div>
            <div class="col-md-12">
                <p><span class="comp">Bethel Group LLC</span> is committed to respectful and equal treatment for all employees. This commitment includes non-discrimination towards applicants and employees on the grounds of race, color, creed, religion, age, sex, disability, national origin, ancestry, sexual orientation, marital status, or with regard to public assistance, or union or non-union status. This prevails throughout the employment relationship, including, but not limited to recruitment, selection, training, transfer, compensation, promotion, demotion, layoff and termination. Our goal is to provide staffing services to our clients in a manner that is fast but still maintains an outstanding level of quality. In order to accomplish this, we utilize different types of technology on a daily basis. These technologies include, but are not limited to: text messages, newsletters, and automated voice recordings. The nature of many of our job opportunities are last-minute, so in order to make sure you receive notification in the most timely fashion possible, please select the method of contact you prefer:</p>

                <div id="form_recaptcha" class="required mt-4"></div>

                <button type="submit" class="btn btn-success mt-5">Submit</button>
            </div>


    </div>
</form>