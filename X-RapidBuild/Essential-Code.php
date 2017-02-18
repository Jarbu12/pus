<?php/*
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+                            Happy Library                              +
+                                 v1.2                                  +
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*
*ini adalah kumpulan perintah command yang biasa digunakan dalam code igniter 1-3 , 
*dalam sebuah Pemanggilan Variable ataupun sebuah Alert/Warning
*
*1st Commit 06 September 2015 Fajar Buwana Eka Paksi , Universitas Semarang
*Contributors : Fajar Buwana Eka Paksi , (Other Alias) , (Other Alias) 
*/


/*
*
*[SESSION VARIABLE CALLING]
*Contoh Pemanggilan Variable Username 
*
*****************THIS FUNCTION Need A SESSION in a CONTROLLER************/
//[CONTROLLER]
 if($this->session->userdata('logged_in'))
	{
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $data['nama'] = $session_data['nama'];
      $data['foto'] = $session_data['foto'];
	 $this->load->view('login/welcome_home', $data);
//[VIEWS] ?>
 <h2>Selamat datang<?php echo " "; echo  $username; ?>!</h2>
   <a href="<?php echo site_url('welcome/logout');?>">Logout</a>
   
/*
*
*[REDIRECT]
*Contoh Redirecting atau pengalihan 
*Jika menggunakan script ini otomatis akan dialihkan kepada WEB yang dituju
*
*************('NamaController/Function','Addtional Function')*************/ <?php
				redirect('welcome/login_index','refresh');

/*
*[ADMIN LEVELING]
*Pemanggilan leveling pada multiuser login
*Disabling edit/Delete button Jika anda BUKAN Seorang Admin 
*Value 1=Will enabled the button if u a Admin , and able to making a changes in ur table/CRUD Queries
***************************************EXAMPLE CODES**********************/
                    <td><?php IF($this->session->userdata('level')=='1'){; 
						?>
						<a href="" ng-click="prod_edit(product.id)" class="btn btn-primary">Edit</a>&nbsp;<a href="" ng-click="prod_delete(product.id)" class="btn btn-danger">Delete</a>
					<?php }	?></td>

/*
*[ALERT MESSAGE POP UP]
*Command ini akan membrikan sebuah notifikasi atas semua tindakan yang terjadi pada web response 
*mulai dari Queries Table dan yang lainya 
*
***************************************EXAMPLE CODES**********************/
                   echo '<script>alert("LOGIN Dulu kakak!");</script>';
				   echo '<script>alert("Sebelum Masuk Registrasi dlu");</script>';
				   
				   
/*
*[BUTTON CALLING Code Igniter in PHP Mode]
*Pemanggilan Sebuah Fungsi Halaman jika anda sedang masuk dalam Mode PHP 
*
*
***************************************EXAMPLE CODES**********************/
				echo "<br><br><a href='".site_url('hello/signup')."'>Kembali ke Menu Login</a>";
				echo "<a href='".base_url()."frontend/makanan/".$mja['id']."' class='btn btn-primary'>Pilih</a>";

/*
*[SESSION Page PROTECTION] Perlindungan sebuah halaman menggunakan Controller 
*Fungsi ini adalah melindungi sebuah halaman pada session 
*kata kata 'logged_in' set_userdata dimana value dapat disesuaikan 
*
***************************************EXAMPLE CODES************************/
<?php
   if($this->session->userdata('logged_in'))
     {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 //Controller View yang dilindungi
	 }
	 Else
	 {
	 //jika salah maka lempar ke halaman login lagi dengan fungsi REDIRECT
	 }
	 ?>
	 
/*
*[CALLING Function] js(javascript) ,picture(gambar)
*Fungsi ini adalah memanggil gambar dari folder Asset 
*assets/imgs/angularjs.png 
*adalah PATH dimana anda meletakkan gambar anda
*
*********************************************v[PATH]v*****************/
	<img src="<?php echo base_url();?>assets/imgs/angularjs.png" width="50px" height="50px">
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/tableExport.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.base64.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/html2canvas.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/sprintf.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jspdf.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/base64.js"></script>
  

/*
*[PASSING FORM VARIABLE]
*Fungsi ini adalah passing form variable dengan fungsi method POST
*lalu diquery ke database dengan models
*
**********************************  ************************************/ <?php
	$username = $this->input->post('username');
    $password = $this->input->post('password');
	$alamat = $this->input->post('alamat');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
  
    //memasukan ke array
    $data = array(
     'username' => $username,
     'password' => $password,
     'nama' => $nama,
     'email' => $email,
	 'alamat'=> $alamat,
     'active' => 0
     );
    //tambahkan akun ke database
/*
*FORM VALIDATION
*
*
*/
<!-- alert error -->
				<?php if ($this->session->flashdata('error') or validation_errors() != false ): ?>
					<div id="alert1234" class="alert alert-error alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>abc<?= $this->session->flashdata('error'); ?><?php echo validation_errors(); ?></strong>
					</div>
				<?php endif ?>
				<?php
function tambah_komen(){


 $this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
$this->form_validation->set_rules('isi', 'Isi', 'required');

if ($this->form_validation->run() == FALSE){
$this->load->view('val_tes');
}else{
$data= array(
'username' => $this->input->post('username'),
'isi' => $this->input->post('isi')
);
print_r($data);

}

}

 public function username_check($str)
       {
          $kd=gettype(substr($str,0,1));
          $kode="$kd";
      
              if ($kode != 'string' )
              {
                     $this->form_validation->set_message('username_check', 'Format nim anda salah ,dan jangan lupa Tanpa Titik');
                     return FALSE;
              }
              else 
              {
                return TRUE;
              }
       }
	
	
/*
*[FOREACH]
*Fungsi ini adalah mengeluarkan seluruh isi table dan di lopping di view 
* 
*/

//[Models]
class Bukupoopulermodel extends CI_Model {
function __construct()
  {
   parent::
function retrieve_products(){
            $query = $this->db->get('daftarbuku'); // Memlilih table database
            return $query->result_array(); // Tampilkan dalam bentuk array
        }
		
//[Controller]
$this->load->model('namamodel^');
$data['daftarbuku'] = $this->bukupopulermodel->retrieve_products();
$this->load->view('bukupopuler/bukupopulerteknologi', $data);

//[Views]
 <?php foreach($bukupoptek3 as $row):?>
 <?php echo $row['judulbuku']; ?>
 <?php endforeach;?>
 
 
 
 /*
 *
 *
 *
 *[PERTAMBAHAN VALUE DARI DATABASE]
 *fecthing data dari db lalu ditambahkan oleh form POST
 *
 *
 *
 *
 *
 */<?php
 
 public function peminjaman()
	{
	
	$hitcount=$this->input->post('hitcount');
	$stock=$this->input->post('stock');
	$nim=$this->input->post('nim');
	$kodebuku=$this->input->post('kodebuku');
	$tglpinjam=date('d F Y', strtotime($this->input->post('tglpinjam')));
	$tglkembali=date('d F Y', strtotime($this->input->post('tglpinjam').'+7 days'));
//	$tglkembali=date('d F Y', strtotime($this->input->post('tglkembali')));
	$status=$this->input->post('status');
	$data=array(
		    'nim'       =>$nim,
			'kodebuku'   =>$kodebuku,
			'tglpinjam'  =>$tglpinjam,
			'tglkembali' =>$tglkembali,
			'status'     =>$status,
			);
	foreach($this->dafbukmodel->retrieve_products() as $item)
			{
			if($item['kodebuku'] == $data['kodebuku']){
			$item['hitcount'] = $item['hitcount']+$hitcount;
			$this->db->where('kodebuku',$kodebuku);
			$id=$this->db->update('daftarbuku',$item);
			}
			}
	foreach($this->dafbukmodel->retrieve_products() as $item2)
			{
			if($item2['kodebuku'] == $data['kodebuku']){
			$item2['stock'] = $item2['stock']-$stock;
			$this->db->where('kodebuku',$kodebuku);
			$id=$this->db->update('daftarbuku',$item2);
			}
			}
			
			$this->load->model('pinjam');
			$id = $this->pinjam->add_account_sekuensial($data);
			echo '<script>alert("Data Telah Berhasil Dimasukan! ");</script>';
			redirect('hello/pinjambaru','refresh');
	}
	
/*
*[FORMAT NUMERIC PENAMBAHAN TANGGAL] 
*
*********************EXAMPLES CODES******************
*/
<?php
$tglpinjam=date('d F Y', strtotime($this->input->post('tglpinjam')));
$tglkembali=date('d F Y', strtotime($this->input->post('tglpinjam').'+7 days'));
?>

/*
*ARRAY SUM 
*By harjito select by No_Nota
*/
<?php
 $tot=$this->db->query("SELECT no_nota , SUM(subtotal) as total FROM tbl_orderlist_det GROUP BY no_nota ORDER BY no_nota ASC")->result();
$tot=$this->db->query("SELECT SUM(harga) as total FROM tbl_semuabaju ")->result();
?>
/*
*
*Export Data ke Excel 
*
*/
<?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=exceldata.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

/*
*AMBIL NAMA GAMBAR 
*[Upload CONFIG]
*/
<?php
 //konfigurasi foto 
	$config['upload_path'] = './assetsfront/images/home/baju';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '5000';
    $config['max_width']  = '0'; //No Limit
    $config['max_height']  = '0'; //No Limit
   
 
    $this->load->library('upload', $config);

    $this->upload->do_upload();
    $f = $this->upload->data();
    
    //end konfigurasi foto 
	$id_sku		=$this->input->post('id_sku');
	$nama		=$this->input->post('nama');
	$harga		=$this->input->post('harga');
	$stock		=$this->input->post('stock');
	$ket 	 	=$this->input->post('ket');
	$foto    	=$this->input->post('poto');

	if($f['orig_name'] == null)
	{
		$photo=$this->input->post('poto');
	}
	else
	{
        $photo=$f['orig_name'];
	}

	$data=array(
		'nama'		=>$nama,
		'harga'		=>$harga,
		'stock' 	=>$stock,
		'deskripsi'	=>$ket,
		'foto'		=>$photo,
		);
	
 ?>

/*
*LIBRARY CART
*[Cart Library]
*/
<?php
$harga=$this->cart->cart_total(); //jika pake CI3 pakenya total()
$harga=$this->cart->total_items();

$konten=$this->cart->contents();
foreach ($konten as $konten) {
	
}
//INSERT WITH OPTIONS
$data = array(
           'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('quantity'),
            'price'   => $this->input->post('price'),
            'name'    => $this->input->post('namaprodak'),
            'options'	=>array(
            	'other' =>$other,
            	)
            );


//HAPUS CART 
 $data = array(
                'rowid' => $key,
                'qty'   => 0
                );

                $this->cart->update($data);

//DESTROY CART 
$this->cart->destroy();
?>

/*
*INSTANT SESSION 
*[Instant Session]
*
*/
 <?php
 //INSTANT INITIALIZED
        $cust = array(
            'nama'   => $nama,
            'meja'   => $this->encrypt->decode_url($id_meja),
            'status' => $status,
            'pelayan'=> '-',
        );
        
            $this->session->set_userdata('cust',$cust);
 //END INSTANT INITIALIZED

//CALLING THE SESSION 
$sesi_cust = $this->session->userdata('cust');
$sessi_cust['nama'];
//DESTROY THE SESSION 
$this->session->unset_userdata('cust');

?>
	
/*
*Like
*[Untuk Mencari data]
*/			
<?php
$querymakanan = "SELECT * FROM tbl_menu WHERE menu LIKE '%".$_GET['cari']."%' ORDER BY id_menu DESC";
?>

/*
*
*Mekanisme Query Laporan 
*[Laporan]
*
*/<?php

public function tanggaltes()
    {       
          $tanggal1=date('m',strtotime('january'));
          $tahun=date('Y',strtotime('2016'));
          $data['report'] = $this->db->query("SELECT  DATE(tgl) as tgl, MONTH(tgl) as bln, YEAR(tgl) as thn, TIME(tgl) as waktu, no_nota, nama, jml_bayar, pelayan, status_order, status_payment, status_resto FROM tbl_orderlist WHERE MONTH(tgl)='$tanggal1' AND YEAR(tgl)='$tahun'")->result_array();
          $data['totalamount']= $this->db->query("SELECT SUM(jml_gtotal) as pemasukan , SUM(jml_bayar) as kotor FROM tbl_orderlist WHERE MONTH(tgl)='$tanggal1' AND YEAR(tgl)='$tahun'")->row_array();
          echo "<pre>";
          print_r($data);
          echo "</pre>";
    }

/*
*
*Eleminate This->load->view
*
*
*/

function opview($view, $data=null, $return=false)//Modifikasi Passing View
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $return);

		if ($return) return $view_html;
	}
	?>
/*
*
*ALL ABOUT AJAX
*[Semua Tentang Ajax]
*
*/

[Kirim Semua Konten Form]   ->TANPA AKSI FEEDBACK

<script type="text/javascript" >
 $(document).ready(function(){
			$('#simpan').click(function(){
				var konten=$('#form-gaji').serialize();
				$.ajax({
				type 	:'POST',
				url 	:'<?php echo site_url('gaji/simpan');?>',
				data	: konten,
				success :function(data){
				alert(data);				//tanpa feedback
				}
				});
			});
 });
</script>

[Kirim beberapa konten dengan feedback]
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#simpan').click(function() //terletak di id button submit
		{
			var form_data={
				nama :$('#nama').val(),
				email:$('#email').val(),
				message:$('#message').val()
			};
			$.ajax({
				type : 'POST',
				url  : '<?php echo base_url('controller/method');?>',
				data : form_data,
				success: function(data){
					$('#output').html(data) //bisa pake $this->session->set_flasdata();
				}
			});
		});
	});
