<form id="submit_form" action="<?= base_url("employee/submit_form/certified_nursing_checklist")?>" method="post">
    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span class="req">*</span> Name </label>
                    <input  name="Name" type="text" placeholder="Enter name here" required class="form-control">
                </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                    <label class="control-label"><span class="req">*</span> Date  </label>
                    <input  name="date" type="date" placeholder="Enter date here" required class="form-control">
                </div>
            </div> 
            <div class="col-md-12">
                <span class="comp">Please check the column that applies to you skill level:</span><br>
                [0] Not Experience <br> 
                [1] Need Direction (< 6months experience) <br>
                [2] Minimal assistance needed (< 1 year experience) <br>
                [3] Very Competent (>1 year experience) <br>
            </div> 
            <div class="col-md-12">
                 <hr>
                         <h4 class="text-center"> Certified Nursing Assistant Skills Checklist </h4>
                <hr>
            </div> 
            <div class="col-md-12">
                <table class="table table-bordered form-table">
                    <tbody>
                        <?php
                            $arr = [
                                "Assist with admission of Patient",
                                "Assist with Ambulation",
                                "Assist with Bedpan/Urinal/Commode",
                                "Backrubs/Back Care",
                                "Basic Medical Asepsis",
                                "Bathing: Complete/Partial/Sitz ",
                                "Bed cradles",
                                "Bed making: occupied/unoccupied/surgical ",
                                "Bed rails: when/how to use them ",
                                "Cast care ",
                                "Charting/checklists/graphic charts ",
                                "Compresses: warm/ cold ",
                                "Coughing/deep breathing ",
                                "CPR",
                                "Crutch walking: Assist patient ",
                                "Dangling patient ",
                                "Dietary restrictions ",
                                "Discharge of patient ",
                                "Documentation: vital signs and I&O ",
                                "Documentation of patient belongings ",
                                "Douches ",
                                "Elastic stockings (TED hose) ",
                                "Elimination check and record ",
                                "Enemas, rectal tubes, Harris flush ",
                                "Feed patient ",
                                "Foley catheter care and emptying ",
                                "Footboard ",
                                "Hand Hygiene  ",
                                "Height: measure and record ",
                                "Intake and output measure and record ",
                                "Infection Control: Standard Universal Precautions ",
                                "Infection Control: Reverse Isolation" ,
                                "Infection Control: TB/Airborne Precautions " ,
                                "Infection Control: MRSA/VRE Precautions " ,
                                "Nourishment for Patients " ,
                                "Observing Patients " ,
                                "Oral hygiene " ,
                                "Patient safety standards/Precautions " ,
                                "Perineal Care " ,
                                "Positioning patients " ,
                                "Prosthetic devices (dentures, contact lenses, etc.)  " ,
                                "Range of motions exercises " ,
                                "Reporting changes of patient condition " ,
                                "Reporting/recording of patient’s pain level " ,
                                "Restraints " ,
                                "Skin Care  " ,
                                "Specimen Collection: Routine Urine  " ,
                                "Specimen Collection: Clean catch   " ,
                                "Specimen Collection: 12 & 24 hour urine specimen  " ,
                                "Specimen Collection: Stool " ,
                                "Specimen Collection: Culture " ,
                                "Specimen Collection: Sputum " ,
                                "Specimen Collection: From foley catheter " ,
                                "Vital signs-manual  " ,
                                "Dynamap  " ,
                                "Computerized charting ",
                                "Suicide/Homicide precaution  ",
                                "Sirst Aid/CPR  "
                            ];

                            for ($i=0; $i < count($arr) ; $i++) { ?>
                                <tr>
                                    <td style="text-transform:uppercase;"> <?=$arr[$i]?> </td>
                                    <td><input type="radio" value="3" name="check<?=($i+1);?>" checked> <label>3</label></td>
                                    <td><input type="radio" value="2" name="check<?=($i+1);?>"><label >2</label></td>
                                    <td><input type="radio" value="1" name="check<?=($i+1);?>"><label >1</label></td>
                                    <td><input type="radio" value="0" name="check<?=($i+1);?>"><label >0</label></td>
                                </tr>
                            <?php  }  ?>
                        
                    </tbody>
                </table>
                <hr>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span class="req">*</span> Applicant Name  </label>
                    <input  name="applicant_name" type="text" placeholder="Enter name here" required class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span class="req">*</span> Date  </label>
                    <input  name="applicant_date" type="date" placeholder="Enter date here" required class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                  <div id="form_recaptcha" class="required mt-4"></div>
                <hr>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
    </div>
</form>