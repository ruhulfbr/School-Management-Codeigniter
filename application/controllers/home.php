<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author habib
 */
class Home extends CI_Controller{
    public function __construct() {
        parent::__construct();
              $this->load->model('photo_model');
    }
public function index(){
    
       $data['tergetPage'] = $this->load->view('home/home_page','', TRUE);
        $this->load->view('home/home', $data);
//      $this->load->view('home/home');
}
public function online_fees(){
    
      $data['tergetPage'] = $this->load->view('home/online_fees','', TRUE);
        $this->load->view('home/home', $data);
}
public function contact(){
    
      $data['tergetPage'] = $this->load->view('home/contact','', TRUE);
        $this->load->view('home/home', $data);
}
public function teachers(){
    
      $data['tergetPage'] = $this->load->view('home/teachers','', TRUE);
        $this->load->view('home/home', $data);
}
public function our_communication(){
    
      $data['tergetPage'] = $this->load->view('home/our_communication','', TRUE);
        $this->load->view('home/home', $data);
}

public function visitor_comments(){
    
      $data['tergetPage'] = $this->load->view('home/visitor_comments','', TRUE);
        $this->load->view('home/home', $data);
}

public function board_result(){
    
      $data['tergetPage'] = $this->load->view('home/board_result','', TRUE);
        $this->load->view('home/home', $data);
}
public function psc_result(){
    
      $data['tergetPage'] = $this->load->view('home/psc_result','', TRUE);
        $this->load->view('home/home', $data);
}
public function ssc_result(){
    
      $data['tergetPage'] = $this->load->view('home/ssc_result','', TRUE);
        $this->load->view('home/home', $data);
}
public function jsc_result(){
    
      $data['tergetPage'] = $this->load->view('home/jsc_result','', TRUE);
        $this->load->view('home/home', $data);
}
public function online_admission(){
    
      $data['tergetPage'] = $this->load->view('home/online_admission','', TRUE);
        $this->load->view('home/home', $data);
}
public function online_applay(){
//    print_r($_POST);
     $dataw=array();
    $dataw['student_name'] = $this->input->post('student_name');
    $dataw['fathar_name'] = $this->input->post('fathar_name');
    $dataw['mother_name'] = $this->input->post('mother_name');
    $dataw['present_address'] = $this->input->post('present_address');
    $dataw['permanent_address'] = $this->input->post('permanent_address');
    $dataw['religion'] = $this->input->post('religion');
    $dataw['sex'] = $this->input->post('sex');
    $dataw['birth_date'] = $this->input->post('birth_date');
    $dataw['class_name'] = $this->input->post('class_name');
    $dataw['group'] = $this->input->post('group');
    $dataw['home_number'] = $this->input->post('home_number');
    $dataw['own_number'] = $this->input->post('own_number');
    $dataw['on_active'] =0;
    $status=$this->db->insert("online_application",$dataw);
    if($status){
      $this->load->view('home/show_online_admission',$dataw);
      
    }

//      $data['tergetPage'] = $this->load->view('home/online_admission','', TRUE);
//        $this->load->view('home/home', $data);
}
public function school_play_ground(){
    
      $data['tergetPage'] = $this->load->view('home/school_play_ground','', TRUE);
        $this->load->view('home/home', $data);
}
public function gallery(){
      $result['album'] = $this->photo_model->selectAllAlbum('*');
        foreach ($result['album'] as $album) {
            $photo_result = $this->photo_model->selectAllPhotoByAlbum('*', $album->album_id);
            foreach ($photo_result as $photo) {
                $result['photo'][$album->album_id][] = $photo;
            }
        }
      $data['tergetPage'] = $this->load->view('home/gallery', $result, TRUE);
        $this->load->view('home/home', $data);
}

