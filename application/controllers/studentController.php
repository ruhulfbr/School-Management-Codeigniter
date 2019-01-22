<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of studentController
 *
 * @author habib
 */
class studentController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('info_model');
        $this->load->model('upload');
        $this->load->helper('url'); //You should autoload this one ;)
        $this->load->helper('ckeditor');
    }

    public function view_student_info_add() {
        $data['tergetPage'] = $this->load->view('student_info_add_form', '', TRUE);
        $this->load->view('home', $data);
    }

    public function student_info_insert() {
        $data = array();
        $data['date'] = $this->clearExtaString($this->input->post('date'));
        $data['student'] = $this->clearExtaString($this->input->post('student'));
        $data['smobile'] = $this->input->post('smobile');
        $data['father'] = $this->input->post('father');
        $data['fmobile'] = $this->input->post('fmobile');
        $data['mother'] = $this->input->post('mother');
        $data['mmobile'] = $this->input->post('mmobile');
        $data['village'] = $this->input->post('village');
        $data['po'] = $this->input->post('po');
        $data['upazilla'] = $this->input->post('upazilla');
        $data['district'] = $this->input->post('district');
        $data['pvillage'] = $this->input->post('pvillage');
        $data['ppo'] = $this->input->post('ppo');
        $data['pupazilla'] = $this->input->post('pupazilla');
        $data['pdistrict'] = $this->input->post('pdistrict');
        $data['guardian'] = $this->input->post('guardian');
        $data['gmobile'] = $this->input->post('gmobile');
        $data['gvillage'] = $this->input->post('gvillage');
        $data['gpo'] = $this->input->post('gpo');
        $data['gupazilla'] = $this->input->post('gupazilla');
        $data['gdistrict'] = $this->input->post('gdistrict');
        $data['birth'] = $this->input->post('birth');
        $data['class'] = $this->input->post('class');
        $data['section'] = $this->input->post('section');
        $data['roll'] = $this->input->post('roll');
        $data['academic'] = $this->input->post('academic');
        $data['subject'] = $this->input->post('subject');
        $data['blood'] = $this->input->post('blood');
        $data['sex'] = $this->input->post('sex');
        $data['sta'] = $this->input->post('sta');
        $data['email'] = $this->input->post('email');
        $data['hobby'] = $this->input->post('hobby');
        $data['song'] = $this->input->post('song');
        $data['game'] = $this->input->post('game');
        $data['student_id'] = $this->input->post('student_id');
       
             $this->load->model("upload");
 if ($_FILES['student_photo']['name'] && $_FILES['student_photo']['size']) {
                $upload_path = 'student/';
                $result = $this->upload->UploadPhoto('student_photo', $upload_path);
                if ($result) {
                   $data['image'] = $result['file_name'];
                }
 }
        $resul = $this->info_model->add_student_information($data);
        $rr['info_id']= $resul;
        $rr['roll_no']=  $data['roll'] ;
        $rr['student_id']= $data['student_id'] ;
        $rr['st_class']= $data['class'];
        $rr['cl_year']= date('Y');
         $this->db->insert("tbl_student_roll",$rr);
        
        if ($resul) {
            $return['msg'] = 'Successfully Uploaded....';
            $this->session->set_userdata($return);
            redirect('studentController/view_student_info_add', 'refresh');
        }
    }

    public function add_subject() {
        $data['tergetPage'] = $this->load->view('add_subject', '', TRUE);
        $this->load->view('home', $data);
    }

    public function insert_subject() {
        $data = array();
        $data['class'] = $this->input->post('class');
        $data['subject_name'] = $this->input->post('subject_name');
        $data['sub_action'] = '1';
        $resul = $this->info_model->insert_subject_name($data);
        if ($resul) {
            $return['msg'] = 'Successfully Complite....';
            $this->session->set_userdata($return);
            redirect('studentController/add_subject', 'refresh');
        }
    }

    public function delete_subject($sub_id) {
        $this->db->where('sub_id', $sub_id);
        $result = $this->db->delete('tbl_subject');
        if ($result) {
            $return['msg'] = 'Successfully complite';
            $this->session->set_userdata($return);
            redirect('studentController/add_subject', 'refresh');
        }
    }

    public function add_mark() {
        $data['tergetPage'] = $this->load->view('add_mark', '', TRUE);
        $this->load->view('home', $data);
    }

    public function select_subject() {
        $this->load->view('filtar_subject');
    }

    public function insert_subject_mark() {
        $data = array();
        $data['Student_id'] = $this->input->post('Student_id');
        $data['student_roll'] = $this->input->post('student_roll');
        $data['year'] = $this->input->post('year');
        $data['student_class'] = $this->input->post('class');
        $data['exam_term'] = $this->input->post('exam_term');
        $data['subject1'] = $this->input->post('subject1');
        $data['subject2'] = $this->input->post('subject2');
        $data['subject3'] = $this->input->post('subject3');
        $data['subject4'] = $this->input->post('subject4');
        $data['subject5'] = $this->input->post('subject5');
        $data['subject6'] = $this->input->post('subject6');
        $data['subject7'] = $this->input->post('subject7');
        $data['subject8'] = $this->input->post('subject8');
        $data['subject9'] = $this->input->post('subject9');
        $data['subject10'] = $this->input->post('subject10');
        $this->db->select('*');
        $this->db->from('tbl_mark');
        $this->db->where('student_class', $data['student_class']);
        $this->db->where('year', $data['year']);
        $this->db->where('Student_id', $data['Student_id']);
        $resultSet = $this->db->get();
        $check = $resultSet->row();
        if (empty($check)) {
//    $data['roll'] = $this->input->post('roll');
//    $data['year'] =date('Y');
            $table = 'tbl_mark';
            $resul = $this->info_model->insert_subject_mark($table, $data);
            if ($resul) {
                $return['msg'] = 'Successfully Complite....';
                $this->session->set_userdata($return);
                redirect('studentController/add_mark', 'refresh');
            }
        } else {
            $return['msg'] = 'All Ready Exist....';
            $this->session->set_userdata($return);
            redirect('studentController/add_mark', 'refresh');
        }
    }

    public function view_class_subject() {
        $data['tergetPage'] = $this->load->view('view_class_subject', '', TRUE);
        $this->load->view('home', $data);
    }

    public function view_one_student_result() {
         $data['tergetPage'] = $this->load->view('view_one_student_result', '', TRUE);
        $this->load->view('home', $data);
       
    }
    public function select_one_student_result() {
//        print_r($_POST);
         $data = array();
        $data['student_id'] = $this->input->post('student_id');
        $data['exam_term'] = $this->input->post('exam_term');
        $data['year'] = $this->input->post('year');
        $data['student_class'] = $this->input->post('class');
        $this->db->select ( '*' );
        $this->db->from ('tbl_mark');
        $this->db->where ( 'student_class',  $data['student_class']);
        $this->db->where ( 'year',  $data['year']);
        $this->db->where ( 'exam_term',  $data['exam_term']);
        $resultSet = $this->db->get ();
       $res['result']=$resultSet->result();
          $res['class']=$this->input->post('class');
          $res['student_id']=$data['student_id'];
         $data['tergetPage'] = $this->load->view('view_one_student_result',$res, TRUE);
        $this->load->view('home', $data);
       
    }
    public function select_class_subject() {
        $this->load->view('filtar_class_subject');
    }
    public function select_class_result() {
          $data = array();
        $data['student_class'] = $this->input->post('class');
        $data['year'] = $this->input->post('year');
          $this->db->select ( '*' );
        $this->db->from ('tbl_mark');
        $this->db->where ( 'student_class',  $data['student_class']);
        $this->db->where ( 'year',  $data['year']);
        $resultSet = $this->db->get ();
       $res['result']=$resultSet->result();
       $res['class']=$this->input->post('class');
        
         $datat['tergetPage'] = $this->load->view('view_class_result', $res, TRUE);
        $this->load->view('home', $datat);
    }

    public function improvement() {
        $data['tergetPage'] = $this->load->view('improvement', '', TRUE);
        $this->load->view('home', $data);
    }
    public function select_student_imp() {
//        print_r($_POST);
          $data = array();
          if(empty($_POST)){
          $impp=$_GET['imp'];
           $imp=str_replace('.jsp','',$impp);
         
              $data['student_class'] =$imp;
          }  else {
              $data['student_class'] = $this->input->post('class');
          }
        
          $this->db->select ( '*' );
//        $this->db->from ('tbl_student_roll');
        
        $this->db->from('tbl_student_roll');
$this->db->join('tbl_stdinfo', 'tbl_stdinfo.student_id = tbl_student_roll.student_id');
        $this->db->where ( 'st_class',$data['student_class']);
//        $this->db->where ( 'st_class',$data['student_class']);
        $resultSet = $this->db->get ();
       $res['result']= $resultSet->result();
        $data['tergetPage'] = $this->load->view('improvement',$res, TRUE);
        $this->load->view('home', $data);
    }
    public function student_imp($student_id,$info_id,$roll_no,$class){
  $this->db->select ( '*' );
        $this->db->from ('tbl_student_roll');
        $this->db->where ('student_id', $student_id );
        $this->db->where ('cl_year', date('Y') );
         $query = $this->db->get ();
        $impr=$query->row(); 
        if(empty($impr)){
            $datat['info_id']=$info_id;
            $datat['roll_no']=$roll_no;
             $datat['student_id']=$student_id;
            $datat['st_class']=$class+1;
           
            $datat['cl_year']=date('Y');
          
            
               $status=$this->db->insert("tbl_student_roll",$datat);
               if($status){
                   
       
        $return['ex'] = 'Update Ok...';
            $this->session->set_userdata($return);
            redirect("studentController/select_student_imp?imp=$class");

                     
            
               }
         
        }  else {
        $return['ex'] = 'Already Have';
            $this->session->set_userdata($return);  

                        redirect("studentController/select_student_imp?imp=$class");

        }
        
    }

    public function select_class_attendance() {
        $data['tergetPage'] = $this->load->view('select_class_attendance', '', TRUE);
        $this->load->view('home', $data);
    }

    public function select_class_student() {
        $table = 'tbl_stdinfo';
        $datat = array();
        $class = $this->input->post('class');
        $datat['resul'] = $this->info_model->select_student( $class);
//        $datat['month'] = $this->info_model->select_student_fees_month($class);
//        $datat['exam'] = $this->info_model->select_student_fees_exam($class);
//        $datat['extra'] = $this->info_model->select_student_fees_extra($class);
        $datat['row'] = $this->info_model->select_number_row_student($table, $class);
        if ($datat['resul']) {
            $data['tergetPage'] = $this->load->view('class_attendance', $datat, TRUE);
            $this->load->view('home', $data);
        } else {
            $return['ex'] = 'Have No Result...';
            $this->session->set_userdata($return);
            redirect('studentController/select_class_attendance', 'refresh');
        }
//     $this->db->query("UPDATE tbl_stdinfo SET Class=1");
    }

    public function insert_attendance() {
//    echo '<pre>';
//    print_r($_POST);
        $student_status = $_POST['student_status'];
        $class_name = $_POST['class_name'];
        $student_id = $_POST['student_id'];
        $student_roll = $_POST['student_roll'];
        $student_name = $_POST['student_name'];
        $attend_date = $_POST['attend_date'];

//    echo "</pre>";
        $i = 0;
//    foreach($_POST as $Key=>$value){
        for ($r = 0; $r < count($class_name); $r++) {
$insert = $this->db->query("INSERT INTO tbl_attendance (student_id,student_roll,student_name,class_name,attend_date,student_status)
                      values ('$student_id[$r]','$student_roll[$r]','$student_name[$r]','$class_name[$r]','$attend_date[$r]','$student_status[$r]')");
        }
    $i++;
//    }

        $return['ex'] = 'complite....';
        $this->session->set_userdata($return);
        redirect('studentController/select_class_attendance', 'refresh');
    }

    public function updat_class_present_status() {
        $this->load->view('home/filtar_absent_states');
    }

    public function accept_fees_page_only_one() {
        $data['tergetPage'] = $this->load->view('accept_fees_page_only_one', '', TRUE);
        $this->load->view('home', $data);
    }

    public function add_student_fee() {
        $data['fclass'] = $this->input->post('class_name');
        $data['student_id_fee'] = $this->input->post('stduent_id');
        $data['month'] = $this->input->post('month');
        $data['fee_momth_status'] = $this->input->post('fee');
        $data['day'] = date('d');
        $data['fyear'] = date('Y');
        $data['month_date'] = $data['day'] . '/' . $data['month'] . '/' . $data['fyear'];
        $this->db->select('*');
        $this->db->from('tbl_month_fee');
        $this->db->where('fclass', $data['fclass']);
        $this->db->where('student_id_fee', $data['student_id_fee']);
        $this->db->where('month', $data['month']);
        $query = $this->db->get();
        $dat = $query->row();
        $datat['stduent_id'] = $this->input->post('stduent_id');
        $datat['class_name'] = $this->input->post('class_name');
        if (empty($dat)) {
            $status = $this->db->insert("tbl_month_fee", $data);

            $data['class_name'] = $this->input->post('class_name');
            $data['stduent_id'] = $this->input->post('stduent_id');

            $this->db->select('*');
            $this->db->from('tbl_fee');
            $this->db->where('class_id', $data['class_name']);
            $this->db->where('type', '1');
            $query = $this->db->get();
            $datat['fee'] = $query->row();
            $this->db->select('*');
            $this->db->from('tbl_month_fee');
            $this->db->where('fclass', $data['class_name']);
            $this->db->where('student_id_fee', $data['stduent_id']);
            $query = $this->db->get();
            $datat['month'] = $query->result();
            $return['message'] = 'complite....';
            $this->session->set_userdata($return);
            $data['tergetPage'] = $this->load->view('accept_fees_page_only_one', $datat, TRUE);
            $this->load->view('home', $data);
        } else {

            $data['class_name'] = $this->input->post('class_name');
            $data['stduent_id'] = $this->input->post('stduent_id');
            $this->db->select('*');
            $this->db->from('tbl_fee');
            $this->db->where('class_id', $data['class_name']);
            $this->db->where('type', '1');
            $query = $this->db->get();
            $datat['fee'] = $query->row();
            $this->db->select('*');
            $this->db->from('tbl_month_fee');
            $this->db->where('fclass', $data['class_name']);
            $this->db->where('student_id_fee', $data['stduent_id']);
            $query = $this->db->get();
            $datat['month'] = $query->result();
            $return['message'] = 'Already Habe....';
            $this->session->set_userdata($return);
            $data['tergetPage'] = $this->load->view('accept_fees_page_only_one', $datat, TRUE);
            $this->load->view('home', $data);
        }
    }

    public function select_one_student_for_fees() {
        echo $data['class_name'] = $this->input->post('class_name');
        echo $data['Student_id'] = $this->input->post('Student_id');
        $this->db->select('*');
        $this->db->from('tbl_fee');
        $this->db->where('class_id', $data['class_name']);
        $this->db->where('type', '1');
        $query = $this->db->get();
        $datat['fee'] = $query->row();
        $this->db->select('*');
        $this->db->from('tbl_month_fee');
        $this->db->where('fclass', $data['class_name']);
        $this->db->where('student_id_fee', $data['Student_id']);
        $query = $this->db->get();
        $datat['month'] = $query->result();
        $datat['stduent_id'] = $this->input->post('Student_id');
        $datat['class_name'] = $this->input->post('class_name');
        $data['tergetPage'] = $this->load->view('accept_fees_page_only_one', $datat, TRUE);
        $this->load->view('home', $data);
    }
    public function search_class_attendance() {

        $data['tergetPage'] = $this->load->view('search_class_attendance', '', TRUE);
        $this->load->view('home', $data);
    }

    public function view_class_attendance() {
    
        $data = array();
        $result = array();
        $data['class_name'] = $this->input->post('class_name');
        $data['attend_date'] = $this->input->post('attend_date');
        $table = 'tbl_stdinfo';

        $result['result'] = $this->info_model->select_student_attendanc_view($data);

        if ($result['result']) {
            $data['tergetPage'] = $this->load->view('view_class_attendance', $result, TRUE);
            $this->load->view('home', $data);
        } else {
            $return['ex'] = 'Eroor....';
            $this->session->set_userdata($return);
            redirect('studentController/search_class_attendance', 'refresh');
        }
    }

    public function add_class_fees() {
        $data['tergetPage'] = $this->load->view('add_class_fees', '', TRUE);
        $this->load->view('home', $data);
    }
    public function view_class_result() {
        $data['tergetPage'] = $this->load->view('view_class_result', '', TRUE);
        $this->load->view('home', $data);
    }

    public function add_student_fees() {
       $data = array();
        $data['class_id'] = $this->input->post('class_id');
        $type = $this->input->post('type');
        if ($type == 1) {
            $data['month_fee'] = $this->input->post('amount');
            $data['in_date'] = date('1/m/Y');
            $data['type'] = 1;
        } elseif ($type == 2) {
            $data['Exam_fee'] = $this->input->post('amount');
            $data['in_date'] = date('1/m/Y');
            $data['type'] = 2;
        } elseif ($type == 3) {
            $data['Extra_free'] = $this->input->post('amount');
            $data['in_date'] = date('1/m/Y');
            $data['type'] = 3;
        }
        $this->db->select('*');
        $this->db->from('tbl_fee');
        $this->db->where('class_id', $data['class_id']);
        $this->db->where('type', $data['type']);
        $query = $this->db->get();
        $select = $query->result();
        if (!$select) {
            $this->db->insert('tbl_fee', $data);
            $return['message'] = 'Complite....';
            $this->session->set_userdata($return);
            redirect('studentController/add_class_fees', 'refresh');
        } else {
         $return['message'] = 'All ready Enter Your Data....';
            $this->session->set_userdata($return);
            redirect('studentController/add_class_fees', 'refresh');
        }
    }

    public function accept_fees_page() {
  $data['tergetPage'] = $this->load->view('accept_fees_page', '', TRUE);
        $this->load->view('home', $data);
    }

    public function select_student_for_fees() {
        $data = array();
        $result = array();
        $data['class_name'] = $this->input->post('class_name');
        $class = $this->input->post('class_name');
        $result['result'] = $this->info_model->select_student_for_fees($data);
        $result['month'] = $this->info_model->select_student_fees_month($class);
        $result['exam'] = $this->info_model->select_student_fees_exam($class);
        $result['extra'] = $this->info_model->select_student_fees_extra($class);
        if ($result['result']) {
            $data['tergetPage'] = $this->load->view('accept_fees_page', $result, TRUE);
            $this->load->view('home', $data);
        }
    }

    public function pray_month_fee() {

        $this->load->view('filter_month_fee');
        // echo date('t-m-Y') ;
        // echo date('t-m-Y') ;
        //       $this->db->select ( '*' );
        //  $this->db->from ('tbl_month_fee');
        //  $this->db->where ('student_id_fee',$student_id_fee);
        //   // $this->db->where ('active_s','1');
        //  $this->db->where ('month_date >=',date('01/m/Y'));
        //    $this->db->where ('month_date <=',date('t/m/Y'));
        //  $query = $this->db->get ();
        // $feess=$query->row(); 
        // if(empty($feess)){
        //  $data=array();
        //  $data['student_id_fee']=$student_id_fee;
        //   $data['month_date']=date('d/m/Y');
        //  $data['fee_momth_status']=1;
        //   $status=$this->db->insert("tbl_month_fee",$data);
        //   echo 'insert ok';
        // }else{
        //  echo 'no';
        // }
    }

    public function pray_exam_fee() {
        $this->load->view('filter_exam_fee');
    }

    public function treasury() {
        $data['tergetPage'] = $this->load->view('treasury', '', TRUE);
        $this->load->view('home', $data);
    }
    public function select_one_student_for_exam_fees() {
        print_r($_POST);
         $data = array();
        $result = array();
        $data['class_name'] = $this->input->post('class_name');
        $result['class_name'] = $this->input->post('class_name');
        $data['student_id'] = $this->input->post('Student_id');
        $result['stduent_id'] = $this->input->post('Student_id');
        
         $this->db->select('*');
        $this->db->from('tbl_exam_fee');
        $this->db->where('eclass',$data['class_name']);
        $this->db->where('student_id_exam', $data['student_id']);
        $this->db->where('ef_year',date('Y'));
        $query = $this->db->get();
        $result['resultrr'] = $query->result();
         $this->db->select('*');
        $this->db->from('tbl_fee');
        $this->db->where('class_id',$data['class_name'] );
      
        $query = $this->db->get();
        $result['fee'] = $query->row();
      
        $data['tergetPage'] = $this->load->view('accept_exam_fees_page_only_one',$result, TRUE);
        $this->load->view('home', $data);
    }
    public function add_student_exam_fee(){
    $result = array();
        $data['student_id_exam'] = $this->input->post('stduent_id');
        $data['exam_fee_date'] =date('d/m/Y');
        $data['eclass'] = $this->input->post('class_name');
        $data['term'] = $this->input->post('term');
        $data['e_fee'] = $this->input->post('fee');
        $data['ef_year'] =date('Y');
        $result['class_name'] = $this->input->post('class_name');
        $result['stduent_id'] = $this->input->post('stduent_id');
          $this->db->select('*');
        $this->db->from('tbl_exam_fee');
         $this->db->where('student_id_exam',$result['stduent_id'] );
        $this->db->where('eclass',$data['eclass'] );
        $this->db->where('term',$data['term'] );
        $this->db->where('ef_year',$data['ef_year'] );
        $query = $this->db->get();
        $res= $query->row();
        if(empty($res)){
             $status=$this->db->insert("tbl_exam_fee",$data);
             
             if($status){
                  $result['class_name'] = $this->input->post('class_name');
        $result['stduent_id'] = $this->input->post('stduent_id');
              $this->db->select('*');
        $this->db->from('tbl_fee');
        $this->db->where('class_id', $result['class_name'] );
        $queryy= $this->db->get();
        $result['fee'] = $queryy->row();
          $this->db->select('*');
        $this->db->from('tbl_exam_fee');
         $this->db->where('student_id_exam',$result['stduent_id'] );
        $this->db->where('eclass',$result['class_name'] );
//        $this->db->where('term',$data['term'] );
        $this->db->where('ef_year',$data['ef_year'] );
        $query = $this->db->get();
       $result['resultrr']= $query->result();
         $return['message'] = 'insert Complite....';
            $this->session->set_userdata($return);
         $datat['tergetPage'] = $this->load->view('accept_exam_fees_page_only_one',$result, TRUE);
        $this->load->view('home', $datat);
       
             }
           
            
        }  else {
              $result['class_name'] = $this->input->post('class_name');
        $result['stduent_id'] = $this->input->post('stduent_id');
              $this->db->select('*');
        $this->db->from('tbl_fee');
        $this->db->where('class_id', $result['class_name'] );
        $queryy = $this->db->get();
        $result['fee'] = $queryy->row();
          $this->db->select('*');
        $this->db->from('tbl_exam_fee');
        $this->db->where('student_id_exam',$result['stduent_id'] );
        $this->db->where('eclass',$result['class_name'] );
//        $this->db->where('term',$data['term'] );
        $this->db->where('ef_year',$data['ef_year'] );
        $query = $this->db->get();
       $result['resultrr']= $query->result();
         $return['message'] = 'All Ready Have....';
            $this->session->set_userdata($return);
         $datat['tergetPage'] = $this->load->view('accept_exam_fees_page_only_one',$result, TRUE);
        $this->load->view('home', $datat);
            
        }
    }

    public function accept_exam_fees_page_only_one() {
        $data['tergetPage'] = $this->load->view('accept_exam_fees_page_only_one', '', TRUE);
        $this->load->view('home', $data);
    }

    public function insert_treasury() {
        print_r($_POST);
        $data = array();
        $data['amaunt'] = $this->input->post('amaunt');
        $data['treasury_subject'] = $this->input->post('treasury_subject');
        $data['add_date'] = $this->input->post('add_date');
        $this->db->select('*');
        $this->db->from('tbl_treasury');
        $this->db->where('add_date', $data['add_date']);
        $this->db->where('amaunt', $data['amaunt']);
        $this->db->where('treasury_subject', $data['treasury_subject']);
        $resultSet = $this->db->get();
        $alart = $resultSet->row();
        if (empty($alart)) {
            $status = $this->db->insert("tbl_treasury", $data);
            $return['message'] = 'complite....';
            $this->session->set_userdata($return);
            redirect('studentController/treasury', 'refresh');
        } else {
            $return['message'] = 'All ready Enter Your Data....';
            $this->session->set_userdata($return);
            redirect('studentController/treasury', 'refresh');
        }
    }

    public function send_mess() {

        $data['tergetPage'] = $this->load->view('send_massage', '', TRUE);
        $this->load->view('home', $data);
    }

    public function add_rules() {
        $result = array();
        $result['result'] = $this->info_model->selectRulesInfo();
        $data['tergetPage'] = $this->load->view('add_rules', $result, TRUE);
        $this->load->view('home', $data);
    }

    public function insert_new_roules() {
        $data = array();

        $data['rules'] = $this->input->post('rules');
        $data['active_r'] = '1';

        $status = $this->db->insert("tbl_rules", $data);
        if ($status) {
            $return['msg'] = 'Rules Inset Complite....';
            $this->session->set_userdata($return);
            redirect('studentController/add_rules', 'refresh');
        }
    }

    public function edit_rules($rules_id) {
        $result = array();
        $this->db->select('*');
        $this->db->from('tbl_rules');
        $this->db->where('rules_id', $rules_id);
        $resultSet = $this->db->get();
        $result['re'] = $resultSet->row();

        $result['result'] = $this->info_model->selectRulesInfo();
        $data['tergetPage'] = $this->load->view('add_rules', $result, TRUE);
        $this->load->view('home', $data);
    }

    public function update_roules() {
        $data = array();

        $data['rules'] = $this->input->post('rules');
        $data['rules_id'] = $this->input->post('rules_id');

        $this->db->set('rules', $data['rules']);
        $this->db->where('rules_id', $data['rules_id']);
        $status = $this->db->update('tbl_rules');

//        $status=$this->db->insert("tbl_rules",$data);
        if ($status) {
            $return['msg'] = 'Rules Update Complite....';
            $this->session->set_userdata($return);
            redirect('studentController/add_rules', 'refresh');
        }
    }

    public function delete_rules($rules_id) {
        $this->db->where('rules_id', $rules_id);
        $status = $this->db->delete('tbl_rules');
        if ($status) {
            $return['msg'] = 'Rules Delete Complite....';
            $this->session->set_userdata($return);
            redirect('studentController/add_rules', 'refresh');
        }
    }

    public function principal_speak() {

        //Ckeditor's configuration
        $data['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'content',
            'path' => 'js/ckeditor',
            //Optionnal values
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "800px", //Setting a custom width
                'height' => '400px', //Setting a custom height
            ),
            //Replacing styles from the "Styles tool"
            'styles' => array(
                //Creating a new style named "style 1"
                'style 1' => array(
                    'name' => 'Blue Title',
                    'element' => 'h2',
                    'styles' => array(
                        'color' => 'Blue',
                        'font-weight' => 'bold'
                    )
                ),
                //Creating a new style named "style 2"
                'style 2' => array(
                    'name' => 'Red Title',
                    'element' => 'h2',
                    'styles' => array(
                        'color' => 'Red',
                        'font-weight' => 'bold',
                        'text-decoration' => 'underline'
                    )
                )
            )
        );


        $this->load->view('principal_speak', $data);
    }

    public function insert_speak() {
        $data = array();
        $data['speak'] = $this->input->post('speak');

        $data['sp_type'] = $this->input->post('speak_type');
        if (!empty($data['sp_type'])) {
            $status = $this->db->insert("tbl_speak", $data);
            if ($status) {

                $data['ckeditor'] = array(
                    //ID of the textarea that will be replaced
                    'id' => 'content',
                    'path' => 'js/ckeditor',
                    //Optionnal values
                    'config' => array(
                        'toolbar' => "Full", //Using the Full toolbar
                        'width' => "800px", //Setting a custom width
                        'height' => '400px', //Setting a custom height
                    ),
                    //Replacing styles from the "Styles tool"
                    'styles' => array(
                        //Creating a new style named "style 1"
                        'style 1' => array(
                            'name' => 'Blue Title',
                            'element' => 'h2',
                            'styles' => array(
                                'color' => 'Blue',
                                'font-weight' => 'bold'
                            )
                        ),
                    //Creating a new style named "style 2"
                    )
                );
       $return['msg'] = 'Your data Save Complite';
                $this->session->set_userdata($return);
                $this->load->view('principal_speak', $data);
            }
        } else {

            //Ckeditor's configuration
            $data['ckeditor'] = array(
                //ID of the textarea that will be replaced
                'id' => 'content',
                'path' => 'js/ckeditor',
                //Optionnal values
                'config' => array(
                    'toolbar' => "Full", //Using the Full toolbar
                    'width' => "800px", //Setting a custom width
                    'height' => '400px', //Setting a custom height
                ),
                //Replacing styles from the "Styles tool"
                'styles' => array(
                    //Creating a new style named "style 1"
                    'style 1' => array(
                        'name' => 'Blue Title',
                        'element' => 'h2',
                        'styles' => array(
                            'color' => 'Blue',
                            'font-weight' => 'bold'
                        )
                    ),
                    //Creating a new style named "style 2"
                    'style 2' => array(
                        'name' => 'Red Title',
                        'element' => 'h2',
                        'styles' => array(
                            'color' => 'Red',
                            'font-weight' => 'bold',
                            'text-decoration' => 'underline'
                        )
                    )
                )
            );

            $data['speak2'] = $this->input->post('speak');

            $return['msg'] = 'select Your Speak Type';
            $this->session->set_userdata($return);
            $this->load->view('principal_speak', $data);
        }
    }

    public function upload_info() {
        $result = array();
        $this->db->select('*');
        $this->db->from('tbl_upload');
        $resultSet = $this->db->get();
        $result['re'] = $resultSet->result();
        $data['tergetPage'] = $this->load->view('upload_info', $result, TRUE);
        $this->load->view('home', $data);
    }

    public function insert_upload() {
        $data = array();
        $data['up_name'] = $this->input->post('up_name');
        $data['up_type'] = $this->input->post('up_type');
        $data['up_action'] = '0';
        if (!empty($data['up_type'])) {
            if ($_FILES['up_pdf']['name'] && $_FILES['up_pdf']['size']) {
                $upload_path = 'user_upload/';
                $result = $this->upload->UploadPdf('up_pdf', $upload_path);
                if ($result) {
                    $data['up_pdf'] = $result['file_name'];
                }
            }
        } else {
            
        }
        $status = $this->db->insert("tbl_upload", $data);
        if ($status) {
            $return['msg'] = 'Rules Inset Complite....';
            $this->session->set_userdata($return);
            redirect('studentController/upload_info', 'refresh');
        }
    }

    public function upload_delete($up_id) {
        $this->db->where('up_id', $up_id);
        $status = $this->db->delete('tbl_upload');
        if ($status) {
            $return['msg'] = 'upload Delete Complite....';
            $this->session->set_userdata($return);
            redirect('studentController/upload_info', 'refresh');
        }
    }

    public function add_event() {

        $data['tergetPage'] = $this->load->view('add_event', '', TRUE);
        $this->load->view('home', $data);
    }

    public function advertisement() {

        $data['tergetPage'] = $this->load->view('advertisement', '', TRUE);
        $this->load->view('home', $data);
    }

    public function view_all_event() {
        $result = array();
        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->order_by('event_id', 'desc');
        $resultSet = $this->db->get();
        $result['result'] = $resultSet->result();
        $data['tergetPage'] = $this->load->view('view_all_event', $result, TRUE);
        $this->load->view('home', $data);
    }

    public function view_all_advertisement() {
        $result = array();
        $this->db->select('*');
        $this->db->from('tbl_advertisement');
        $this->db->order_by('advertisement_id', 'desc');
        $resultSet = $this->db->get();
        $result['result'] = $resultSet->result();
        $data['tergetPage'] = $this->load->view('view_all_advertisement', $result, TRUE);
        $this->load->view('home', $data);
    }

    public function insert_new_event() {
        $data = array();

        $data['event_date'] = $this->input->post('event_date');
        $data['event_hading'] = $this->input->post('event_hading');
        $data['event'] = $this->input->post('event');
        $data['e_action'] = '1';
             $this->load->model("upload");
 if ($_FILES['event_photo']['name'] && $_FILES['event_photo']['size']) {
                $upload_path = 'img/event_photo/';
                $result = $this->upload->UploadPhoto('event_photo', $upload_path);
                if ($result) {
                   $data['event_photo'] = $result['file_name'];
                }
 }

        $status = $this->db->insert("tbl_event", $data);
        if ($status) {
            $return['msg'] = 'Event Inset Complite....';
            $this->session->set_userdata($return);
            redirect('studentController/view_all_event', 'refresh');
        }
    }

    public function insert_new_advertisement() {
        $data = array();

        $data['advertisement_date'] = $this->input->post('advertisement_date');
        $data['advertisement_hading'] = $this->input->post('advertisement_hading');
        $data['advertisement'] = $this->input->post('advertisement');
        $data['ad_action'] = '1';

        $status = $this->db->insert("tbl_advertisement", $data);
        if ($status) {
            $return['msg'] = 'Event Inset Complite....';
            $this->session->set_userdata($return);
            redirect('studentController/advertisement', 'refresh');
        }
    }

    public function delete_event($event_id) {
        $this->db->where('event_id', $event_id);
        $status = $this->db->delete('tbl_event');
        if ($status) {
            $return['msg'] = 'Event Delete Complite....';
            $this->session->set_userdata($return);
            redirect('studentController/view_all_event', 'refresh');
        }
    }

    public function delete_advertisement($advertisement_id) {
        $this->db->where('advertisement_id', $advertisement_id);
        $status = $this->db->delete('tbl_advertisement');
        if ($status) {
            $return['msg'] = 'advertisement Delete Complite....';
            $this->session->set_userdata($return);
            redirect('studentController/view_all_advertisement', 'refresh');
        }
    }

}

?>
