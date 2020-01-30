<?php
@session_start();
require_once 'FormsClass.php';
$input = new FormsClass();

$formname = 'Nurses Knowledge and Skills Required Form';
$prompt_message = '<span class="required-info">* Required Information</span>';
require_once 'config.php';
if ($_POST){
	if( empty($_POST['Applicant_Name']) ||
    	empty($_POST['Date'])

	) {


	$asterisk = '<span style="color:#FF0000; font-weight:bold;">*&nbsp;</span>';
	$prompt_message = '<div id="error-msg"><div class="message"><span>Required Fields are empty</span><br/><p class="error-close">x</p></div></div>';
	// }
	// else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",stripslashes(trim($_POST['Email']))))
	// 	{ $prompt_message = '<div id="recaptcha-error"><div class="message"><span>Please enter a valid email address</span><br/><p class="rclose">x</p></div></div>';
}else if(empty($_POST['g-recaptcha-response'])){
		$prompt_message = '<div id="recaptcha-error"><div class="message"><span>Invalid recaptcha</span><br/><p class="rclose">x</p></div></div>';
	}
	else{

		$body = '<div class="form_table" style="width:700px; height:auto; font-size:12px; color:#333333; letter-spacing:1px; line-height:20px; margin: 0 auto;">
			<div style="border:8px double #c3c3d0; padding:12px;">
			<div align="center" style="color:#990000; font-style:italic; font-size:20px; font-family:Arial; margin:bottom: 15px;">('.$formname.')</div>

			<table width="90%" cellspacing="2" cellpadding="5" align="center" style="font-family:Verdana; font-size:13px">
				';

			foreach($_POST as $key => $value){
				if($key == 'submit') continue;
				elseif($key == 'g-recaptcha-response') continue;

				if(!empty($value)){
					$key2 = str_replace('_', ' ', $key);
					if($value == ':') {
						$body .= '<tr><td colspan="2" style="background:#F0F0F0; line-height:30px"><b>'.$key2.'</b></td></tr>';
					}else if($key == "Docu01"){
						$body .= '<tr><td colspan="2" line-height:30px">

					1. Assists with proving patient care: records vital signs, discuses and record chief health concerns, performs tests, and administers injections. <br>
	 				 2. Place phone calls to pharmacies to order prescriptions: sets up referral contacts. Pulls and prepares patients charts: answers phone; perform other general office duties as required. <br>
	 				 3. Maintains neatness of work area; stocks patient rooms with supplies. <br>
	 				 4. Performs other duties as assigned. Giving medication as prescribed by a doctor. <br>
	 				 5. Taking vital signs, such as blood pressure, temperature and weight.<br>
	 				 6. Basic wound care including cleaning and bandaging injured areas. <br>
	 				 7. Giving injections of medication. <br>
	 				 8. Immunizations.<br>
	 				 9. Taking medical histories.<br>
	 				 10. Entering information’s into computer systems. <br>
	 				 11. Managing IV’s, catheters, urostomy and colostomy. <br>
	 				 12. Ensuring patients and their families understand release instructions <br>
	 				 13. Supervising CNAs ( Certified Nursing Assisatnts0 <br>
	 				 14. Monitoring fluid and food intake and output <br>
	 				 15. Moving patients safely <br>
	 				 16. Assessing patients’ reactions to medications <br>
	 				 17. Assessing patients’ mental health <br>
	 				 18. Proving emotional support <br>
	 				 19. Assisting with daily need as bating and dressing <br>
	 				 20. Observation of patient’s skin for potential bed sores and do wound dressing <br>
	 				 21. Schedule appointments <br>
	 				 22. Keeping medical records current <br>
	 				 23. Writing prescriptions at physicians request <br>


						</td></tr>';
					}else if($key == "Docu02"){
						$body .= '<tr><td colspan="2" line-height:30px"> <input type="checkbox" name="" value="" checked disabled /> I have reviewed my job description and agree to perform all duties mentioned to the best of my ability. I understand my job duties may change as the needs of the department change. I further agree to notify my immediate supervisor, if I am unable to complete any of my job duties in a timely manner </td></tr>';
					}else {
						$body .= '<tr><td><b>'.$key2.'</b>:</td> <td>'.htmlspecialchars(trim($value), ENT_QUOTES).'</td></tr>';
					}
				}
			}
			$body .= '
			</table>

			</div>
			</div>';


		 // for email notification
		require_once 'config.php';
		require_once 'swiftmailer/mail.php';

		// save data form on database
		include 'savedb.php';


		// save data form on database
		$subject = $formname ;
		$attachments = array();
		// when form has attachments, uncomment code below

	 	//name of sender
		$name = $_POST['Applicant_Name'];
		$result = insertDB($name,$subject,$body,$attachments);

		$templateVars = array('{link}' => get_home_url().'/onlineforms/'.$_SESSION['token'], '{company}' => COMP_NAME);

		Mail::Send($template, 'New Message Notification', $templateVars, $to_email, $to_name, $from_email, $from_name, $cc, $bcc);

		if($result){
			$prompt_message = '<div id="success"><div class="message"><span>THANK YOU</span><br/> <span>for sending us a message!</span><br/><span>We will be in touch with you soon.</span><p class="close">x</p></div></div>';
				unset($_POST);
		}else {
			$prompt_message = '<div id="error-msg"><div class="message"><span>Failed to send email. Please try again.</span><br/><p class="error-close">x</p></div></div>';
		}

	}

}
/*************declaration starts here************/
$state = array('Please select state.','Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','District Of Columbia','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Pennsylvania','Puerto Rico','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virgin Islands','Virginia','Washington','West Virginia','Wisconsin','Wyoming');
?>
<!DOCTYPE html>
<html class="no-js" lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title><?php echo $formname; ?></title>

		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
		<link rel="stylesheet" href="style.css?ver23asas">
		<link rel="stylesheet" href="css/media.css?ver24as">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="css/dd.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/datepicker.css">
		<link rel="stylesheet" href="css/jquery.datepick.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/jquery.signaturepad.css" type="text/css" media="screen" />
		<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

		<!-- <link rel="stylesheet" href="css/wickedpicker.css">
		<link rel="stylesheet" href="css/wickedpicker.min.css">
		<link rel="stylesheet" href="css/timepicki.css"> -->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

		<link rel="stylesheet" href="css/proweaverPhone.css" type="text/css"/>
    <link rel="stylesheet" href="css/flag.min.css" type="text/css"/>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<style>
			/* [type="radio"]:checked + label::after, [type="radio"]:not(:checked) + label::after {left: 3px;}
			[type="radio"]:checked + label::before, [type="radio"]:not(:checked) + label::before {left: 0;} */
			.form_head {border-radius: 10px; }
			.form_head p.title_head:nth-child(1) { background: #ff3f3f;  margin: 0;  padding: 10px;  color: #fff;  font-weight: bold;  border-top-right-radius: 8px;  border-top-left-radius: 8px;}
			.form_head .form_box .form_box_col1 p { margin-bottom: 4px; }
			.form_head .form_box { margin: 0; padding: 25px 28px; border: 2px solid #ddd; border-top: none;  border-bottom-right-radius: 8px;  border-bottom-left-radius: 8px;}
			.hdg{background: linear-gradient(0deg,#007b5f -124%,#8dc544 61%); font-family: 'Muli', sans-serif;text-align: center; width: 100%; color: #fff; padding: 10px 0; border-radius: 5px;font-weight:bold;}
			.amount{ padding: 10px 90px; }
			#icon { position: absolute; padding: 11px 39px 10px 10px; background: linear-gradient(0deg,#007b5f -124%,#8dc544 61%); height: 62px; color: #fff; font-size: 31px; }
			/* [class^="form_box"] [class^="form_box"]{margin: 10px 0;} */
			.fa-dollar-sign::before { content: "\f155"; position: relative; left: 13px; top: 5px; }
				h2{font-weight:bold;text-align:left;}
				h3{font-style:italic;font-weight: bold;text-align:left;}
				body{font-family:Muli;}
				.oneline{margin-top:10px;}
					.datepick-trigger { margin-top: -20px !important; }
					p.error { color: #ffff; font-weight: 700; }
					.tile { text-align: center; font-weight: 700; }
					.days th { padding: 6px; border: 1px solid;}

					.firstth th {padding: 10px 0; }

					.pad{position: relative;cursor: url("../images/pen.cur"), crosshair;cursor: url("../images/pen.cur") 16 16, crosshair;-ms-touch-action: none;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;-o-user-select: none;user-select: none;border: 1px solid #CECECE;height: 65px;}
					.clearButton {top: 0;left: 0;font-size: 0.75em;line-height: 1.375; margin-top: 20px;}
					.sig{}
					.sig small {color: #f00;font-size: 20px;font-weight:bold;}
					.con1{margin-top:-63px;}
					.con2{margin-top:-8px;}
					.hdg_con{text-transform: uppercase;  font-weight: bold;margin-top: 26px;}
					.con{font-family: 'Muli', sans-serif;text-align: center;}
					.comp{color: #0353a1;  font-weight: bold;background:none;}

					body { font-family: 'Muli', sans-serif;}
						::placeholder { font-family: 'Muli', sans-serif; }
						::-moz-placeholder { font-family: 'Muli', sans-serif; }
						::-webkit-input-placeholder { font-family: 'Muli', sans-serif; }
						:-ms-input-placeholder { font-family: 'Muli', sans-serif;}
						input.form_field,textarea.form_field, select.form_field { font-family: 'Muli', sans-serif;}
						.form_field.test { border: navajowhite; border-bottom-color: navajowhite; border-bottom-style: none; border-bottom-width: medium; border-bottom: 2px solid #e5e5e5; width: 20%; top: -10px; height: 20px; }

						.main.fieldbox { margin-bottom: 30px; }
					.fieldbox { margin: 10px 0; }
					.fieldheader p { text-transform:uppercase; margin: 0; background: rgba(12,60,99,.8); padding: 13px; color: #fff; text-align: center; font-weight: 700; border-top-left-radius: 5px; border-top-right-radius: 10px; font-size:18px;}
					.fieldcontent { padding: 20px; border: 2px solid rgba(12,60,99,.8); border-top: 0; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; }
					.ui-menu-item{width: 85px !important;}
					ul li{list-style-type: disc; margin-left: 20px;}

					.tits{background:#f0f0f0;padding:10px; text-transform:uppercase; font-weight:bold;}
					 .requiredtest{line-height: 25px;}
						.aknowled { background: rgba(12,60,99,.8); padding: 10px; text-transform: uppercase; text-align: center; font-weight: bold; color: #ffff; }
					@media only screen and (max-width: 800px) {
						.tits { margin: 15px 0 0 0; }
				}


/*
						@media only screen and (max-width: 781px) {
							.mod tr { height: 105px; }
							.fieldbox.right {width: 49.9%; float: right;}
							.fieldbox.left { width: 49.9%; float: left;}

							.form_box_col2.addmargin { margin-bottom: 20px; }
							strong, b { font-weight: bold; font-size: 15px; }
						}

						@media only screen and (max-width: 350px) {
						.fieldcontent { padding: 2px;}
							}

					input[type=checkbox] {transform: scale(1.5);-webkit-appearance: checkbox;-moz-appearance:    checkbox;appearance:         checkbox;}

					@media only screen and (max-width: 372px) {
					.ui-timepicker-container,.ui-timepicker-no-scrollbar,.ui-timepicker-standard{width: 230px !important;}
				}

					.Time{ background: url(images/time.png) 96% / 15% no-repeat #fff; background-position-x: 96%; background-size: 15% auto; background-size: 25px; z-index: 999; background-position-x: right 15px; }

					.wskCheckbox {z-index: 0;}
					/* .ui-timepicker-container.ui-timepicker-no-scrollbar.ui-timepicker-standard { width: 275px !important;  } */

					.checkbox-table tr td label {font-size: 15px;}
					/* .checkbox-table tr td {width: 27.4%;font-size: 10px;} */
					#ifknow { margin-top: 10px; }

		</style>
	</head>
<body>
	<div class="clearfix">
		<div class = "wrapper">
			<div id = "contact_us_form_1" class = "template_form">
				<div class = "form_frame_b">
					<div class = "form_content">
						<?php if($testform):?><div class="test-mode"><i class="fas fa-info-circle"></i><span>You are in test mode!</span></div><?php endif;?>

						<form id="submitform" name="contact" method="post" enctype="multipart/form-data" action="">
								<?php echo $prompt_message; ?>


										 <div class="main fieldbox">
													<div class="fieldbox">
													 <div class="fieldheader">
														 <p>Nurses Knowledge and Skills Required:</p>
														 <input type="hidden" name="Nurses Knowledge and Skills Required:" value=":">
													 </div>
													 <div class="fieldcontent">
												   <p class="requiredtest">
														   1. Assists with proving patient care: records vital signs, discuses and record chief health concerns, performs tests, and administers injections. <br>
															 2. Place phone calls to pharmacies to order prescriptions: sets up referral contacts. Pulls and prepares patients charts: answers phone; perform other general office duties as required. <br>
															 3. Maintains neatness of work area; stocks patient rooms with supplies. <br>
															 4. Performs other duties as assigned. Giving medication as prescribed by a doctor. <br>
															 5. Taking vital signs, such as blood pressure, temperature and weight.<br>
															 6. Basic wound care including cleaning and bandaging injured areas. <br>
															 7. Giving injections of medication. <br>
															 8. Immunizations.<br>
															 9. Taking medical histories.<br>
															 10. Entering information’s into computer systems. <br>
															 11. Managing IV’s, catheters, urostomy and colostomy. <br>
															 12. Ensuring patients and their families understand release instructions <br>
															 13. Supervising CNAs ( Certified Nursing Assisatnts0 <br>
															 14. Monitoring fluid and food intake and output <br>
															 15. Moving patients safely <br>
															 16. Assessing patients’ reactions to medications <br>
															 17. Assessing patients’ mental health <br>
															 18. Proving emotional support <br>
															 19. Assisting with daily need as bating and dressing <br>
															 20. Observation of patient’s skin for potential bed sores and do wound dressing <br>
															 21. Schedule appointments <br>
															 22. Keeping medical records current <br>
															 23. Writing prescriptions at physicians request <br>

													 </p>
													 <input type="checkbox" name="Docu01" style="display:none;" checked>

													 <p class="aknowled">Acknowledgment: </p>
													 <input type="hidden" name="Acknowledgment:" value=":">

													 <input type="checkbox" name="Docu02" style="-webkit-appearance:checkbox;"> I have reviewed my job description and agree to perform all duties mentioned to the best of my ability. I understand my job duties may change as the needs of the department change. I further agree to notify my immediate supervisor, if I am unable to complete any of my job duties in a timely manner </p>


														 <div class="form_box">
															<div class="form_box_col2">
																<div class="group">
																	<?php
																		$input->label('Applicant Name', '*');
																		// @param field name, class, id and attribute
																		$input->fields('Applicant_Name', 'form_field','','placeholder="Enter name here"');
																	?>
																</div>
																<div class="group">
																	<?php
																		$input->label('Date', '*');
																		// @param field name, class, id and attribute
																		$input->fields('Date', 'form_field Date ','','placeholder="Enter date here"');
																	?>
																</div>
															</div>
														</div>

											 </div>
					 					</div>
					 			 </div>


									<div class = "form_box5 secode_box">
										<div class="inner_form_box1 recapBtn">
											<div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_sitekey; ?>"></div>
											<div class="btn-submit"><input type = "submit" class = "form_button" value = "SUBMIT" /></div>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>


	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery.datepick.min.js"></script>
	<script src="js/datepicker.js"></script>
	<script src = "js/plugins.min.js"></script>


	<script type="text/javascript">
$(document).ready(function() {
	// validate signup form on keyup and submit
	$("#submitform").validate({
		rules: {
					Applicant_Name: "required",
					Docu02: "required",
					Date: "required"

				},
				messages: {
					Applicant_Name: "",
					Docu02: "",
					Date: ""


		}
	});


	$('.Date').datepicker();
	$('.Date').attr('autocomplete', 'off');


	$("#submitform").submit(function(){
		if($(this).valid()){
			$('.load_holder').css('display','block');
			self.parent.$('html, body').animate(
				{ scrollTop: self.parent.$('#myframe').offset().top },
				500
			);
		}
		if(grecaptcha.getResponse() == "") {
			var $recaptcha = document.querySelector('#g-recaptcha-response');
				$recaptcha.setAttribute("required", "required");
				$('.g-recaptcha').addClass('errors').attr('id','recaptcha');
		  }
	});

	$( "input" ).keypress(function( event ) {
		if(grecaptcha.getResponse() == "") {
			var $recaptcha = document.querySelector('#g-recaptcha-response');
			$recaptcha.setAttribute("required", "required");
		  }
	});


});

$(function() {
  $('.Date, .date').datepicker({
	autoHide: true,
	zIndex: 2048,
  });
});




</script>
</body>
</html>
