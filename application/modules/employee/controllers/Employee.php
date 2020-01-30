<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		// $parameters['select'] = 'fullname,username';
		// $parameters['search_like'] = 'da';
		// $parameters['column_order'] = array('fullname','username');
		// $data = getrow('tbl_users',$parameters,'array',true);
		// json($data,false);
		$data["title"] ="Employee";
		$data["pagename"] ="Employee";
		$data["has_modal"] ="includes/modal";
		$data["has_footer"] ="includes/upload_files_footer";
		$data["files"] =$this->get_all_files();
		$this->load_employee_page("index", $data, "footer_index");
	}

	public function form($formname){
		$data["title"] ="Form - $formname";
		$data["pagename"] ="form";
		if($formname== "employee_attendance_form"){
			$data["has_header"] = "includes/employee_form_header";
			$data["has_footer"] = "includes/signature_footer";
		}
		else if($formname== "nurse_knowledge_form"){
			$data["has_header"] = "includes/employee_form_header";
			$data["has_footer"] = "includes/nurse_knowledge_footer";
		}
		else if($formname== "bethel_hippa_policy"){
			$data["has_header"] = "includes/employee_form_header";
			$data["has_footer"] = "includes/bethel_hippa_policy_footer";
		}
		// $data["files"] =$this->get_all_files();
		$this->load_employee_page("pages/$formname", $data, "footer_index");
	}

	public function submit_form($formtype = ""){
		if(!empty($formtype)){
			$post = $this->input->post();
			if(!empty($post)){
				if($formtype == "hipa_b"){
					$frmdata= array(
						"agreement" => 1,
						"applicant_name" => $post["fullname"],
						"date" => $post["date"],
					);
					$set = array(
						"user_id" => my_id(),
						"form_name"=> "Hepatitis B Vaccine Declination Form",
						"form_type"=> $formtype,
						"form_data"=> json_encode($frmdata),
						"form_submitted"=> date("Y/m/d") ,
						"status" => 1,
					);
					$this->MY_Model->insert('tbl_onlineforms', $set);
					show_swal("success", "Submitted successfully!");
				}
			}
			else{
				show_swal("error", "There is no form selected!");
			}
			
		}else{
			show_swal("error", "There's an error in submiting a form!");
		}
		redirect(base_url("employee"));
	}

	public function downloads ($file_id){
		// $param["select"]="file_name";
		// $param["where"]=array("file_id"=> $file_id);
		// $res = $this->MY_Model->getRows("tbl_files", $param);
		// if($res){
		// 	$file = base_url()."assets/uploads/".$res[0]["file_name"];
		// 	$fdata = array(
		// 		"download_user_id" => $this->session->userdata("user_id"),
		// 		"download_date" => date("Y-m-d H:i:s"),
		// 		"file_id" => $file_id,
		// 		"log_status" => 1,
		// 	);
		//    $res = $this->MY_Model->insert("tbl_download_logs", $fdata);
		  
		//    if($res){
		// 		header("Content-Description: File Transfer"); 
		// 		header("Content-Type: application/octet-stream"); 
		// 		header("Content-Disposition: attachment; filename=\"". basename($file) ."\""); 
		// 		readfile ($file);
		//    }
		// }
	}

	// private function
	private function get_all_files (){
		// $param["select"]="file_name, uploaded_date, tbl_users.user_id, file_id, tbl_users.first_name";
		// $param["where"]=array("file_status"=>1 );
		// $param["join"]=array("tbl_users"=> "tbl_users.user_id = tbl_files.user_id" );
		// $res =  $this->MY_Model->getRows("tbl_files", $param);
		// return $res;
	}
	
	

	public function upload_file(){
		$post = $this->input->post();
		// echo '<pre>';
		// print_r($_FILES);
		// echo '</pre>';
		// exit;
		if(!empty($post)){
			$pathname = "./assets/uploads/".$_FILES["file"]["name"];
			if(!file_exists($pathname)){
				if(upload_file($_FILES)){
					$filetitle = $post["file_title"];
					$file_name = preg_replace('/\s+/', '_', $_FILES["file"]["name"]);
					$set= array(
						"user_id" => $this->session->userdata("user_id"),
						"file_name" => $file_name,
						"file_title" => $filetitle,
						"uploaded_date" => date("Y/m/d h:i:sa"),
						"file_status" => 1,
						"file_type" => $post["file_type"],
					);
					$this->MY_Model->insert('tbl_files', $set);
					show_swal("success", "Upload Successfully!");
				}
				else{
					show_swal("error", "upload failed");
				}
			}else{
					show_swal("error", "File Already Exist!");
			}
			
		}else{
			show_swal("error", "Please input the required fields");
		}
		redirect(base_url("employee"));
	}

	
	// api

	public function api_get_files(){
		$res = [];
		$par["where"] = array("tbl_files.user_id" => my_id(), "tbl_files.file_status" => 1);
		$par["join"] = array("tbl_users" => "tbl_users.user_id = tbl_files.user_id");
		$res = $this->MY_Model->getRows('tbl_files', $par, "obj");
		echo json_encode($res);
	}

	public function submit_api_form(){
		$post = $this->input->post();
		$response  = array("code"=>204);
		if(!empty($post)){
			$path = "./assets/images/signatures/";
			$image_parts = explode(";base64,", $post['canvas_img']);
			$image_type_aux = explode("image/", $image_parts[0]);
			$image_type = $image_type_aux[1];
			$image_base64 = base64_decode($image_parts[1]);
			$file_name = "signature-".time(). '.png';
			$file = $path . $file_name;
			file_put_contents($file, $image_base64);

			if($post["form_type"]== "employee_attendance_frm"){
				$frmdata= array(	
					"signature" => $file_name,
					"employee_name" => $post["fullname"],
					"date" => $post["date"]
				);
				$set = array(
					"user_id" => my_id(),
					"form_name"=> "Attendance Policy Form",
					"form_type"=> $post["form_type"],
					"form_data"=> json_encode($frmdata),
					"form_submitted"=> date("Y/m/d") ,
					"status" => 1,
				);
			}
			else if($post["form_type"]== "nurse_knowledge_form"){
				$frmdata= array(	
					"signature" => $file_name,
					"employee_name" => $post["fullname"],
					"date" => $post["date"]
				);
				$set = array(
					"user_id" => my_id(),
					"form_name"=> "Nurses Knowledge and Skills Required Form",
					"form_type"=> $post["form_type"],
					"form_data"=> json_encode($frmdata),
					"form_submitted"=> date("Y/m/d") ,
					"status" => 1,
				);
			}
			else if($post["form_type"]== "bethel_hippa_policy"){
				$frmdata= array(	
					"signature" => $file_name,
					"employee_name" => $post["fullname"],
					"date" => $post["date"]
				);
				$set = array(
					"user_id" => my_id(),
					"form_name"=> "Bethel HIPAA Policy Form",
					"form_type"=> $post["form_type"],
					"form_data"=> json_encode($frmdata),
					"form_submitted"=> date("Y/m/d") ,
					"status" => 1,
				);
			}

			$this->MY_Model->insert('tbl_onlineforms', $set);
			$response  = array("code"=>200);
		}
		echo json_encode($response);
	}
}
?>
