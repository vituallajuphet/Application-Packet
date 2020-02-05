<?php $frmdata = json_decode($form_data);
?>
<div class="template_form" style="border:1px solid gray;padding:10px;">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="text-center fbold mt-3"><?=$form_name?></h3>
                <hr>
            </div>

            <div class="col-md-6">
                <label class="fbold" for="">Name</label>
               <p class="p_val"><?= $frmdata->Name?></p>
            </div>
            <div class="col-md-6">
                <label class="fbold" for="">Date</label>
               <p class="p_val"><?= $frmdata->date?></p>
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
                            $arr2 = ["Name", "date", "applicant_name", "applicant_date", "g-recaptcha-response"];
                            $c = 0;
                            foreach ($frmdata as $key => $value) {
                               if(in_array($key, $arr2)){
                                   continue;
                               }
                               else{  ?>
                                 
                                      <tr>
                                        <td style="text-transform:uppercase;"> <?=$arr[$c]?> </td>
                                        <td><input disabled type="radio" value="3" name="check<?=($c+1);?>" <?= $value == 3 ? 'checked':'' ?> > <label>3</label></td>
                                        <td><input disabled type="radio" <?= $value ==2 ? 'checked':'' ?>  value="2" name="check<?=($c+1);?>"><label >2</label></td>
                                        <td><input disabled type="radio" <?= $value == 1? 'checked':'' ?>  value="1" name="check<?=($c+1);?>"><label >1</label></td>
                                        <td><input disabled type="radio" <?= $value == 0 ? 'checked':'' ?>  value="0" name="check<?=($c+1);?>"><label >0</label></td>
                                    </tr>
                                   <?php $c++; 
                               }
                            }
                        ?>
                   
                        
                    </tbody>
                </table>
                <hr>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fbold" for="">Applicant Name</label>
                   <p class="p_val"><?= $frmdata->applicant_name?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                       <label class="fbold" for="">Date</label>
                   <p class="p_val"><?= $frmdata->applicant_date?></p>
                </div>
            </div>
       </div>
    </div>
</div>