<?php 
 
 class Registrasi extends CI_Controller{
 	public function index()
 	{

 		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required'  => 'Nama Wajib Di isi']);
  		$this->form_validation->set_rules('username', 'username', 'required', ['required'  => 'Username Wajib Di isi']);
   		$this->form_validation->set_rules('password', 'password', 'required|matches[password_2]', ['required'  => 'Password Wajib Di isi']);
   		$this->form_validation->set_rules('password_2', 'password', 'required|matches[password]', ['required'  => 'Password Wajib Di isi',
   			'matches'  => 'Password tidak cocok'
   			]);
 		if($this->form_validation->run() == FALSE)
 		{
 			$this->load->view('templates/header');
			$this->load->view('registrasi');
			$this->load->view('templates/footer');
 		} else {
 			$data = array (
 				'id' 			=> '',
 				'nama'			=> $this->input->post('nama'),
 				'username'			=> $this->input->post('username'),
 				'password'		=> $this->input->post('password'),
 				'role_id'		=> 2
 			);

 			$this->db->insert('tbl_user', $data);
 			redirect('auth/login');
 		}
 		
 	}
 } 

?>