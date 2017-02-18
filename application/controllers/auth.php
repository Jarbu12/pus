<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
     $this->load->library(array('form_validation','session'));
     
    
  }


	public function index()
	{
		$this->load->view('login');
	}
        
	public function login_validation()
  {
   //Aksi untuk melakukan validasi
 
	
   $this->form_validation->set_rules('username', 'Username', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
  
   //validasi file...........
//	$recaptcha = $this->input->post('g-recaptcha-response');
//	if (!empty($recaptcha)) {
  //          $response = $this->recaptcha->verifyResponse($recaptcha);
   //         if (isset($response['success']) and $response['success'] === true) {
	//batas logic google recaptcha IF ELSE
   if($this->form_validation->run() == TRUE)
     {
		    redirect('master=main');
     }
    else
     {	
	     $this->load->view('login');  
	   }

  }

   function check_database()
    {     
          //AGREEMENT CHECKBOX
         
        
        //validasi kedua dengan cara mengecek database
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');
       
		//$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
		 //$hash_password = $hasher->HashPassword($password);

        //query ke database dan memanggil model m_login
        $this->load->model('user');
        $result = $this->user->login($username,$password,$level);//$uniquekey);
		

        //jika hasilnya ada pada maka masukan ke season field nama dan username dengan nama season : login
        if($result)
        {
            foreach($result as $row)
            {
                $sess_array = array(
                    
                    'username' => $row->username,
                   	'password' => $row->password,
                   	'level' => $row->level,
                   	'nama'=>$row->nama,
                    'foto'=>$row->foto,
                   	
                   
                );

                $this->session->set_userdata('masuk', $sess_array);
				        $this->session->set_userdata('level', $level);
            }
            return TRUE;
        }
        else
        {
		  	$this->form_validation->set_message('check_database','Cek Username dan Password Anda Gan');
        return FALSE;
        }
		
   
  }
  // else
   //{
//	echo '<script>alert("anda kurang ganteng!!");</script>';
//	}
   

   
    
        public function logout()
	{
           ob_start();
        
           $this->session->sess_destroy();
           echo '<script>alert("Terima Kasih Telah Berpartisipasi ");</script>';
           redirect('master=auth','refresh');
           ob_end_flush();
	}
}