 public function gallery_view($album_id){
// echo $album_id;
 $result['resultt']=$this->photo_model->select_img_view($album_id);
  $data['tergetPage'] = $this->load->view('home/gallery_view', $result, TRUE);
        $this->load->view('home/home', $data);
 }
 public function teacher_view($teacher_id){
// echo $album_id;
 $result['resultt']=$this->photo_model->select_teacher_id_view($teacher_id);
  $data['tergetPage'] = $this->load->view('home/teachers_view', $result, TRUE);
        $this->load->view('home/home', $data);
 }
public function search_student(){
    $data['tergetPage'] = $this->load->view('home/search_student','', TRUE);
        $this->load->view('home/home', $data);
}
public function search_student_info(){
//    print_r($_POST);
     $data=array();
    $data['student_id'] = $this->input->post('student_id');
      $data['class'] = $this->input->post('class');
     $result['result']=$this->photo_model->select_student_info_view($data);
    
    if($result['result']){
         $data['tergetPage'] = $this->load->view('home/student_view',$result, TRUE);
        $this->load->view('home/home', $data);
    }  else {
              $return['msg'] = 'Have No Result....';
            $this->session->set_userdata($return);
            redirect('home/search_student','refresh');
         
    }
    
   
}
public function search_student_attendance(){
//    print_r($_POST);
   $data=array();
    $data['student_id'] = $this->input->post('student_id');
      $data['class_name'] = $this->input->post('class');
      $data['attend_date']= $this->input->post('attend_date');
     $result['result']=$this->photo_model->select_student_attendanc_view($data);
    
    if($result['result']){
         $data['tergetPage'] = $this->load->view('home/student_attendance_view',$result, TRUE);
        $this->load->view('home/home', $data);
    }  else {
              $return['msg'] = 'Have No Result....';
            $this->session->set_userdata($return);
            redirect('home/search_student','refresh');
         
    } 
}

public function serch_student_result(){
    
          $data['tergetPage'] = $this->load->view('home/serch_student_result','', TRUE);
        $this->load->view('home/home', $data);
}
public function search_student_result_view(){
//    print_r($_POST);
    $data=array();
    $result=array();
    $data['Student_id'] = $this->input->post('student_id');
    $data['year'] = $this->input->post('year');
    $data['exam_term'] = $this->input->post('term');
    $data['student_class'] = $this->input->post('class');
    $data['class'] = $this->input->post('class');
    $data['student_id'] = $this->input->post('student_id');
    $result['result1']=$this->photo_model->select_student_info_view($data);
    $result['result2']=$this->photo_model->select_student_mark($data);
    $result['result3']=$this->photo_model->select_student_class_subject($data);
   if($result['result2']){
            $data['tergetPage'] = $this->load->view('home/student_result_view',$result, TRUE);
        $this->load->view('home/home', $data);
   }  else {
        $return['msg'] = 'Have No Result....';
            $this->session->set_userdata($return);
            redirect('home/serch_student_result','refresh');
   }
}
public function principal_speech(){
        $data['tergetPage'] = $this->load->view('home/principal_speech','', true);
        $this->load->view('home/home', $data);
        
        
        
    }
public function principal_speak(){
        $data['tergetPage'] = $this->load->view('home/principal_speak','', true);
        $this->load->view('home/home', $data);
        
        
        
    }
public function comiti_speak(){
        $data['tergetPage'] = $this->load->view('home/comiti','', true);
        $this->load->view('home/home', $data);
        
        
        
    }
public function history(){
        $data['tergetPage'] = $this->load->view('home/history','', true);
        $this->load->view('home/home', $data);
    }
public function tot_ist(){
        $data['tergetPage'] = $this->load->view('home/tot_ist','', true);
        $this->load->view('home/home', $data);
    }
public function staffs(){
        $data['tergetPage'] = $this->load->view('home/staffs','', true);
        $this->load->view('home/home', $data);
    }
    public function notise_page(){
             $data['tergetPage'] = $this->load->view('home/notise_page','', true);
        $this->load->view('home/home', $data);
    }
    public function rulse_regulation(){
             $data['tergetPage'] = $this->load->view('home/rulse_regulation','', true);
        $this->load->view('home/home', $data);
    }
    public function view_advertisement($event_id){
          $result=array();
             $this->db->select ( '*' );
        $this->db->from ('tbl_event');
       $this->db->where('event_id',$event_id);
        $resultSet = $this->db->get ();
        $result['result']=$resultSet->row();
             $data['tergetPage'] = $this->load->view('home/full_view_event',$result, true);
        $this->load->view('home/home', $data);
    }
    public function view_one_advertisement($advertisement_id){
          $result=array();
             $this->db->select ( '*' );
        $this->db->from ('tbl_advertisement');
       $this->db->where('advertisement_id',$advertisement_id);
        $resultSet = $this->db->get ();
        $result['result']=$resultSet->row();
             $data['tergetPage'] = $this->load->view('home/full_view_advertisement',$result, true);
        $this->load->view('home/home', $data);
    }
       public function successful_student(){
         $this->db->select ( '*' );
        $this->db->from ('tbl_successful_student');
       
        $resultSet = $this->db->get();
    $data['result']=$resultSet->result();
           $data['tergetPage'] = $this->load->view('home/successful_student_home.php',$data, TRUE);
        $this->load->view('home/home', $data);
    }
       public function board_of_directors(){
    
           $data['tergetPage'] = $this->load->view('home/board_of_directors.php','', TRUE);
        $this->load->view('home/home', $data);
    }
       public function old_teacher(){
    
           $data['tergetPage'] = $this->load->view('home/old_teacher.php','', TRUE);
        $this->load->view('home/home', $data);
    }
       public function student_attandance_info(){
    $datet= $this->input->post('datet');
      $datet2= $this->input->post('datet2');
     if(empty($datet)){
       $date['date']=date('d/m/Y');   
       $date['date2']=date('d/m/Y');   
      }  else {
        $date['date']=$datet;    
        $date['date2']=$datet2;    
      }
           $data['tergetPage'] = $this->load->view('home/student_attandance_info.php',$date, TRUE);
        $this->load->view('home/home', $data);
    }
       public function staff_attandance_info(){
      $datet= $this->input->post('datet');
      $datet2= $this->input->post('datet2');
      if(empty($datet)){
       $date['date']=date('d/m/Y');   
       $date['date2']=date('d/m/Y');   
      }  else {
        $date['date']=$datet;    
        $date['date2']=$datet2;    
      }
           $data['tergetPage'] = $this->load->view('home/staff_attandance_info.php',$date, TRUE);
        $this->load->view('home/home', $data);
    }
       public function class_activities(){
    
           $data['tergetPage'] = $this->load->view('home/class_activities.php','', TRUE);
        $this->load->view('home/home', $data);
    }
       public function library(){
    
           $data['tergetPage'] = $this->load->view('home/library.php','', TRUE);
        $this->load->view('home/home', $data);
    }
    public function downloads($type){
        
        
         $this->db->select ( '*' );
        $this->db->from ('tbl_upload');
        $this->db->where ('up_type',$type);
        // $this->db->where ('type','3');
       
        $query = $this->db->get ();
        $result['result']=$query->result();
        
         $this->db->select ( '*' );
        $this->db->from ('tbl_upload');
        $this->db->where ('up_type',$type);
        // $this->db->where ('type','3');
       
        $query = $this->db->get ();
        $result['result2']=$query->row();
             $data['tergetPage'] = $this->load->view('home/downloads',$result, true);
        $this->load->view('home/home', $data);
    }
    public function all_event(){
           $result=array();
             $this->db->select ( '*' );
        $this->db->from ('tbl_event');
       $this->db->order_by('event_id','desc');
        $resultSet = $this->db->get ();
        $result['result']=$resultSet->result();
              $data['tergetPage'] = $this->load->view('home/all_event',$result, true);
        $this->load->view('home/home', $data);
    }
    public function all_advertisement(){
           $result=array();
             $this->db->select ( '*' );
        $this->db->from ('tbl_advertisement');
       $this->db->order_by('advertisement_id','desc');
        $resultSet = $this->db->get ();
        $result['result']=$resultSet->result();
              $data['tergetPage'] = $this->load->view('home/all_advertisement',$result, true);
        $this->load->view('home/home', $data);
    }
    public function school_treasury(){
           $result=array();
             $this->db->select ( '*' );
        $this->db->from ('tbl_treasury');
       $this->db->order_by('treasury_id','desc');
        $resultSet = $this->db->get ();
        $result['result']=$resultSet->result();
              $data['tergetPage'] = $this->load->view('home/school_treasury',$result, true);
        $this->load->view('home/home', $data);
    }
}

?>