</script>

[Kirim Hanya Beberapa Value Saja]  ->DENGAN AKSI FEEDBACK
 <script>
        $(document).ready(function(){
            $("#periode").change(function(){
                var periode=$("#periode").val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url();?>index.php/transaksi/get_tenor",
                    data : "id_period="+periode,
                    success: function (data){
                        $("#tenor").html(data); //dengan feedback , seperti pemilihan mata kuliah SIA
                    }
                });
            });
        });
        </script>


[Kirim beberapa data ajax] //TANPA FEEDBACK
 <script>
        $(document).ready(function(){
            $("#periode").change(function(){
              var dataform = {
							nama: $("#namapelajar").val(),    //nama adalah post method ke controller Ex $this->input->post('nama');
							sekolah: $("#sekolah").val(),     //tempt adalah post method ke controller Ex $this->input->post('sekolah');
							};
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url();?>index.php/transaksi/get_tenor",
                    data : dataform,
                    success: function (data){
                       alert(data);
                    }
                });
            });
        });
        </script>


[Login dengan Ajax]
<script>
$(document).ready(function() {
	$("#tombollogin").click(function() {

		var aksilogin = $("#frmlogin").attr('action');
		var datalogin = {
			username: $("#username").val(),
			password: $("#password").val()
		};

		$.ajax({
			type: "POST",
			url: aksilogin,
			data: datalogin,
			success: function(aksi)
			{
				if(aksi == '1')
					$("#frmlogin").slideUp('slow', function() {
						$("#hasil").html("<p class='berhasil' align='center'>Anda Berhasil Login<br>Halaman akan dialihkan dalam 5 detik...<meta http-equiv='refresh' content='5; url=http://gedelumbung.com'></p>");
					});
				else
					$("#frmlogin").slideUp('slow', function() {
						$("#hasil").html("<p class='gagal' align='center'>Username atau Password salah...!!! <br> <a onClick=buka(); style='cursor:pointer;'>Ulangi Lagi<a></p>");
					});
				document.frmlogin.username.value = "";
				document.frmlogin.password.value = "";
			}
		});
		return false;
	});

});
function buka()
{
	$('#frmlogin').slideDown();
}
</script>


