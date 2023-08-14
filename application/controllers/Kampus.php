<?php
class Kampus extends CI_Controller {
	//Halaman Depan
	public function index()
	{
		$data['page']="home";
		$this->tampil($data);
	}

	//----------------Halaman SURAT MASUK	
	public function suratmasuk_aisyahga()
	{
		$data['page']="suratmasuk_aisyahga";
		$data['dt']=$this->m_kampus->ambil_data_suratmasuk_aisyahga();
		$this->tampil($data);
	}
	public function suratmasuk_aisyahga_tambah()
	{
		$data['page']="suratmasuk_aisyahga_tambah";
		$this->form_validation->set_rules('no_surat', 'No Surat', 'required');
		$this->form_validation->set_rules('pengirim', 'Pengirim', 'required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat', 'required');
		$this->form_validation->set_rules('lampiran', 'Lampiran', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required');
		if ($this->form_validation->run() == FALSE)
			$this->tampil($data);
		else
		{
			if($this->m_kampus->simpan_data_suratmasuk_aisyahga() ){
				?>
					<script>alert("Data berhasil disimpan");</script>
				<?php
				redirect('kampus/suratmasuk_aisyahga', 'refresh');
			}
			else
				die("Ada masalah dalam penambahan data");
		}
	}
	public function suratmasuk_aisyahga_edit($id)
	{
		$data['page']="suratmasuk_aisyahga_edit";
		$data['d']=$this->m_kampus->ambil_satu_data_suratmasuk_aisyahga($id);
		$this->form_validation->set_rules('no_surat', 'No Surat', 'required');
		$this->form_validation->set_rules('pengirim', 'Pengirim', 'required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat', 'required');
		$this->form_validation->set_rules('lampiran', 'Lampiran', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required');
		if ($this->form_validation->run() == FALSE)
			$this->tampil($data);
		else
		{
			if($this->m_kampus->update_data_suratmasuk_aisyahga() ){
				?>
					<script>alert("Data berhasil diupdate");</script>
				<?php
				redirect('kampus/suratmasuk_aisyahga', 'refresh');
			}
			else
				die("Ada masalah dalam update data");
		}
	}
	public function suratmasuk_aisyahga_hapus($id)
	{
		if ($this->m_kampus->hapus_data_suratmasuk_aisyahga($id) ){
			?>
					<script>alert("Data berhasil dihapus");</script>
				<?php
				redirect('kampus/suratmasuk_aisyahga', 'refresh');
		}
		else
			die("Ada masalah dalam hapus data");
	}

	//------------------halaman SURAT KELUAR
	public function suratkeluar_aisyahga()
	{
		$data['page']="suratkeluar_aisyahga";
		$data['dt']=$this->m_kampus->ambil_data_suratkeluar_aisyahga();
		$this->tampil($data);
	}
	public function suratkeluar_aisyahga_tambah()
	{
		$data['page']="suratkeluar_aisyahga_tambah";
		$this->form_validation->set_rules('no_surat', 'No Surat', 'required');
		$this->form_validation->set_rules('penerima', 'Penerima', 'required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required');
		$this->form_validation->set_rules('pengesah', 'Perihal', 'required');
		if ($this->form_validation->run() == FALSE)
			$this->tampil($data);
		else
		{
			if($this->m_kampus->simpan_data_suratkeluar_aisyahga() ){
				?>
					<script>alert("Data berhasil disimpan");</script>
				<?php
				redirect('kampus/suratkeluar_aisyahga', 'refresh');
			}
			else
				die("Ada masalah dalam penambahan data");
		}
	}
	public function suratkeluar_aisyahga_edit($id)
	{
		$data['page']="suratkeluar_aisyahga_edit";
		$data['d']=$this->m_kampus->ambil_satu_data_suratkeluar_aisyahga($id);
		$this->form_validation->set_rules('no_surat', 'No Surat', 'required');
		$this->form_validation->set_rules('penerima', 'Penerima', 'required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required');
		$this->form_validation->set_rules('pengesah', 'Pengesah', 'required');
		if ($this->form_validation->run() == FALSE)
			$this->tampil($data);
		else
		{
			if($this->m_kampus->update_data_suratkeluar_aisyahga() ){
				?>
					<script>alert("Data berhasil diupdate");</script>
				<?php
				redirect('kampus/suratkeluar_aisyahga', 'refresh');
			}
			else
				die("Ada masalah dalam update data");
		}
	}
	public function suratkeluar_aisyahga_hapus($id)
	{
		if ($this->m_kampus->hapus_data_suratkeluar_aisyahga($id) ){
			?>
					<script>alert("Data berhasil dihapus");</script>
				<?php
				redirect('kampus/suratkeluar_aisyahga', 'refresh');
		}
		else
			die("Ada masalah dalam hapus data");
	}


	public function suratmasuk_aisyahga_cetak()
	{
		$data['page']="suratmasuk_aisyahga";
		$data['dt']=$this->m_kampus->ambil_data_suratmasuk_aisyahga();
		$this->load->view('c_suratmasuk_aisyahga',$data);
	}
	public function suratkeluar_aisyahga_cetak()
	{
		$data['page']="suratkeluar_aisyahga";
		$data['dt']=$this->m_kampus->ambil_data_suratkeluar_aisyahga();
		$this->load->view('c_suratkeluar_aisyahga',$data);
	}

	//koleksi prosedur
	function tampil($data)
	{
		$this->load->view('header');
		$this->load->view('isi', $data);
		$this->load->view('footer');
	}

}