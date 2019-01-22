<?php

 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teachers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('info_model');
             $this->load->model('upload');
    }

  
    public function teacher() {
        $data=array();
          $this->db->select ( '*' );
        $this->db->from ('tcacher_info');
//        $this->db->where ( 'id', $id );
        $resultSet = $this->db->get ();
       $data['result']=$resultSet->result();
        
        $data['tergetPage'] = $this->load->view('teachers_information_submit.php',$data, TRUE);
        $this->load->view('home', $data);
    }

    public function submit_info() {

        $data['full_name'] = $this->input->post('full_name');
        $data['designation'] = $this->input->post('designation');
        $data['email'] = $this->input->post('email');
        $data['mobile_no'] = $this->input->post('mobile_no');
        $data['address'] = $this->input->post('address');
        $data['objectives'] = $this->input->post('objectives');
        $data['department'] = $this->input->post('department');
        $data['type'] = $this->input->post('type');
        $data['status'] = $this->input->post('status');

        if ($data['email'] == '' and $data['mobile_no'] == '') {
            $sdata = array();
            $sdata['ex'] = 'Please felup your information cayerfully.';

            $this->session->set_userdata($sdata);
            redirect('teachers/teacher');
        }
    $this->load->model("upload");
 if ($_FILES['teacher_img']['name'] && $_FILES['teacher_img']['size']) {
                $upload_path = 'teacher_img/';
                $result = $this->upload->UploadPhoto('teacher_img', $upload_path);
                if ($result) {
                    $data['teacher_img'] = $result['file_name'];
                }
 }

        //==========load model=============
    
        $this->load->model("info_model");

        $status = $this->info_model->save_info($data);

        if ($status) {
            $sdata['message'] = "<h2>Data saved successfully</h2>.";
        } else {
            $sdata['exception'] = '<h2>Error, plz try again.</h2>';
        }
        $this->session->set_userdata($sdata);
        redirect('teachers/teacher');
    }

    public function update_t_info() {
        $query = $this->db->query("SELECT * FROM tcacher_info");
        $data['info'] = $query->result();

        $data['tergetPage'] = $this->load->view('update_t_info.php', $data, True);
        $this->load->view('home', $data);
    }

    public function delet_info($id) {

        $this->info_model->deletinfo($id);
        redirect('teachers/update_t_info');
    }

    public function editinfo($id) {

        $data = array();
        $data['id'] = $this->session->userdata('id');
        $id = $id;
        $this->load->model('info_model');
        $data['result'] = $this->info_model->selectinfoId($id);

        $data['tergetPage'] = $this->load->view('edit_form', $data, true);
        $this->load->view('home', $data);
    }

    public function updateinfo($id) {
       
        $data = array();
        $data['full_name'] = $this->input->post('full_name');
        $data['designation'] = $this->input->post('designation');
        $data['email'] = $this->input->post('email');
        $data['mobile_no'] = $this->input->post('mobile_no');
        $data['address'] = $this->input->post('address');
        $data['objectives'] = $this->input->post('objectives');
        $data['department'] = $this->input->post('department');
        $data['type'] = $this->input->post('type');
        $data['status'] = $this->input->post('status');
            $this->load->model("upload");
        if(empty($_FILES['teacher_img']['name'])){
 $data['teacher_img'] = $this->input->post('teacher_img2'); 
        }  else {
            if ($_FILES['teacher_img']['name'] && $_FILES['teacher_img']['size']) {
                $upload_path = 'teacher_img/';
                $result = $this->upload->UploadPhoto('teacher_img', $upload_path);
                if ($result) {
                    $data['teacher_img'] = $result['file_name'];
                }
 }
        
        }

        $this->load->model("info_model");
        $this->info_model->updateProfile($data,$id);
        $_SESSION['message'] = "<span style='color:green;font-weight:bold'>Update Profile Successfully!</span>";
        $this->update_t_info();
    }
    public function view_all_techar(){
        
    }
    public function update_status($id,$vl){
//        $id=$_GET['id'];
//        $vl=$_GET['vl'];
        echo $id;
        $vl2='In_Active';
        $vl1='Active';
        if($vl=='Active'){
            $this->db->set('status','Active');
            $this->db->where('id',$id);
            $daa=$this->db->update('tcacher_info');
            if($daa){
               
            redirect('teachers/teacher','refresh');
            }
         }elseif ($vl=='In_Active') {
         
            $this->db->set('status','In_Active');
            $this->db->where('id', $id);
            $daa=$this->db->update('tcacher_info');
            if($daa){
               
            redirect('teachers/teacher','refresh');
            } 
        
    }
    }
    public function teachers_attendance(){
            $data=array();
          $this->db->select ( '*' );
        $this->db->from ('tcacher_info');
$this->db->where ('status','Active');
        $resultSet = $this->db->get ();
       $data['result']=$resultSet->result();
     $data['tergetPage'] = $this->load->view('teachers_attendance.php',$data, TRUE);
        $this->load->view('home', $data);
    }
    public function teachers_attandence_a($id,$sta){
        $date=date('d/m/Y');
        $this->db->select ( '*' );
        $this->db->from ('tbl_techer_attand');
        $this->db->where('teacher_id',$id);
        $this->db->where('att_date',$date);
        $resultSet = $this->db->get();
    $row=$resultSet->num_rows();
//   print_r($row);
       if($row<1){
           $dataa['teacher_id']=$id;
           $dataa['att_date']=date('d/m/Y');
           $dataa['att_status']=$sta;
         $status=$this->db->insert("tbl_techer_attand",$dataa); 
           if($status){
               
            redirect('teachers/teachers_attendance','refresh');
            }
       }
       elseif ($row>=1) {
   
            $this->db->set('att_status',$sta);
            $this->db->where('teacher_id',$id);
           $this->db->where ('att_date',$date);
            $daa=$this->db->update('tbl_techer_attand');
            if($daa){
               
            redirect('teachers/teachers_attendance','refresh');
            }  
       }
    }
    public function successful_student(){
         $this->db->select ( '*' );
        $this->db->from ('tbl_successful_student');
       
        $resultSet = $this->db->get();
    $data['result']=$resultSet->result();
           $data['tergetPage'] = $this->load->view('successful_student.php',$data, TRUE);
        $this->load->view('home', $data);
    }
    public function successful_student_info(){
      
         $data = array();
        $data['sts_Name'] = $this->input->post('sts_Name');
        $data['current_position'] = $this->input->post('current_position');
        $data['sts_session'] = $this->input->post('sts_session');
        $data['comment'] = $this->input->post('comment');
     $this->load->model("upload");
 if ($_FILES['sts_photo']['name'] && $_FILES['sts_photo']['size']) {
                $upload_path = 'teacher_img/ss_img/';
                $result = $this->upload->UploadPhoto('sts_photo', $upload_path);
                if ($result) {
                   $data['sts_photo'] = $result['file_name'];
                }
 }
 
  $status=$this->db->insert("tbl_successful_student",$data); 
  if($status){
      $return['message'] = 'Save successful';
            $this->session->set_userdata($return);
            redirect('teachers/successful_student','refresh'); 
  }
    }
    public function edit_successful_student($ss_id){
          $this->db->select ( '*' );
        $this->db->from ('tbl_successful_student');
         $this->db->where ('ss_id',$ss_id);
        $resultSet = $this->db->get();
    $data['edit']=$resultSet->row();
           $data['tergetPage'] = $this->load->view('successful_student.php',$data, TRUE);
        $this->load->view('home', $data); 
    }
    public function updat_successful_student_info(){
          $data['sts_Name'] = $this->input->post('sts_Name');
        $data['current_position'] = $this->input->post('current_position');
        $data['sts_session'] = $this->input->post('sts_session');
        $data['comment'] = $this->input->post('comment');
        $data['ss_id'] = $this->input->post('ss_id');
            $this->load->model("upload");
            if(!empty($_FILES['sts_photo']['name'])){
 if ($_FILES['sts_photo']['name'] && $_FILES['sts_photo']['size']) {
                $upload_path = 'teacher_img/ss_img/';
                $result = $this->upload->UploadPhoto('sts_photo', $upload_path);
                if ($result) {
                   $data['sts_photo'] = $result['file_name'];
                }  
 }
    }  else {
    $data['sts_photo'] = $this->input->post('sts_photo2');       
    }
    
    
     $this->db->set('sts_Name',$data['sts_Name']);
     $this->db->set('current_position',$data['current_position']);
     $this->db->set('sts_session',$data['sts_session']);
     $this->db->set('comment',$data['comment']);
     $this->db->set('sts_photo',$data['sts_photo']);
            $this->db->where('ss_id',$data['ss_id']);
          
            $daa=$this->db->update('tbl_successful_student');
    
     if($daa){
      $return['message'] = 'Update successful';
            $this->session->set_userdata($return);
            redirect('teachers/successful_student','refresh'); 
  }
    
    }
    public function delete_successful_student($ss_id){
         $this->db->where('ss_id', $ss_id);
            $result=$this->db->delete('tbl_successful_student');
            
     if($result){
      $return['message'] = 'Delete successful';
            $this->session->set_userdata($return);
            redirect('teachers/successful_student','refresh'); 
  }
    }

}