[LIHAT By Button lihat otomatis] - KALAU PAKE CI 2 harus pake table sessions 

<?php $ket=$idbrg."','".$namabrg."','".$pendingdo."','".$pendingpo; ?>
            <button type="button" id="caridoo" name="caridoo" onclick="isiform('<?php echo $ket;?>')" class="btn btn-primary" >Lihat</button></div></td>

OPSI 1
<script>
function isiform(brg,namabrg,pendingdo,pendingpo) //nama id field form 
              { 
                
               document.getElementById("brg").value=brg;
               document.getElementById("namabrg").value=namabrg;
              
               document.getElementById("pendingdo").value=pendingdo;
               document.getElementById("pendingpo").value=pendingpo;
            
              $("#status").html("<img src='<?php echo base_url() ?>assets/img/loading.gif'> loading.."); //Optional
                        $("#loading").show();     //Optional
                        var idbrg=$("#brg").val();
                            $.ajax({
                            url:"<?php echo base_url() ?>index.php/toko/Listtoko/carido",
                            data:"idbrg="+idbrg,
                            cache:false,
                              })
                               .done(function( html ) {
                              $("#status").html('Sukses..'); //optional
                               $("#sementara").html(html);                  
                             
                              });
                     
            }
            </script>

OPSI 2
<script>
function isiform(dosen,matakuliah,sks,kelompok,ruang,hari,waktu,nip) //nama id field form 
              { 
              
               document.getElementById("dosen").value=dosen;
               document.getElementById("matakuliah").value=matakuliah;
               document.getElementById("sks").value=sks;
               document.getElementById("kelompok").value=kelompok;
               document.getElementById("ruang").value=ruang;
               document.getElementById("hari").value=hari;
               document.getElementById("waktu").value=waktu;
                document.getElementById("nip").value=nip;
                 var nip=$("#nip").val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url();?>index.php/krs/get_dosen",
                    data : "nip="+nip,
                    success: function (data){
                        $("#infodosen").html(data); //dengan feedback
                    }
                }); 
                     
            }
            </script>

