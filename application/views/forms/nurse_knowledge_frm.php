<form action="#" @submit.prevent="submitForm()" method="post">
     <h4>Nurses Knowledge and Skills Required:</h4>
    <div class="row">
            <div class="col-md-12">
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

