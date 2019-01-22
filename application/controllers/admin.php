<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author nibid
 */
class Admin extends CI_Controller{

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('upload');
    }
   public function index(){
        


 $this->load->view('admin_login');

          
          
    }
    public function add_leave(){
        $da=$this->input->post('leave_year');
        if(empty($da)){
            $datat['leave_year']=date('Y');
        }  else {
            $datat['leave_year']=$this->input->post('leave_year');
        }
          $data['tergetPage'] = $this->load->view('add_leave',$datat, TRUE);
        $this->load->view('home', $data); 
    }
    public function save_leave(){
        $data=array();
          $data['techar_id']=$this->input->post('techar_id'); 
          $data['leave_day']=$this->input->post('leave_day'); 
          $data['leave_year']=$this->input->post('leave_year'); 
              $this->db->select ( '*' );
        $this->db->from ('tbl_techer_leave');
        $this->db->where ( 'leave_year', $data['leave_year']);
      $resultSet = $this->db->get ();
        $worng=$resultSet->result();
        if($worng){
               $meg_ss=array();
         $meg_ss['message'] = "<center><font color='red'>All Ready Have</font></center>";
            $this->session->set_userdata($meg_ss);
      redirect('admin/add_leave'); 
    
            
        }  else {
            $result= $this->db->insert('tbl_techer_leave', $data);
       if($result){
               $meg_ss=array();
         $meg_ss['message'] = "<center><font color='green'>Complite............</font></center>";
            $this->session->set_userdata($meg_ss);
      redirect('admin/add_leave');      
       } 
        }
      
    }

    public function apply_for_leave(){
         $data['tergetPage'] = $this->load->view('apply_for_leave','', TRUE);
        $this->load->view('home', $data); 
    }
    public function leave_apply(){
            $data=array();
          $data['to_date']=$this->input->post('to_date'); 
          $data['admin_id']=$this->input->post('admin_id'); 
          $data['apply_action']=$this->input->post('apply_action'); 
          $data['form_date']=$this->input->post('form_date'); 
          $data['duty_resume_on']=$this->input->post('duty_resume_on'); 
          $data['cause_of_leave']=$this->input->post('cause_of_leave'); 
          $data['address']=$this->input->post('address'); 
          $data['number_of_day']=$this->input->post('number_of_day'); 
          $data['techar_id']=$this->input->post('techar_id'); 
          $this->db->select ( '*' );
        $this->db->from ('tbl_applay_for_leave');
        $this->db->where ( 'admin_id',$data['admin_id']);
        $this->db->where ( 'to_date',$data['to_date']);
        $this->db->where ( 'form_date ',$data['form_date ']);
        $this->db->where ( 'number_of_day',$data['number_of_day']);
      $resultSet = $this->db->get ();
        $worng=$resultSet->result();
        if($worng){
               $meg_ss=array();
         $meg_ss['message'] = "<center><font color='red'>All Ready Have</font></center>";
            $this->session->set_userdata($meg_ss);
      redirect('admin/apply_for_leave'); 
    
            
        }  else {
          $result=$this->db->insert('tbl_applay_for_leave',$data);
       if($result){
               $meg_ss=array();
         $meg_ss['message'] = "<center><font color='green'>Complite............</font></center>";
            $this->session->set_userdata($meg_ss);
      redirect('admin/apply_for_leave');      
       } 
        }
    }
    public function approveForLeaveList(){
         $this->db->select('*');
                         $this->db->from('tbl_applay_for_leave');
                    $this->db->join('tcacher_info', 'tcacher_info.id = tbl_applay_for_leave.techar_id', 'left');
//                    $this->db->join('tbl_techer_leave', 'tbl_techer_leave.techar_id = tbl_applay_for_leave.techar_id', 'left');

        $this->db->where('apply_action','0');
        $query = $this->db->get();
        $darr['result']=$query->result();
        $data['tergetPage'] = $this->load->view('approveForLeaveList',$darr, TRUE);
        $this->load->view('home', $data); 
    }
    public function approve_leavee($apply_id,$techar_id,$number_of_day){
        echo $apply_id;
        echo '<br>';
        echo $techar_id;
//        $this->db->set('apply_action', 'my_field+1', FALSE);
        $this->db->set('apply_action', '1');
$this->db->where('techar_id',$techar_id);
$this->db->where('apply_id',$apply_id);
$ok=$this->db->update('tbl_applay_for_leave');
if($ok){
            $this->db->set('leave_day', "leave_day-$number_of_day", FALSE);
      
$this->db->where('techar_id',$techar_id);
$this->db->where('leave_year',date('Y'));
$complite=$this->db->update('tbl_techer_leave');
if($complite){
          $meg_ss=array();
         $meg_ss['message'] = "<center><font color='green'>Complite............</font></center>";
            $this->session->set_userdata($meg_ss);
      redirect('admin/approveForLeaveList'); 
}
    }
    }

    public function chack_login(){
        
   $admin_email = $this->input->post('admin_email'); 
    $admin_password= md5($this->input->post('admin_password')); 
        
    $this->db->select ( '*' );
        $this->db->from ('tbl_admin');
        $this->db->where ( 'admin_email', $admin_email );
        $this->db->where ( 'admin_password',$admin_password );

        $resultSet = $this->db->get ();
        $result=$resultSet->result();
    
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'admin_id' => $row->admin_id,
         'admin_full_name' => $row->admin_full_name,
         'techar_id' => $row->techar_id

       );
