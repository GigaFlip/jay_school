<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('teachers');
	}


    public function processTeachers()
    {
        error_log("In processTeachers");
        $post_apply=$this->input->post('post_for',true);
        $subj1=$this->input->post('subject1',true);
        $subj2=$this->input->post('subject2',true);

        /** personal */
        $fname=$this->input->post('firstname',true);
        $lname=$this->input->post('lastname',true);
        $dob=$this->input->post('dob',true);
        $email=$this->input->post('email',true);
        $mobile=$this->input->post('mobile',true);
        $gender=$this->input->post('gender',true);
        $religion=$this->input->post('religion',true);
        $caste=$this->input->post('caste',true);
        $community=$this->input->post('community',true);
        $aadhar=$this->input->post('aadhar',true);
        $pan=$this->input->post('pan',true);
        $nationality=$this->input->post('nationality',true);
        $marital_status=$this->input->post('marital_status',true);
        $driving_license=$this->input->post('driving_license',true);
        $blood=$this->input->post('blood',true);

        error_log("In processTeachers - after blood group");
        
        $fathername=$this->input->post('fathername',true);
        $fatheroccu=$this->input->post('fatheroccu',true);
        $mothername=$this->input->post('mothername',true);
        $motheroccu=$this->input->post('motheroccu',true);
        $dom=$this->input->post('dom',true);
        $spousename=$this->input->post('spousename',true);
        $spousejob=$this->input->post('spousejob',true);
        $spousemob=$this->input->post('spousemob',true);
        $spousequalification=$this->input->post('spousequalification',true);
        $spouseprofession=$this->input->post('spouseprofession',true);
        $spousedesignation=$this->input->post('spousedesignation',true);
        $spouseorganization=$this->input->post('spouseorganization',true);

        error_log("In processTeachers - after spouse org");
        
        $lang_speak=$this->input->post('speak',true);
        $lang_read=$this->input->post('read',true);
        $lang_write=$this->input->post('write',true);
        $res_addr=$this->input->post('res_addr',true);
        $per_addr=$this->input->post('per_addr',true);
        $child_details=$this->input->post('child',true);
        
        /** Qualification part */
        $highest_q=$this->input->post('highest_qualification',true);
        $professioanl_t=$this->input->post('professional_training',true);
        $highschool=$this->input->post('highschool',true);
        $inter=$this->input->post('inter',true);
        $graduation=$this->input->post('graduation',true);
        $pg=$this->input->post('pg',true);
        $mphil=$this->input->post('mphil',true);
        $phd=$this->input->post('phd',true);
        $bed=$this->input->post('bed',true);
        $med=$this->input->post('med',true);
        $ctet=$this->input->post('ctet',true);
        $otherq=$this->input->post('otherq',true);
        $exp_years=$this->input->post('exp_years',true);
        $exp_details=$this->input->post('exp',true);
        $award_details=$this->input->post('award',true);
        $computer_pref=$this->input->post('computer_pref',true);
        $non_academic=$this->input->post('non_academic',true);
        $references=$this->input->post('ref',true);
        $description=$this->input->post('description',true);
        $criminal_conviction=$this->input->post('criminal_conviction',true);
        $work_rights=$this->input->post('work_rights',true);

        error_log("In processTeachers - before education array - school");
        
        $highschool_arr=array(
          'main_subjects'=>$highschool[0],
          'school'=>$highschool[1],
          'board'=>$highschool[2],
          'year_of_passing'=>$highschool[3],
          'per_of_marks'=>$highschool[4],
          'division'=>$highschool[5]
        );

        $inter_arr=array(
            'main_subjects'=>$inter[0],
            'school'=>$inter[1],
            'board'=>$inter[2],
            'year_of_passing'=>$inter[3],
            'per_of_marks'=>$inter[4],
            'division'=>$inter[5]
        );

        $graduation_arr=array(
            'main_subjects'=>$graduation[0],
            'school'=>$graduation[1],
            'board'=>$graduation[2],
            'year_of_passing'=>$graduation[3],
            'per_of_marks'=>$graduation[4],
            'division'=>$graduation[5]
        );

        $pg_arr=array(
            'main_subjects'=>$pg[0],
            'school'=>$pg[1],
            'board'=>$pg[2],
            'year_of_passing'=>$pg[3],
            'per_of_marks'=>$pg[4],
            'division'=>$pg[5]
        );

        error_log("In processTeachers - before education array - mphil");
        
        $mphil_arr=array(
            'main_subjects'=>$mphil[0],
            'school'=>$mphil[1],
            'board'=>$mphil[2],
            'year_of_passing'=>$mphil[3],
            'per_of_marks'=>$mphil[4],
            'division'=>$mphil[5]
        );

        $phd_arr=array(
            'main_subjects'=>$phd[0],
            'school'=>$phd[1],
            'board'=>$phd[2],
            'year_of_passing'=>$phd[3],
            'per_of_marks'=>$phd[4],
            'division'=>$phd[5]
        );

        $bed_arr=array(
            'main_subjects'=>$bed[0],
            'school'=>$bed[1],
            'board'=>$bed[2],
            'year_of_passing'=>$bed[3],
            'per_of_marks'=>$bed[4],
            'division'=>$bed[5]
        );

        $med_arr=array(
            'main_subjects'=>$med[0],
            'school'=>$med[1],
            'board'=>$med[2],
            'year_of_passing'=>$med[3],
            'per_of_marks'=>$med[4],
            'division'=>$med[5]
        );

        $ctet_arr=array(
            'main_subjects'=>$ctet[0],
            'school'=>$ctet[1],
            'board'=>$ctet[2],
            'year_of_passing'=>$ctet[3],
            'per_of_marks'=>$ctet[4],
            'division'=>$ctet[5]
        );

        error_log("In processTeachers - before education array - other");
        
        $otherq_arr=array(
            'main_subjects'=>$otherq[0],
            'school'=>$otherq[1],
            'board'=>$otherq[2],
            'year_of_passing'=>$otherq[3],
            'per_of_marks'=>$otherq[4],
            'division'=>$otherq[5]
        );

        $lang_speak_arr=array(
          $lang_speak[0],
          $lang_speak[1],
          $lang_speak[2]
        );

        $lang_read_arr=array(
          $lang_read[0],
          $lang_read[1],
          $lang_read[2]
        );

        $lang_write_arr=array(
          $lang_write[0],
          $lang_write[1],
          $lang_write[2]
        );

        error_log("In processTeachers - after lang");
        
        $res_addr_arr=array(
            'doorno'=>$res_addr[0],
            'street'=>$res_addr[1],
            'district'=>$res_addr[2],
            'city'=>$res_addr[3],
            'state'=>$res_addr[4],
            'pin'=>$res_addr[5],
            'tel_no'=>$res_addr[6]
        );

        error_log("In processTeachers - after res addr");
        
        $perm_addr_arr=array(
            'doorno'=>$per_addr[0],
            'street'=>$per_addr[1],
            'district'=>$per_addr[2],
            'city'=>$per_addr[3],
            'state'=>$per_addr[4],
            'pin'=>$per_addr[5],
            'tel_no'=>$per_addr[6]
        );
        
        error_log("In processTeachers - after perm addr");

        $child_details_arr=array(
            'child_name'=>$child_details[0],
            'child_gender'=>$child_details[1],
            'child_age'=>$child_details[2],
        );

        $exp_details_arr=array(
            'start_date'=>$exp_details[0],
            'end_date'=>$exp_details[1],
            'organization'=>$exp_details[2],
            'role'=>$exp_details[3],
            'remark'=>$exp_details[4],
        );

        $award_details_arr=array(
            'award_name'=>$award_details[0],
            'award_organization'=>$award_details[1],
            'year'=>$award_details[2],
            'remarks'=>$award_details[3],
        );

        $references_details_arr=array(
            'name'=>$references[0],
            'designation'=>$references[1],
            'address'=>$references[2],
            'contact'=>$references[3],
        );

        error_log("In processTeachers - after ref.");
        
        error_log("In processTeachers - before load model");

        $this->load->model('user_model');
        $insert_array=array(
            'post_for'=>$post_apply,
            'subject_1'=>$subj1,
            'subject_2'=>$subj2,

            'first_name'=>$fname,
            'last_name'=>$lname,
            'DOB'=>$dob,
            'email'=>$email,
            'mobile_no'=>$mobile,
            'gender'=>$gender,
            'religion'=>$religion,
            'caste'=>$caste,
            'community_category'=>$community,
            'aadhar_no'=>$aadhar,
            'pan_no'=>$pan,
            'nationality'=>$nationality,
            'marital_status'=>$marital_status,
            'driving_license_no'=>$driving_license,
            'blood_group'=>$blood,

            'father_name'=>$fathername,
            'father_occupation'=>$fatheroccu,
            'mother_name'=>$mothername,
            'mother_occupation'=>$motheroccu,
            'date_of_marriage'=>$dom,
            'spouse_name'=>$spousename,
            'spouse_job_transferrable'=>$spousejob,
            'spouse_mobile'=>$spousemob,
            'spouse_qualification'=>$spousequalification,
            'spouse_profession'=>$spouseprofession,
            'spouse_designation'=>$spousedesignation,
            'spouse_organization'=>$spouseorganization,
            'highest_qualification'=>$highest_q,
            'ed_tech'=>$professioanl_t,

            'years_of_work_experience'=>$exp_years,
            'proficiency_computer'=>$computer_pref,
            'non_academic_interest'=>$non_academic,
            'description'=>$description,
            'criminal_conviction'=>$criminal_conviction,
            'work_rights'=>$work_rights,


            'lang_speak'=>json_encode($lang_speak_arr),
            'lang_read'=>json_encode($lang_read_arr),
            'lang_write'=>json_encode($lang_write_arr),
            'resident_address'=>json_encode($res_addr_arr),
            'permanent_address'=>json_encode($perm_addr_arr),
            'children_information'=>json_encode($child_details_arr),
            'details_highschool'=>json_encode($highschool_arr),
            'details_inter'=>json_encode($inter_arr),
            'details_graduation'=>json_encode($graduation_arr),
            'details_post_graduation'=>json_encode($pg_arr),
            'details_mphil'=>json_encode($mphil_arr),
            'details_phd'=>json_encode($phd_arr),
            'details_bed'=>json_encode($bed_arr),
            'details_med'=>json_encode($med_arr),
            'details_ctet'=>json_encode($ctet_arr),
            'details_other'=>json_encode($otherq_arr),
            'experience_details'=>json_encode($exp_details_arr),
            'award_certification'=>json_encode($award_details_arr),
            'reference'=>json_encode($references_details_arr)

        );

        error_log("Before insertCommon");
        $iid=$this->user_model->insertCommon('teacher_admission',$insert_array);
        if($iid>0){
            $result['status']="success";
            $result['message']="form submitted";
        }else{
            $result['status']="failed";
            $result['message']="form not submitted";
        }
        die(json_encode($result));
	}

    public function selectTeachers()
    {
        $this->load->model('user_model');
        $id=$this->input->get('id',true);
        $result=$this->user_model->selectCommon('teacher_admission',array('details_highschool'),array('staff_id'=>$id));
        print_r($result->result('array'));
	}

}
