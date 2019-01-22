<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Photos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('photo_model');
         $this->load->model('upload');
        
        $return['msg']='';
    }

    public function addPhoto() {
        $result['album'] = $this->photo_model->selectAllAlbum('album_id,album_name');
 $data['tergetPage'] = $this->load->view('create_album', $result, TRUE);
        $this->load->view('home', $data);
    }

    public function uploadAllPhoto() {
//        print_r($_FILES);
            $data['photo_caption'] = '';
            $data['upload_date'] = date('Y-m-d');

            if ($this->input->post('album_id')) {
                $data['album_id'] = $this->clearExtaString($this->input->post('album_id'));
            } else if ($this->input->post('album_name')) {
                $album['album_name'] = $this->clearExtaString($this->input->post('album_name'));
                $album['album_caption'] = $this->clearExtaString($this->input->post('album_caption'));
                $album['created_date'] = date('Y-m-d');
                $album['publish'] = 0;
                $data['album_id'] = $this->photo_model->selectInserRowAlbum('tbl_album', $album);
            }
            
            for($i =1; $i<=10; $i++){
               $poto='photo'.$i;
             if (!empty($_FILES[$poto]['name'])) {
                   
            if ($_FILES[$poto]['name'] && $_FILES[$poto]['size']) {
                $upload_path = 'user_upload/';
                $result = $this->upload->UploadPhoto($poto,$upload_path);
                if ($result) {
                    $data['photo_name'] = $result['file_name'];
                }
                 $insert = $this->photo_model->insertData('tbl_photos', $data);
                        if ($insert) {
                            $msg = '<p class="msg done"> Successfully Uploaded.... </p>';
                        } else {
                            $msg = '<pre class="msg error"> Data Not Inserted...</pre>';
                        }
            }
        }
                }

                
                
//                 $fileField = "photo";
//             
//                if ($_FILES[$fileField]['name'] && $_FILES[$fileField]['size']) {
//                    
//                    $result = $this->fileUpload('user_upload/UploadPhoto/', $fileField, 'jpg|png|gif');
//                    if ($result['file_name']) {
//                        list($folder, $sub, $data['photo_name']) = explode('/', $result['file_name']);
//                        $insert = $this->photo_model->insertData('tbl_photos', $data);
//                        if ($insert) {
//                            $msg = '<p class="msg done"> Successfully Uploaded.... </p>';
//                        } else {
//                            $msg = '<pre class="msg error"> Data Not Inserted...</pre>';
//                        }
//                    } else {
//                        $msg = '<pre class="msg error">' . $result['error'] . '</pre>';
//                    }
//                }
                
                
                
                
                
                
                
                
                
                
                
                
                $return['msg'] =$msg;
                $this->session->set_userdata($return);
       redirect('photos/addPhoto','refresh');
            
    }

    function imageUpload($fieldName) {
        $config['upload_path'] = 'UploadPhoto/Farewell_2013/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '';
        $config['max_width'] = '';
        $config['max_height'] = '';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload($fieldName)) {
            $data = $this->upload->data();
            $fileName = $config['upload_path'] . $data['file_name'];
            $return = array('file_name' => $fileName, 'error' => '');
            return $return;
        } else {
            $err = '';
            //removing the error as image upload is not required
            $err = $this->upload->display_errors();

            $return = array('file_name' => '', 'error' => $err);
            return $return;
        }
    }

    public function viewAlbum() {
        $result['album'] = $this->photo_model->selectAllAlbum('*');
        foreach ($result['album'] as $album) {
            $photo_result = $this->photo_model->selectAllPhotoByAlbum('*', $album->album_id);
            foreach ($photo_result as $photo) {
                $result['photo'][$album->album_id][] = $photo;
            }
        }
//        print_r($result);
        $data['tergetPage'] = $this->load->view('viewAlbum', $result, TRUE);
        $this->load->view('home', $data);
    }
    public function edit_photo($album_id){
      
         $this->db->select('*');
        $this->db->from('tbl_photos');
        $this->db->where('album_id', $album_id);
        $resultSet = $this->db->get();
        $result['result'] = $resultSet->result();
        $data['tergetPage'] = $this->load->view('viewAlbum_photo', $result, TRUE);
        $this->load->view('home', $data);
    }
    public function photos_delete($album_id,$photo_id){
         $this->db->where('photo_id', $photo_id);
            $work=$this->db->delete('tbl_photos');
        if($work){
         $this->db->select('*');
        $this->db->from('tbl_photos');
        $this->db->where('album_id', $album_id);
        $resultSet = $this->db->get();
        $result['result'] = $resultSet->result();
        $data['tergetPage'] = $this->load->view('viewAlbum_photo', $result, TRUE);
        $this->load->view('home', $data);
        }
    }

}