$sess_array['sss']='1';
       $this->session->set_userdata($sess_array);

     }
     redirect('admin/home', 'refresh');
   }  else {
       $meg_ss=array();
         $meg_ss['message'] = "<center><font color='red'>Email Or Password Wrong</font></center>";
            $this->session->set_userdata($meg_ss);
      redirect('admin/index');  
   }
    
  
 
}
 public function logout(){
//          $data=array();
//         $data['UserID'] = $this->session->userdata('UserID');
        $arraay_items = array('admin_id' => '', 'admin_full_name' => '');
        $this->session->unset_userdata($arraay_items);
         redirect('home/index');
    }

public function updat_password(){
    $data['password']=$this->input->post('password'); 
    $data['new_password']=$this->input->post('new_password'); 
    $admin_id=$this->session->userdata('admin_id');
     $this->db->select ( '*' );
        $this->db->from ('tbl_admin');
        $this->db->where ( 'admin_id',$admin_id );
        $this->db->where ( 'admin_password',md5($data['password']));

        $resultSet = $this->db->get ();
        $result=$resultSet->result();
        if($result){
            $this->db->set('admin_password', md5($data['new_password']));
        $this->db->where('admin_id',$admin_id);   
              $daa=$this->db->update('tbl_admin');
              if($daa){
                      $meg_ss['message'] = "<center><font color='green'>Admin Add Complite</font></center>";
            $this->session->set_userdata($meg_ss);
            redirect('admin/change_password');   
              }  else {
                   $meg_ss['message'] = "<center><font color='green'>Try Aftar S0me Time</font></center>";
            $this->session->set_userdata($meg_ss);
            redirect('admin/change_password');      
              }
        }  else {
                   $meg_ss['message'] = "<center><font color='green'>Old Password Is Worng</font></center>";
            $this->session->set_userdata($meg_ss);
            redirect('admin/change_password');  
        }
   
//     $this->db->set('comment',$data['comment']);
//     $this->db->set('sts_photo',$data['sts_photo']);
//            $this->db->where('ss_id',$data['ss_id']);
//          
//            $daa=$this->db->update('tbl_successful_student');
}

