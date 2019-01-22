<?php
class info_model extends CI_Model{
    
    public function save_info($data){
        
        $status=$this->db->insert("tcacher_info",$data);
        return $status;
    }
    
    
    public function deletinfo($id){
            $this->db->where('id', $id);
            $this->db->delete('tcacher_info');
    }
    
    
    public function selectinfoId($id)
    {
      $this->db->select ( '*' );
        $this->db->from ('tcacher_info');
        $this->db->where ( 'id', $id );
        $resultSet = $this->db->get ();
        return $resultSet->row();
    }
    public function selectRulesInfo()
    {
      $this->db->select ( '*' );
        $this->db->from ('tbl_rules');
      $resultSet = $this->db->get ();
        return $resultSet->result();
    }
    
    
        
        
        
         function updateProfile ($data,$id)
	{
            $this->db->set('full_name', $data['full_name']);
            $this->db->set('designation', $data['designation']);
            $this->db->set('email', $data['email']);
            $this->db->set('mobile_no', $data['mobile_no']);
            $this->db->set('address', $data['address']);
            $this->db->set('objectives', $data['objectives']);
            $this->db->set('department', $data['department']);
            $this->db->set('type', $data['type']);
            $this->db->set('status', $data['status']);
            $this->db->set('teacher_img', $data['teacher_img']);
            
            $this->db->where('id', $id);
            $this->db->update('tcacher_info');


	}
        public function add_student_information($data){
           $this->db->insert("tbl_stdinfo",$data);
         $insert_id = $this->db->insert_id();

   return  $insert_id;
        }
        public function insert_subject_name($data){
            return $status=$this->db->insert("tbl_subject",$data);
         
        }
        public function insert_subject_mark($table,$data){
            return $status=$this->db->insert($table,$data);
         
        }
        public function select_student($class){
//            tbl_stdinfo
        $this->db->select ( '*' );
//        $this->db->from ($table);
        $this->db->from('tbl_student_roll');
        $this->db->join('tbl_stdinfo', 'tbl_stdinfo.student_id = tbl_student_roll.student_id');

        $this->db->where ( 'st_class', $class );
        $this->db->where ( 'cl_year', date('Y') );
        $resultSet = $this->db->get ();
        return $resultSet->result();   
        }
        public function select_number_row_student($table,$class){
             $this->db->select ( '*' );
        $this->db->from ($table);
        $this->db->where ( 'class', $class );
        $this->db->where ( 'admition_year', date('Y') );
        $query = $this->db->get ();
        return $query->num_rows();   
        }
        public function select_student_attendanc_view($data){
    
               $this->db->select('*');
        $this->db->from('tbl_attendance');
//        $this->db->where('student_id', $data['student_id']);
        $this->db->where('class_name', $data['class_name']);
        $this->db->where('attend_date', $data['attend_date']);
        // $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
        }
        public function select_student_fees_month($class){
         $this->db->select ( '*' );
        $this->db->from ('tbl_fee');
        $this->db->where ('class_id', $class );
        $this->db->where ('type','1');
         $this->db->where ('active_s','1');
        $query = $this->db->get ();
        return $query->row(); 
            
        }
        public function select_student_fees_exam($class){
         $this->db->select ( '*' );
        $this->db->from ('tbl_fee');
        $this->db->where ('class_id', $class );
        $this->db->where ('type','2');
        $this->db->where ('active_s','1');
        $query = $this->db->get ();
        return $query->row(); 
            
        }
        public function select_student_fees_extra($class){
         $this->db->select ( '*' );
        $this->db->from ('tbl_fee');
        $this->db->where ('class_id', $class );
        $this->db->where ('type','3');
         $this->db->where ('active_s','1');
        $query = $this->db->get ();
        return $query->row(); 
            
        }
        public function select_student_for_fees($data){
                $this->db->select ( '*' );
        $this->db->from ('tbl_stdinfo');
        $this->db->where ('class', $data['class_name'] );
        // $this->db->where ('type','3');
         // $this->db->where ('active_s','1');
        $query = $this->db->get ();
        return $query->result(); 
        }
        public function pray_exam_fee(){
            
        }

}
?>
