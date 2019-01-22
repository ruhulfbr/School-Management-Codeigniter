<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_Model extends CI_Model {

    public function insertData($table_name, $data) {
        if ($this->db->insert($table_name, $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function deleteData($table, $field, $id) {
        if ($this->db->query("DELETE FROM $table WHERE $field=$id")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function selectAllNotice() {
        $this->db->select('*');
        $this->db->from('tbl_notice');
        $query = $this->db->get();
        return $query->result();
    }

    public function checkUser($email, $password) {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('user_name', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }
    public function updat_syllabusData($input){
       // print_r($input);
         $this->db->set('syl_name', $input['syl_name']);
            $this->db->set('dept_id', $input['dept_id']);
            $this->db->set('prob_id', $input['prob_id']);
            $this->db->set('pdf', $input['pdf']);
           
            
            $this->db->where('syl_id',$input['syl_id']);
            return $this->db->update('tbl_syllabus');
    }

    public function selectInfo($field, $table) {
        $this->db->select($field);
        $this->db->from($table);
        $query = $this->db->get();
        if ($query) {
            return $query->result();
        }
        return 'false';
    }

    public function selectAllSyllabus() {
        $this->db->select('*');
        $this->db->from('tbl_syllabus');
        $query = $this->db->get();
        return $query->result();
    }
    public function check_selectAllSyllabus($input) {
        $this->db->select('*');
        $this->db->from('tbl_syllabus');
         $this->db->where('syl_name',$input['syl_name']);
        $this->db->where('dept_id',$input['dept_id']);
        $this->db->where('prob_id', $input['prob_id']);
        $query = $this->db->get();
        return $query->row();
    }
    public function changeNoticeStatus($status,$id){
        $this->db->query("UPDATE tbl_notice SET publish=$status WHERE notice_id=$id");
        
    }

}
