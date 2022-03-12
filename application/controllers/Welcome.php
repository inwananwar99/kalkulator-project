<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
	}
	public function do_login(){
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		$data = $this->db->get_where('users',['email'=> $username])->row_array();
		if($data){
			if($data['password'] == $password){
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat Datang!</div>');
				$d = ['nama' => $data['name']];
				$this->session->set_userdata($d);
				return redirect('Kalkulator');
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah! Mohon isikan dengan benar!</div>');
				return redirect('Welcome');
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">User tidak terdaftar!</div>');
			return redirect('Welcome');
		}
	}

	public function logout(){
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil logout!
	  </div>');
		return redirect('Welcome');
	}
}
