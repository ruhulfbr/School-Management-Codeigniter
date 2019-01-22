<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Photo_Model extends CI_Model {

    public function selectAllAlbum($field) {
        $this->db->select($field);
        $this->db->from('tbl_album');
        $query = $this->db->get();
        return $query->result();
    }

    public function insertData($table, $photo) {
        $this->db->insert($table, $photo);
        return true;
    }
    public function selectInserRowAlbum($table, $album){
        $this->insertData($table, $album);
        $query=  $this->db->query("SELECT * FROM tbl_album ORDER BY album_id DESC LIMIT 1");
//        $this->db->select('album_id');
//        $this->db->from('tbl_album');
//        $this->db->limit(1);
//        $query = $this->db->get();
        $rid=$query->row();
        return $rid->album_id;
    }

    public function selectAllPhotoWithAlbum() {
//        $query = $this->db->query(''
//                . ' SELECT pto.*,al.*'
//                . ' FROM tbl_album as al, tbl_photos as pto'
//                . ' WHERE al.album_id=pto.album_id'
//                . ' ');
//        echo'<pre>';
//        print_r ($query->result());
//        echo '</pre>';
    }

    public function selectAllPhotoByAlbum($field, $album_id) {
        $this->db->select($field);
        $this->db->from('tbl_photos');
        $this->db->where('album_id', $album_id);
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }
    public function select_img_view($album_id){
         $this->db->select('*');
        $this->db->from('tbl_photos');
        $this->db->where('album_id', $album_id);
        // $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }
     public function select_teacher_id_view($teacher_id){
         $this->db->select('*');
        $this->db->from('tcacher_info');
        $this->db->where('id', $teacher_id);
        // $this->db->limit(4);
        $query = $this->db->get();
        return $query->row();
    }
     public function select_student_info_view($data){
         $this->db->select('*');
         $this->db->from('tbl_student_roll');
      
$this->db->join('tbl_stdinfo', 'tbl_stdinfo.student_id = tbl_student_roll.student_id');
//        $this->db->from('tbl_stdinfo');
  $this->db->where('tbl_student_roll.student_id', $data['student_id']);
        $this->db->where('st_class', $data['class']);
        // $this->db->limit(4);
        $query = $this->db->get();
        return $query->row();
    }
     public function select_student_attendanc_view($data){
         $this->db->select('*');
        $this->db->from('tbl_attendance');
        $this->db->where('student_id', $data['student_id']);
        $this->db->where('class_name', $data['class_name']);
        $this->db->where('attend_date', $data['attend_date']);
        // $this->db->limit(4);
        $query = $this->db->get();
        return $query->row();
    }
    public function select_student_mark($data){
        $this->db->select('*');
        $this->db->from('tbl_mark');
        $this->db->where('Student_id',$data['Student_id'] );
        $this->db->where('student_class',$data['student_class'] );
        $this->db->where('year',$data['year']);
        $this->db->where('exam_term',$data['exam_term']);
        // $this->db->limit(4);
        $query = $this->db->get();
        return $query->row(); 
    }
    public function select_student_class_subject($data){
          $this->db->select('*');
        $this->db->from('tbl_subject');
//        $this->db->where('student_id', $data['student_id']);
        $this->db->where('class', $data['class']);
        // $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }

}
