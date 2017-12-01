<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function daftar() {
		$this->load->view('form');
	}

	public function input_data() {
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$this->load->model('model_user');
		if ($this->model_user->input($npm, $nama, $alamat, $jk)) {
			$data['mahasiswa'] = $this->model_user->tampil();
			$this->load->view('form');
		}
		else {
			$this->load->view('login');
		}
	}

	public function tampil_data()
	{
		$this->load->model('model_user');
		$data["mhs"] = $this->model_user->tampil();
		$this->load->view('tampil_data', $data);
	}

	public function edit_data()
	{
		$npm = $this->uri->segment(3);
		$this->load->model('model_user');
		$data["mhs"] = $this->model_user->pilih($npm);
		$this->load->view('edit', $data);
	}

	public function update_data()
	{
		$npm = $this->input->post("npm");
		$nama = $this->input->post("nama");
		$alamat = $this->input->post("alamat");
		$jk = $this->input->post("jk");

		$this->load->model('model_user');
		$this->model_user->update($npm, $nama, $alamat, $jk);
		redirect(base_url("index.php/login/tampil_data"));
	}

	public function delete_data()
	{
		$npm = $this->uri->segment(3);
		$this->load->model('model_user');
		$this->model_user->delete($npm);
		redirect(base_url("index.php/login/tampil_data"));
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */