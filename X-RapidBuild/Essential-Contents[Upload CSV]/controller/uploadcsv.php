<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class uploadcsv extends CI_Controller {

  
	function __construct() {
        parent::__construct();
        $this->load->model('csv_model');
        $this->load->library('csvimport');
    }

    function index() {
    	if($this->session->userdata('masuk'))
    {
      $session_data = $this->session->userdata('masuk');
      $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
       // $data['addressbook'] = $this->csv_model->get_addressbook();
    	$this->load->view('design/header',$data);
        $this->load->view('uploadcsv/import');
        $this->load->view('design/footer');
    }
}

    function importcsv() {
    	if($this->session->userdata('masuk'))
    {
      $session_data = $this->session->userdata('masuk');
      $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
      //  $data['addressbook'] = $this->csv_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '1000';

        $this->load->library('upload', $config);


        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

            $this->load->view('design/header',$data);
        	$this->load->view('uploadcsv/import');
        	$this->load->view('design/footer');
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
            
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                    	//insert data disini pasti banyak sekali gan 
                        'nim'=>$row['nim'],
                        'nama'=>$row['nama'],
                        'nomortelepon'=>$row['nomortelepon'],
                        'email'=>$row['email'],
                        'programstudi'=>$row['programstudi'],
                        'F3'=>$row['F3'],
                        'F4'=>$row['F4'],
                        'F5'=>$row['F5'],
                        'F6'=>$row['F6'],
                        'F7'=>$row['F7'],
                        'F8'=>$row['F8'],
                        'F9'=>$row['F9'],
                        'F10'=>$row['F10'],
                        'F11'=>$row['F11'],
                        'F12'=>$row['F12'],
                        'F13'=>$row['F13'],
                        'F14'=>$row['F14'],
                        'F15'=>$row['F15'],
                        'F16'=>$row['F16'],
                        'F17'=>$row['F17'],
                        'F18'=>$row['F18'],
                        'F19'=>$row['F19'],
                        'Afirst'=>$row['Afirst'],
                        'Bfirst'=>$row['Bfirst'],
                        'A1'=>$row['A1'],
                        'A2'=>$row['A2'],
                        'A3'=>$row['A3'],
                        'A4'=>$row['A4'],
                        'A5'=>$row['A5'],
                        'A6'=>$row['A6'],
                        'A7'=>$row['A7'],
                        'A8'=>$row['A8'],
                        'A9'=>$row['A9'],
                        'A10'=>$row['A10'],
                        'A11'=>$row['A11'],
                        'A12'=>$row['A12'],
                        'A13'=>$row['A13'],
                        'A14'=>$row['A14'],
                        'A15'=>$row['A15'],
                        'A16'=>$row['A16'],
                        'A17'=>$row['A17'],
                        'A18'=>$row['A18'],
                        'A19'=>$row['A19'],
                        'A20'=>$row['A20'],
                        'A21'=>$row['A21'],
                        'A22'=>$row['A22'],
                        'A23'=>$row['A23'],
                        'A24'=>$row['A24'],
                        'A25'=>$row['A25'],
                        'A26'=>$row['A26'],
                        'A27'=>$row['A27'],

                        'B1'=>$row['B1'],
                        'B2'=>$row['B2'],
                        'B3'=>$row['B3'],
                        'B4'=>$row['B4'],
                        'B5'=>$row['B5'],
                        'B6'=>$row['B6'],
                        'B7'=>$row['B7'],
                        'B8'=>$row['B8'],
                        'B9'=>$row['B9'],
                        'B10'=>$row['B10'],
                        'B11'=>$row['B11'],
                        'B12'=>$row['B12'],
                        'B13'=>$row['B13'],
                        'B14'=>$row['B14'],
                        'B15'=>$row['B15'],
                        'B16'=>$row['B16'],
                        'B17'=>$row['B17'],
                        'B18'=>$row['B18'],
                        'B19'=>$row['B19'],
                        'B20'=>$row['B20'],
                        'B21'=>$row['B21'],
                        'B22'=>$row['B22'],
                        'B23'=>$row['B23'],
                        'B24'=>$row['B24'],
                        'B25'=>$row['B25'],
                        'B26'=>$row['B26'],
                        'B27'=>$row['B27'],
                    );
                    $this->csv_model->insert_csv($insert_data);
                }
                $this->session->set_flashdata('success', 'CSV data telah berhasil di import');
                redirect(base_url().'uploadcsv');
                //echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('design/header',$data);
        	    $this->load->view('uploadcsv/import');
        	    $this->load->view('design/footer');
            }
            
        } 
    }

}