<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of upload
 *
 * @author User
 */
class upload  extends CI_Controller{
       public function UploadPhoto($fieldName = '', $upload_path = '') {
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg|GIF|PNG|JPE|Bitmap|jpe|bitmap|dat|pdf|text|doc';
        $config['max_size'] = '100000';
        $config['max_width'] = '100000';
        $config['max_height'] = '100000';
        $this->load->library("upload", $config);

        if ($this->upload->do_upload($fieldName)) {
            $data = $this->upload->data();
            $fileName = $config['upload_path'].$data['file_name'];
            $full_path = $data['full_path'];
           
            $return = array('file_name' => $fileName,'full_path' => $full_path, 'error' => '');
           
            return $return;
        } else {
            $err = '';
            $err = $this->upload->display_errors();
            $return = array('file_name' => '', 'error' => $err);
            return $return;
        }
    }
       public function UploadPdf($fieldName = '', $upload_path = '') {
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg|GIF|PNG|JPE|Bitmap|jpe|bitmap|dat|pdf|text|docx';
        
        $this->load->library("upload", $config);

        if ($this->upload->do_upload($fieldName)) {
            $data = $this->upload->data();
            $fileName = $config['upload_path'].$data['file_name'];
            $full_path = $data['full_path'];
           
            $return = array('file_name' => $fileName,'full_path' => $full_path, 'error' => '');
           
            return $return;
        } else {
            $err = '';
            $err = $this->upload->display_errors();
            $return = array('file_name' => '', 'error' => $err);
            return $return;
        }
    }
}

?>
