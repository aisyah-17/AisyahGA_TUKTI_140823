<?php
class M_kampus extends CI_model {
	//-----------------SURAT MASUK
	public function ambil_data_suratmasuk_aisyahga()
	{
		$query = $this->db->get('suratmasuk_aisyahga')->result_array();
		return $query;
	}
	public function simpan_data_suratmasuk_aisyahga()
	{
		$data = array(
			'no_surat' => $this->input->post('no_surat'),
			'pengirim' => $this->input->post('pengirim'),
			'waktu' => $this->input->post('waktu'),
			'tempat' => $this->input->post('tempat'),
			'lampiran' => $this->input->post('lampiran'),
			'perihal' => $this->input->post('perihal')
		);
		return $this->db->insert('suratmasuk_aisyahga', $data);
	}
	public function ambil_satu_data_suratmasuk_aisyahga($id)
	{
		$query = $this->db->get_where('suratmasuk_aisyahga', array('pengirim' => $id))->row_array();
		return $query;
	}
	public function update_data_suratmasuk_aisyahga()
	{
		$pengirim = $this->input->post('pengirim');
		$data = array(
			'no_surat' => $this->input->post('no_surat'),
			'pengirim' => $this->input->post('pengirim'),
			'waktu' => $this->input->post('waktu'),
			'tempat' => $this->input->post('tempat'),
			'lampiran' => $this->input->post('lampiran'),
			'perihal' => $this->input->post('perihal')
		);
		return $this->db->update('suratmasuk_aisyahga', $data, array('pengirim' => $pengirim));
	}
	public function hapus_data_suratmasuk_aisyahga($id)
	{
		return $this->db->delete('suratmasuk_aisyahga', array('pengirim' => $id));
	} 

	//--------------------------SURAT KELUAR
	public function ambil_data_suratkeluar_aisyahga()
	{
		$query = $this->db->get('suratkeluar_aisyahga')->result_array();
		return $query;
	}
	public function simpan_data_suratkeluar_aisyahga()
	{
		$data = array(
			'no_surat' => $this->input->post('no_surat'),
			'penerima' => $this->input->post('penerima'),
			'waktu' => $this->input->post('waktu'),
			'tempat' => $this->input->post('tempat'),
			'perihal' => $this->input->post('perihal'),
			'pengesah' => $this->input->post('pengesah'),
		);
		return $this->db->insert('suratkeluar_aisyahga', $data);
	}
	public function ambil_satu_data_suratkeluar_aisyahga($id)
	{
		$query = $this->db->get_where('suratkeluar_aisyahga', array('penerima' => $id))->row_array();
		return $query;
	}
	public function update_data_suratkeluar_aisyahga()
	{
		$penerima = $this->input->post('penerima');
		$data = array(
			'no_surat' => $this->input->post('no_surat'),
			'penerima' => $this->input->post('penerima'),
			'waktu' => $this->input->post('waktu'),
			'tempat' => $this->input->post('tempat'),
			'perihal' => $this->input->post('perihal'),
			'pengesah' => $this->input->post('pengesah'),
		);
		return $this->db->update('suratkeluar_aisyahga', $data, array('penerima' => $penerima));
	}
	public function hapus_data_suratkeluar_aisyahga($id)
	{
		return $this->db->delete('suratkeluar_aisyahga', array('penerima' => $id));
	} 
}