[Ngonceki konten Ajax]        
<script>
$(document).ready(function() {
	$("#cari").click(function() { //biasanya di pasang di button <button type="submit" name="submit" id="cari">
		var konten=$("#data").val();
		var caridata="nim="+konten;

		$.ajax({
			type 	: 'POST',
			url  	:  "<?php echo base_url() ?>index.php/sekolah/carinim",
			data 	: caridata,
			dataType: 'JSON',
			success	: function(data){
				$("#nim").val(data.nim);
				$("#nama").val(data.nama);
				$("#afilitas").val(data.asilitas);
			}

		});
	});
});
</script>

[AMBIL DATA AJAX]

OPSI 1
<script>
$(document).ready(function(){
		setInterval(function(){
			$("#show").load('data.php')
		},3000
		);
});
</script>


/*
*
*EVENT SCHEDULER
*
*/
//STANDARD 
CREATE EVENT test_event_03
ON SCHEDULE EVERY 1 MINUTE
STARTS CURRENT_TIMESTAMP
ENDS CURRENT_TIMESTAMP + INTERVAL 1 HOUR
DO
//update command
update mahasiswa set semester=semester+1;
//insert command
INSERT INTO messages(message,created_at)
   VALUES('Test MySQL Event 2',NOW());
//CUSTOM
CREATE EVENT test_event_03
ON SCHEDULE EVERY 1 MINUTE
STARTS CURRENT_TIMESTAMP
ENDS CURRENT_TIMESTAMP + INTERVAL 1 HOUR
DO
update mahasiswa set semester=semester+1, flag = 1 where flag= 0;