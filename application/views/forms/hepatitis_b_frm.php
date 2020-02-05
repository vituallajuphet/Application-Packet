<form id="hepa_form" action="<?= base_url("employee/submit_form/hipa_b")?>" method="post">
     <h4>HEPATITIS B VACCINE DECLINATION / DOCUMENTATION</h4>
    <div class="row">
            <div class="col-md-12">
                Declination of Hepatitis B Vaccine.
                The following statement of declination of the hepatitis B vaccine must be signed by an employee who:
                <ul>
                    <li>Chooses <strong style="font-weight:bold;">not</strong> to accept the vaccine. </li>
                    <li>Has had appropriate training regarding hepatitis B, hepatitis B vaccination, the efficacy, safety, method of administration and benefits of vaccination, given free of charge to the employee. </li>
                </ul>

                <input required type="checkbox" name="agreement"  style="-webkit-appearance:checkbox;"> I understand that due to my occupational exposure to blood or other potentially infectious materials I may be at risk of acquiring hepatitis B virus (HBV) infection. I have been given the opportunity to be vaccinated with hepatitis B vaccine, at no charge to myself. However, I decline hepatitis B vaccination at this time. I understand that by declining this vaccine I continue to be at risk of acquiring hepatitis B, a serious disease. If in the future I continue to have occupational exposure to blood or other potentially infectious materials and I want to be vaccinated with hepatitis B vaccine, I can receive the vaccination series at no charge to me.</p>
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
                <div class="form-group">
                 <div id="form_recaptcha" class="required mt-4 mb-4"></div>
                    <button class="btn btn-success">Submit</button>
                </div>
            </div> 
    </div>
</form>