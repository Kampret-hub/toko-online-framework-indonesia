<?php

class Kategori extends CI_Controller {

	public function elektronik()
	{
		$data['elektronik'] = $this->model_kategori->data_elektronik()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('elektronik', $data);
		$this->load->view('templates/footer');
	}

	public function pakaian_pria()
	{
		$data['pakaian_pria'] = $this->model_kategori->data_pp()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pakaian_pria', $data);
		$this->load->view('templates/footer');
	}

	public function pakaian_wanita()
	{
		$data['pakaian_wanita'] = $this->model_kategori->data_pw()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pakaian_wanita', $data);
		$this->load->view('templates/footer');
	}

	public function pakaian_anak()
	{
		$data['pakaian_anak'] = $this->model_kategori->data_pa()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pakaian_anak', $data);
		$this->load->view('templates/footer');
	}

	public function peralatan_olahraga()
	{
		$data['peralatan_olahraga'] = $this->model_kategori->data_po()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('peralatan_olahraga', $data);
		$this->load->view('templates/footer');
	}

}

?>