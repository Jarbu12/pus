<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Data Siswa</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pilih Kategori</li>
    </ol>
</section>

			<section class="content" >
    <div class="col-lg-12">
      <!-- general form elements -->     
      <div class="box box-primary">
        <div class="box-header">       
       
          <div class="box-body"> 
         
        
        <!--Konten SPASI
        <div class="container col-sm-12 ">
        <br><br>
        </div>
        <!--END Konten SPASI-->
        <div class="container col-sm-12 ">
          <div class="page-header">
        <h4>Datatable Siswa</h4>
        </div>
       <p>
       <a href="<?php echo base_url('datasiswa/tambah'); ?>" class="btn btn-primary"> Tambah data</a>
       </p>
        <!----INI ADALAH KONTEN Data Siswa-------->
            <table id="sample-table-2" class="table table-striped ">
              <thead>
              <tr>
                <th>No</th>
                <th>ID_User/NIM</th>
                <th>Judul</th>
                <th>Tema</th>
                 <th>Dosbing</th>
                <th>Action&nbsp;&nbsp;&nbsp;</th>
              </tr>
              </thead>
              
              <tbody>
              <?php 
              $i=1;
              foreach($jurnal as $jurnal){ ?>
              <tr>
                <td></td>
                <td><?php echo $jurnal['id_user']; ?></td>
                <td><?php echo $jurnal['judul']; ?></td>
                <td><?php echo $jurnal['tema']; ?></td>
                <td><?php echo general::dosbing($jurnal['dosbing']);?></td>
                <td> 
                  <a href="<?php echo site_url('master=main&slave=download&ref_id='.$this->encrypt->encode_url($jurnal['nama_file'])."&kd_fakultas=".$this->encrypt->encode_url($jurnal['kd_fakultas']));?>" class="tooltip-error btn btn-primary"  title="Edit">
                                 <i class="fa fa-print"></i> Download
                                </a> 
                 
                  <a href="<?php echo site_url();?>" class="tooltip-error btn btn-primary" title="Lihat Biodata Siswa">
                                 
                                    <i class="icon-eye-open bigger-120"></i>Lihat
                               
                                </a>
                  <?php if($this->session->userdata('level') == 1){?>
                  <a href="<?php echo site_url();?>" class="tooltip-error btn btn-danger" title="Delete">
                                  
                                    <i class="icon-trash bigger-120"></i>Hapus
                                
                                </a> 
                                <?php }?>
                </td> 
              </tr>
              <?php }?>
              </tbody>
              </table>
        
        </div>

        
        </div>
        </div>
        </div>
        </section>
        
