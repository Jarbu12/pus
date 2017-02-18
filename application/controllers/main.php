<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	var $konten;
	public function __construct()
  {
    parent::__construct();
    // $this->load->library(array('form_validation','session'));
    $this->load->model('general');
    $this->load->helper('download');
     
    
  }

	
	public function index()
	{
		if($this->session->userdata('masuk') == TRUE)
		{
		$session_data=$this->session->userdata('masuk');
		$data['nama']=$session_data['nama'];
		$data['username']=$session_data['username'];
		$data['foto']=$session_data['foto'];
		$key=$session_data['username'];
		$data['fakultas'] =$this->db->get('tb_fakultas')->result_array();
		$this->load->view('design/header',$data);
		$this->load->view('jurnal/tambah_jurnal',$data);
		$this->load->view('design/footer',$data);
	    }
	}

	public function simpan_jurnal()
	{
		if($this->session->userdata('masuk') == TRUE)
		{
		$session_data=$this->session->userdata('masuk');
		$data['nama']=$session_data['nama'];
		$data['username']=$session_data['username'];
		$data['foto']=$session_data['foto'];
		$key=$session_data['username'];

		$config['upload_path'] = './assets/jurnal/';
    	$config['allowed_types'] = 'pdf';
    	$config['max_size'] = '0';
    	$config['max_width']  = '0'; //No Limit
    	$config['max_height']  = '0'; //No Limit
   
 
    	$this->load->library('upload', $config);

    	$this->upload->do_upload();
    	$f = $this->upload->data();
    
    	//end konfigurasi foto 
		$judul		=$this->input->post('judul');
		$pembuat	=$this->input->post('pembuat');
		$tema		=$this->input->post('tema');
		$publisher	=$this->input->post('publisher');
		$ket 	 	=$this->input->post('ket');
		$nama_file  =$f['orig_name'];
		$kd_fakultas=$this->input->post('fakultas');
		$dosbing    =$this->input->post('dosbing');
	

		$data_jurnal=array(
			'id_user' =>$data['username'],
			'judul'		=>$judul,
			'pembuat'		=>$pembuat,
			'tema' 	=>$tema,
			'publish'	=>$publisher,
			'ket'		=>$ket,
			'nama_file' =>$nama_file,
			'kd_fakultas'=>$kd_fakultas,
			'waktu'		=>date('Y-m-d H:i:s'),
			'dosbing'   =>$dosbing,
			'status'	=>0,
		);

		$this->db->insert('tb_jurnal',$data_jurnal);
		$this->session->set_flashdata('jurnal','<div class="aler alert-success">Jurnal Sukses Disimpan</div>');
		redirect('master=main');

	    }

	}

	public function evaluate()
	{
		if($this->session->userdata('masuk') == TRUE)
		{
			if($this->session->userdata('level') == 1 )
			{
			$session_data=$this->session->userdata('masuk');
			$data['nama']=$session_data['nama'];
			$data['username']=$session_data['username'];
			$data['foto']=$session_data['foto'];
			$key=$session_data['username'];

			$data['jurnal']=$this->db->where('dosbing',$key)->get('tb_jurnal')->result_array();

			$this->load->view('design/header',$data);
			$this->load->view('js/jsdatatable');
			$this->load->view('include/jurnal/manage_jurnal',$data);
			$this->load->view('design/footer',$data);
			}
		}

	}

	public function aktifkan()
	{
		$id_jurnal=$this->encrypt->decode_url($this->input->get('id_jurnal'));
		$data=array(
			'status'=>1
			);
		$this->db->where('id_jurnal',$id_jurnal)->update('tb_jurnal',$data);
		redirect('master=main&slave=evaluate');
	}

	public function get_dosen()
	{
		$kd_fakultas=$this->input->post('fakultas');
		$data=$this->db->where('kd_fakultas',$kd_fakultas)->get('tb_dosen')->result();
		$this->konten .="<option value=''>-- Pilih Salah Satu --</option>";
		foreach ($data as $data ) {
			 $this->konten .="<option value='$data->nip'>$data->dosen</option>\n";
			
		}
		echo $this->konten;
	}

	public function daftar_jurnal()
	{
		if($this->session->userdata('masuk') == TRUE)
		{
		$session_data=$this->session->userdata('masuk');
		$data['nama']=$session_data['nama'];
		$data['username']=$session_data['username'];
		$data['foto']=$session_data['foto'];
		$key=$session_data['username'];
		$kd_fakultas=$this->encrypt->decode_url($this->input->get('kd_fakultas'));
		$data['jurnal']=$this->db->query("SELECT tb_jurnal.id_jurnal,tb_jurnal.id_user, tb_jurnal.judul,tb_jurnal.judul,tb_jurnal.pembuat,tb_jurnal.tema ,tb_jurnal.publish ,tb_jurnal.ket ,tb_jurnal.nama_file,tb_jurnal.kd_fakultas ,tb_dosen.nip,tb_dosen.dosen,tb_jurnal.dosbing FROM tb_jurnal,tb_dosen WHERE tb_jurnal.dosbing=tb_dosen.nip AND tb_jurnal.status=1 AND tb_jurnal.kd_fakultas='".$kd_fakultas."' ")->result_array();
		$this->load->view('design/header',$data);
		$this->load->view('js/jsdatatable');
		$this->load->view('include/jurnal/daftar_jurnal',$data);
		$this->load->view('design/footer',$data);
	}
	}

	public function download(){	
	$kd_fakultas=$this->input->get('kd_fakultas');
	$file=$this->encrypt->decode_url($this->input->get('ref_id'));	
	$isi = file_get_contents(base_url('assets/jurnal/').$file);
		force_download($file,$isi);
	//	redirect('master=main&slave=daftar_jurnal&kd_fakultas='.$kd_fakultas);
	}	

	public function super_root()
	{
		if($this->session->userdata('masuk') == TRUE)
		{
			if($this->session->userdata('level') == 'root' )
			{
			$session_data=$this->session->userdata('masuk');
			$data['nama']=$session_data['nama'];
			$data['username']=$session_data['username'];
			$data['foto']=$session_data['foto'];
			$key=$session_data['username'];
			$data['fakultas'] =$this->db->get('tb_fakultas')->result_array();
			$this->load->view('design/header',$data);
			$this->load->view('root/pref',$data);
			$this->load->view('design/footer',$data);
			}
		}
	}

	public function simpan_fakultas()
	{
		if($this->session->userdata('masuk') == TRUE)
		{
			if($this->session->userdata('level') == 'root' )
			{
			$data['kd_fakultas']=$this->input->post('kd_fakultas');
			$data['fakultas']=$this->input->post('fakultas');
			$this->db->insert('tb_fakultas',$data);
			redirect('master=main&slave=super_root');
			}
		}
	}

	public function simpan_dosen()
	{
		if($this->session->userdata('masuk') == TRUE)
		{
			if($this->session->userdata('level') == 'root' )
			{

				//konfigurasi foto 
			$config['upload_path'] = './assets/user/';
    		$config['allowed_types'] = 'gif|jpg|png';
    		$config['max_size'] = '0';
   			$config['max_width']  = '0'; //No Limit
   			$config['max_height']  = '0'; //No Limit
   
 
   		 	$this->load->library('upload', $config);

    		$this->upload->do_upload();
    		$f = $this->upload->data();
			$data['nip']=$this->input->post('nip');
			$data['dosen']=$this->input->post('dosen');
			$data['jk']=$this->input->post('jk');
			$data['alamat']=$this->input->post('no_hp');
			$data['kd_fakultas']=$this->input->post('kd_fakultas');
			$data['foto']=$f['orig_name'];
			$data['jabatan']=$this->input->post('jabatan');
			$data['status']=$this->input->post('status');
			$login['username']=$this->input->post('nip');
			$login['password']=$this->input->post('password');
			$login['nama']=$this->input->post('dosen');
			$login['foto']=$f['orig_name'];

			$this->db->insert('tb_dosen',$data);
			$this->db->insert('tb_user',$login);
			$this->session->set_flashdata('sukses','<div class="alert alert-success">Data Berhasil Disimpan</div>');
			redirect('master=main&slave=super_root');


			}
		}
	}



}
