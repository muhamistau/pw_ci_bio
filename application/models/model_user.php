<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
	public function login($userdata)
	{
		$result = $this->db->get_where('users',
			array( 
				'username'=> $userdata['username'],
				'password' => $userdata['password'] 
			) 
		);
		return $result;
	}
	
	public function input($identitas, $users)
	{

		if( $this->db->insert('identitas', $identitas) && $this->db->insert('users', $users) )
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function tampilAll()
	{
		$query = $this->db->get('identitas');
		return $query;
	}

	public function tampilByUser($npm)
	{
		$query = $this->db->get_where('identitas', array('npm' => $npm));
		return $query;
	}

	public function pilih($npm)
	{
		$query = $this->db->get_where('identitas', array('npm' => $npm))->row();
		return $query;
	}
	
	public function update($npm, $nama, $alamat, $jk)
	{
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'alamat' => $alamat,
			'jk' => $jk
		 );
		$this->db->where('npm',$npm);
		$this->db->update('identitas', $data);
	}

	public function delete($npm)
	{
		$this->db->delete('identitas', array('npm' => $npm));
	}
}

/* End of file model_user.php */
/* Location: ./application/models/model_user.php */