public function home(){
        $data['tergetPage'] = $this->load->view('home_content', '', TRUE);
        $this->load->view('home', $data);
    }
    public function add_admin(){
        $data['tergetPage'] = $this->load->view('add_admin', '', TRUE);
        $this->load->view('home', $data);
    }
    public function admin_registetion(){
 $data = array();
        $firstname= $this->input->post('admin_firstname');
        $lastname= $this->input->post('admin_lastname');
        $data['admin_full_name']= $firstname.' '.$lastname;
        $data['admin_phon_number']= $this->input->post('admin_phon_number');
        $data['admin_email']= $this->input->post('admin_email');
        $data['admin_password']= md5($this->input->post('admin_password'));
        $data['admin_type']= $this->input->post('admin_type');
        $data['techar_id']= $this->input->post('techar_id');
          $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email',$data['admin_email']);
        $this->db->where('admin_phon_number',$data['admin_phon_number']);
        $query = $this->db->get();
        $num_row=$query->num_rows();
        if($num_row<1){
        $admin=$this->db->insert('tbl_admin',$data);
        if($admin){
            
                 $meg_ss['exseption_error'] = "<center><font color='green'>Admin Add Complite</font></center>";
            $this->session->set_userdata($meg_ss);
            redirect('admin/add_admin');
            
        }
    }  else {
             $meg_ss['exseption_error'] = "<center><font color='red'>This User Already Have This Wed Site</font></center>";
            $this->session->set_userdata($meg_ss);
            redirect('admin/add_admin');
    }
    }
        public function view_admin_list(){
           $this->db->select('*');
        $this->db->from('tbl_admin');
 $query = $this->db->get();
        $result['result']=$query->result();
        $data['tergetPage'] = $this->load->view('view_admin',$result, TRUE);
        $this->load->view('home', $data);
    }
    
        public function admin_active(){
     $value = $_GET['valu'];
        $valu = explode("=", $value);
        $user_id = $valu[1];
     $status = $valu[0];
        $this->db->set('admin_action', $status);
        $this->db->where('admin_id', $user_id);
        $updat = $this->db->update('tbl_admin');
        if ($updat) {
            $this->db->select('*');
            $this->db->from('tbl_admin');
            $query = $this->db->get();
            $result = $query->result();
            ?>  
           <table class="table table-bordered table-striped">  

<thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Amdin Name</th>
                                                    <th>Admin Email</th>
                                                    <th>Admin Phone Number</th>
                                                    <th>Type</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
        
    <?php
                                                $sl=1;
                                                                                    foreach ($result as $AInfo){
                                                ?>
                                                <tr>
                                                    <td><?php echo $sl++; ?></td>
                                                    <td><?php echo $AInfo->admin_full_name; ?></td>
                                                    <td><?php echo $AInfo->admin_email; ?></td>
                                                    <td><?php echo $AInfo->admin_phon_number; ?></td>
                                                    <td>
                                                            <?php
                                                            $type = $AInfo->admin_type;
                                                            if ($type == 1) {
                                                                echo 'Admin';
                                                            } elseif ($type == 2) {
                                                                echo 'Sub Admin';
                                                            }
                                                            ?>

                                                        </td>
                                                        <td>
                                                              <?php
                                                            $action=$AInfo->admin_action;
                                                            if ($action == 0) {
                                                                ?>
                                                            <img src="<?php echo base_url(); ?>design/ico-warning.gif">
                                                            <?php
                                                            } elseif ($action == 1) {
                                                              ?>
                                                                 <img src="<?php echo base_url(); ?>design/ico-done.gif">
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                <button class="btn btn-xs btn-sm btn-danger" value="1=<?php echo $AInfo->admin_id ?>"  onclick="showCustomer(this.value)"><img src="<?php echo base_url(); ?>design/notification-tick.gif"></button>
                                                <button class="btn btn-xs btn-sm btn-success"  value="0=<?php echo $AInfo->admin_id ?>"  onclick="showCustomer(this.value)"><img src="<?php echo base_url(); ?>design/ico-warning.gif"></button>
                                                  
                                                        </td>
                                                </tr>
                                                                                    <?php } ?>
                                            </tbody>
                                                   </table>
<?php
    }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function updateMyProfile() {

//        $data['tergetPage'] = $this->load->view('updateMyProfile', '', TRUE);
        $this->load->view('login');
    }

    public function usersList() {
        $return['user_select'] = $this->admin_model->selectInfo('*', 'tbl_users');
        $data['tergetPage'] = $this->load->view('userList', $return, TRUE);
        $this->load->view('home', $data);
    }

    public function notice() {
//    public function notice($return = '') {
//        echo $return['msg'] = $return;
        $return['notice_select'] = $this->admin_model->selectAllNotice();
        $data['tergetPage'] = $this->load->view('notice', $return, TRUE);
        $this->load->view('home', $data);
    }
    public function NoticePublish($status,$id){
        $this->admin_model->changeNoticeStatus($status,$id);
        redirect('../admin/notice','refresh');
        
    }

    public function noticeAdd() {
        if ($this->input->post('upload')) {
            $data['notice_title'] = $this->clearExtaString($this->input->post('notice_title'));
            $data['notice_details'] = $this->clearExtaString($this->input->post('notice_title'));
            $data['publish'] = $this->clearExtaString($this->input->post('publish'));
            $data['upload_date'] = date('Y-m-d');
//        $data['pdf'] = $this->input->post('notice_pdf');

//            $fileField = 'notice_pdf';
            
                 if ($_FILES['notice_pdf']['name'] && $_FILES['notice_pdf']['size']) {
                $upload_path = 'user_upload/notice/';
                $result = $this->upload->UploadPhoto('notice_pdf', $upload_path);
                if ($result) {
                    $data['pdf'] = $result['file_name'];
                    $insert = $this->admin_model->insertData('tbl_notice', $data);
                $return['msg'] = ' Successfully Uploaded....';
            $this->session->set_userdata($return);
            redirect('../admin/notice','refresh');
                }  else {
                     redirect('../admin/notice','refresh');
                }
 } 
            

            $return['msg'] = $msg;
            $this->session->set_userdata($return);
            redirect('../admin/notice','refresh');
            
        } else {
            redirect('../admin/notice','refresh');
        }
    }
    public function notis_delete($notice_id){
       $this->db->where('notice_id', $notice_id);
$rr=$this->db->delete('tbl_notice');  
if($rr){
     redirect('../admin/notice','refresh');
}
    }

    public function addNewAdmin() {
        if ($this->input->post('user_name') != '' && $this->input->post('user_email') != '' && $this->input->post('password')) {
            if ($this->input->post('password') == $this->input->post('con_password')) {
                $input['user_name'] = $this->clearExtaString($this->input->post('user_name'));
                $input['user_email'] = $this->clearExtaString($this->input->post('user_email'));
                $input['password'] = md5($this->clearExtaString($this->input->post('password')) . $this->extraPassword);

                if ($this->admin_model->insertData('tbl_users', $input)) {
                    echo 'success';
                }
            } else {
                echo $return['msg'] = 'Password not match.';
            }
        } else {
            echo $return['msg'] = 'Fill all fields.';
        }
    }

    public function loginCheck() {


        if ($this->input->post('user_name') != '' && $this->input->post('password') != '') {
            $email = $input['user_name'] = $this->clearExtaString($this->input->post('user_name'));
            $password = $input['password'] = ($this->clearExtaString($this->input->post('password')));

            $result = $this->admin_model->checkUser($email, $password);
            if ($result) {
                $sess_array = array();
                foreach ($result as $row) {
                    $sess_array = array(
                        'admin_id' => $row->admin_id,
                        'admin_full_name' => $row->admin_full_name
                    );
                    $this->session->set_userdata($sess_array);
                }
                echo 'True';
            } else {
                echo 'False';
            }
        } else {
            echo $return['msg'] = 'Fill all fields.';
        }
    }

    public function syllabus() {
//        $return['notice_select'] = $this->admin_model->selectAllNotice();
        $return['syllabus_select'] = $this->admin_model->selectAllSyllabus();
//        $return['providhan_select'] = $this->admin_model->selectInfo('*', 'tbl_providhan');
//        $return['semester_select'] = $this->admin_model->selectInfo('*', 'tbl_semester');
//        $return['department_select'] = $this->admin_model->selectInfo('*', 'tbl_department');
        $data['tergetPage'] = $this->load->view('syllabus', $return, TRUE);
        $this->load->view('home', $data);
    }

    public function syllabusAdd() {
//        print_r($_POST);
        $input['syl_name'] = $this->clearExtaString($this->input->post('syl_name'));
//        $input['sem_id'] = $this->clearExtaString($this->input->post('sem_id'));
        $input['dept_id'] = $this->clearExtaString($this->input->post('dept_id'));
        $input['prob_id'] = $this->clearExtaString($this->input->post('prob_id'));
//        $input['s_type'] = $this->clearExtaString($this->input->post('s_type'));
 $ret= $this->admin_model->check_selectAllSyllabus($input);
 if(empty($ret)){
        $fileField = 'syllabus_pdf';
        if ($_FILES[$fileField]['name'] && $_FILES[$fileField]['size']) {
            $result = $this->fileUpload('user_upload/syllabus/', $fileField, 'pdf');
            if ($result['file_name']) {
                list($folder, $syl, $input['pdf']) = explode('/', $result['file_name']);
                $insert = $this->admin_model->insertData('tbl_syllabus', $input);
                if ($insert) {
                    $msg = '<p class="msg done"> Successfully Uploaded.... </p>';
                } else {
                    $msg = '<pre class="msg error"> Data Not Inserted...</pre>';
                }
            } else {
                $msg = '<pre class="msg error">' . $result['error'] . '</pre>';
            }
        }
       
        $return['msg'] = $msg;
        $this->session->set_userdata($return);
        $return['syllabus_select'] = $this->admin_model->selectAllSyllabus();
        $page['tergetPage'] = $this->load->view('syllabus', $return, TRUE);
        $this->load->view('home', $page);
 }  else {
      $msg = '<pre class="msg error"> Data All Ready Have...</pre>';
      $return['msg'] = $msg;
        $this->session->set_userdata($return);
        $return['syllabus_select'] = $this->admin_model->selectAllSyllabus();
        $page['tergetPage'] = $this->load->view('syllabus', $return, TRUE);
        $this->load->view('home', $page); 
 }
//        syl_id
    }
    public function syllabus_edit($syl_id){
     $resul=array();
         $this->db->select('*');
        $this->db->from('tbl_syllabus');
        $this->db->where('syl_id', $syl_id);
//        $this->db->where('password', $password);
        $query = $this->db->get();
        $resul['syllabus']=$query->row();
         $page['tergetPage'] = $this->load->view('syllabus_edit', $resul, TRUE);
        $this->load->view('home', $page); 
    }
    public function syllabusUpdat(){
          $input['syl_id'] = $this->clearExtaString($this->input->post('syl_id'));
          $input['syl_name'] = $this->clearExtaString($this->input->post('syl_name'));
            $input['dept_id'] = $this->clearExtaString($this->input->post('dept_id'));
        $input['prob_id'] = $this->clearExtaString($this->input->post('prob_id'));
        if(!empty($_FILES['syllabus_pdf']['name'])){
         if ($_FILES['syllabus_pdf']['name'] && $_FILES['syllabus_pdf']['size']) {
                $upload_path = 'user_upload/syllabus';
                $result = $this->upload->UploadPhoto('syllabus_pdf', $upload_path);
                if ($result) {
                    $input['pdf'] = $result['file_name'];
                }
 }
        }  else {
            $input['pdf'] = $this->$this->input->post('syllabus_pdf2');
        }
        
         $updat = $this->admin_model->updat_syllabusData($input);
         if($updat){
         
         $return['msg'] = 'Update complite....';
            $this->session->set_userdata($return);
            redirect('admin/syllabus','refresh'); 
         }
        
    }
    public function syllabus_delete($syl_id){
        $this->db->where('syl_id',$syl_id);
$delet=$this->db->delete('tbl_syllabus'); 
if($delet){
       $return['msg'] = 'Delete complite....';
            $this->session->set_userdata($return);
            redirect('admin/syllabus','refresh'); 
}
    }

    public function dept_sem() {
        $return['dept_select'] = $this->admin_model->selectInfo('*', 'tbl_department');
        $return['sem_select'] = $this->admin_model->selectInfo('*', 'tbl_semester');
        $page['tergetPage'] = $this->load->view('dept_sem', $return, TRUE);
        $this->load->view('home', $page);
    }

    public function departmentAdd() {
        $input['dept_code'] = $this->clearExtaString($this->input->post('dept_code'));
        $input['dept_name'] = $this->clearExtaString($this->input->post('dept_name'));
        $input['dept_head'] = $this->clearExtaString($this->input->post('dept_head'));
        if ($this->admin_model->insertData('tbl_department', $input)) {
            $session['msg'] = '<p class="msg done"> Successfully Inserted.... </p>';
        } else {
            $session['msg'] = '<pre class="msg error"> Data Not Inserted...</pre>';
        }
        $this->session->set_userdata($session);
        $this->dept_sem();
    }

    public function semesterAdd() {
        $input['sem_name'] = $this->clearExtaString($this->input->post('sem_name'));
        if ($this->admin_model->insertData('tbl_semester', $input)) {
            $session['msg'] = '<p class="msg done"> Successfully Inserted.... </p>';
        } else {
            $session['msg'] = '<pre class="msg error"> Data Not Inserted...</pre>';
        }
        $this->session->set_userdata($session);
        $this->dept_sem();
    }
     public function deleteDept($id) {
        if ($this->admin_model->deleteData('tbl_department', 'dept_id', $id)) {
            $session['msg'] = '<p class="msg error"> Successfully Deleted.... </p>';
        } else {
            $session['msg'] = '<pre class="msg error"> Data Not Delete...</pre>';
        }
        $this->session->set_userdata($session);
        $this->dept_sem();
    }
     public function deleteSem($id) {
        if ($this->admin_model->deleteData('tbl_semester', 'sem_id', $id)) {
            $session['msg'] = '<p class="msg error"> Successfully Deleted.... </p>';
        } else {
            $session['msg'] = '<pre class="msg error"> Data Not Delete...</pre>';
        }
        $this->session->set_userdata($session);
        $this->dept_sem();
    }
    public function change_password(){
         $page['tergetPage'] = $this->load->view('change_password','', TRUE);
        $this->load->view('home', $page);
    }
}
