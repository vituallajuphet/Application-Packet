<form action="" @submit.prevent="submitForm()" method="post">
    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color:#d7744e">*</span> Name of Job Applicant/Worker</label>
                    <input v-model="fdata.applicant_name" name="fullname" placeholder="Enter name here" type="text" required class="form-control">
                </div>
            </div>   
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color:#d7744e">*</span> Home Street Address </label>
                    <input v-model="fdata.address" name="address" placeholder="Enter Address here" type="text" required class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label"><span style="color:#d7744e">*</span> City</label>
                    <input  name="city" v-model="fdata.city" placeholder="Enter City here" type="text" required class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label"><span style="color:#d7744e">*</span> State</label>
                    <input v-model="fdata.state" name="text" required placeholder="Enter State here" type="state"  class="form-control">
                </div>
            </div> 
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label"><span style="color:#d7744e">*</span> Zip Code</label>
                    <input v-model="fdata.zip_code" name="zip_code" required placeholder="Enter Zipcode here" type="text"  class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color:#d7744e">*</span> Phone Number</label>
                    <input v-model="fdata.phone" name="phone" required placeholder="Enter Number here" type="text"  class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label"><span style="color:#d7744e">*</span> Email Address</label>
                    <input v-model="fdata.email_address" name="email" required placeholder="Enter Email address here" type="text"  class="form-control">
                </div>
            </div> 

            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Job Order Number</label>
                    <input v-model="fdata.job_order_number" name="job_order_number" placeholder="Enter Job Order here" type="text"  class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Date of Assignment</label>
                    <input v-model="fdata.date" name="date" type="date" required  class="form-control">
                </div>
            </div> 
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Worksite Company Name</label>
                    <input v-model="fdata.work_company_name" name="work_company_name" placeholder="Enter name here" type="text"  class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Name of Contact Person at Work Site </label>
                    <input name="contact_name"  v-model="fdata.contact_name" type="text" placeholder="Enter name here" class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Contact Person Phone Number</label>
                    <input v-model="fdata.contact_phone_number" name="contact_phone_number" type="text"  placeholder="Enter number here" class="form-control">
                </div>
            </div> 
             <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Contact Person Email Address </label>
                    <input name="contact_email" type="email" v-model="fdata.contact_email" placeholder="Enter email address here" class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Work Site Address </label>
                    <input v-model="fdata.contact_address" name="contact_address" type="text"  placeholder="Enter address here" class="form-control">
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Description and Nature of Assignment</label>
                    <select required v-model="fdata.description_of_nature" name="description_of_nature"class="form-control">
                        <option value="">Please Select</option>
                        <option value="CNA">CNA</option>
                        <option value="LPN">LPN</option>
                        <option value="RN">RN</option>
                    </select>
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Special Attire, Accessories, Tools, Protective, Equipment, Training or License Required  </label>
                       <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" v-model="fdata.has_specify" name="special_attire_accessories_tools" id="has_tools1" value="No">
                            <label class="form-check-label" for="has_tools1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input"  v-model="fdata.has_specify" type="radio" name="special_attire_accessories_tools" id="has_tools2" value="Yes">
                            <label class="form-check-label" for="has_tools2">Yes</label>
                        </div>   

                    <div class="form-group" v-if="fdata.has_specify == 'Yes'">
                     <br>

                        <label class="control-label">Please Specify</label>
                        <input name="specify" type="text"  v-model="fdata.specify" required placeholder="Enter details here" class="form-control">
                     </div>

                </div>
            </div> 
            <div class="col-md-12">
                <h5> What Licensed Do You Currently Hold? </h5>
                <hr>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Do you have a driver's license? </label><br>
                       <div class="form-check form-check-inline">
                            <input required checked class="form-check-input" v-model="fdata.have_a_driver_license" type="radio" name="have_a_driver_license" id="has_license1" value="Yes">
                            <label class="form-check-label" for="has_license1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" v-model="fdata.have_a_driver_license" name="have_a_driver_license" id="has_license2" value="No">
                            <label class="form-check-label" for="has_license2">No</label>
                        </div>     
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                      <div><label class="control-label">Do you own a car?</label></div>
                       <div class="form-check form-check-inline">
                            <input checked required class="form-check-input" v-model="fdata.Do_you_own_a_car" type="radio" name="Do_you_own_a_car" id="hascar1" value="Yes">
                            <label class="form-check-label" for="hascar1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" v-model="fdata.Do_you_own_a_car" name="Do_you_own_a_car" id="hascar2" value="No">
                            <label class="form-check-label" for="hascar2">No</label>
                        </div>      
                </div>
            </div> 
            <div class="col-md-12">
                <hr>
                <div class="form-group">
                    <button class="btn btn-success">Submit</button>
                </div>
                <hr>
            </div> 
    </div>
</form>