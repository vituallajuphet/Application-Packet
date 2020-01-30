
<form action="#" @submit.prevent="submitForm()" method="post">
     <h4>Employee Attendance Policy</h4>
    <div class="row">
            <div class="col-md-12">
               Absenteeism generally refers to a circumstance in which an employee is habitually absent or not present at work during a normally scheduled work hours. The employee’s absences may be either scheduled or unscheduled. Scheduled include: medical appointments, military service, jury duty, funerals etc, while unscheduled typically as a result of illness, family emergencies, transportation emergencies, family member illness and/or death, and household emergencies such as flooding. Excused absence is one which is scheduled and approved by the employee’s manager in advance. Unscheduled absences for illness, family member illness or death, and similar unanticipated circumstances may also be treated as “excused.” Typically there is no disciplinary consequence for an excused absence, unless the employee is habitually absent.
            <span class="comp">Bethel Group LLC</span> has a ZERO TOLERANCE POLICY for absenteeism (without a doctor’s note) during the first 30 days of employment or a minimum of 100 hours worked. Any violation of this, will result in the termination of your employment with <span class="comp">Bethel Group LLC</span>.
            If the employee fails to notify the Bethel Group office at least 24 hours prior to the start of their scheduled shift, the following will be counted towards the employee:
                <br><br>
                <ul class="" style="list-style-type: decimal">
                   <li>Absence- One (1) absence is equal to one (1) occurrence (multiple consecutive days equals one occurrence).</li>
                   <li>Tardiness- One (1) tardy is equal to one half (1/2) occurrence.</li>
                    <li>No Call No Show- Immediate final written warning. </li>
                </ul>
                
                <ul style="list-style-type: decimal">
                    <li>First written warning One and a half occurrences in a thirty-day period, two occurrences in a sixty-day period or four occurrences in six months will be the basis for a first written warning. The first written warning is the first step in the formal discipline process and serves to notify the employee that he/she is in violation of this company policy. The first written warning will remain active and considered for progressive disciplinary purposes for one year.</li>

                    <li>Final written warning The next one and a half occurrences in a thirty-day period, two occurrences in a sixty-day period or four occurrences in six months will result in a final written warning. The final written warning puts the employee on formal notice that the next step in the discipline process is termination. The final written warning will remain active and considered for progressive disciplinary purposes for one year.</li>

                    <li>Termination The next one and a half occurrences in a thirty-day period, two occurrences in a sixty-day period or four occurrences in six months will result in termination </li>
                </ul>

                <h4>Procedure for Employees</h4>
                <p>For calling out dial <span class="comp">774-559-7177</span>. If you are unable to report to work, or if you will arrive late, please contact the office no later than 24 hours of your scheduled start time. If you arrive to work and must leave due to illness or an emergency, please inform your manager & have them include this on your time sheet. Also notify the office immediately</p>

            </div>   
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Employee Name</label>
                    <input  name="fullname" v-model="fullname" type="text" required class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Date</label>
                    <input name="date"  v-model="date" type="date" required class="form-control">
                </div>
            </div> 

            <div class="col-md-12">
                <div class="form-group">
                    <label style="display:block;" class="control-label">Signature</label>
                    <div id="sig"></div>
                        <p style="clear: both;">
                            <button type="button" id="btn-clear">Clear</button> 
                        </p>
                    </div>
                    <input type="hidden" required name="canvas_img" id="canvas_img">
            </div> 

            
            <div class="col-md-12">
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </div> 
    </div>
</form>

