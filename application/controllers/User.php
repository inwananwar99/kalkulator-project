<?php
class User extends CI_Controller{
    public function index(){
        $data = [
            'title' => 'user',
            'judul' => 'User',
            'konten' => 'user/index',
            'data' => $this->ModelUser->getData('users')
        ];
        $this->load->view('kalkulator/template',$data);
    }

    
}

?>