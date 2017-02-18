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
                <th>Nomer Induk Siswa</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                 <th>Alamat</th>
                <th>Action&nbsp;&nbsp;&nbsp;</th>
              </tr>
              </thead>
              
              <tbody>
              <?php 
              $i=1;
              foreach($hasil as $h){ ?>
              <tr>
                <td></td>
                <td><?php echo $h['nis']; ?></td>
                <td><?php echo $h['nama']; ?></td>
                <td><?php echo $h['kelas']."".$h['kelompok']; ?></td>
                <td><?php echo $h['alamat'];?></td>
                <td> 
                  <a href="<?php echo base_url();?>datasiswa/edit/<?php echo $h['nis']; ?>" class="tooltip-error"  title="Edit">
                                  <span class="green">
                                    <i class="icon-edit bigger-120"></i>
                                  </span>
                                </a> | 
                  <a href="<?php echo base_url();?>datasiswa/delete/<?php echo $h['nis']; ?>" class="tooltip-error" title="Delete">
                                  <span class="red">
                                    <i class="icon-trash bigger-120"></i>
                                  </span>
                                </a> | 
                  <a href="<?php echo base_url();?>datasiswa/lihat/<?php echo $h['id']; ?>" class="tooltip-error" title="Lihat Biodata Siswa">
                                  <span class="red">
                                    <i class="icon-eye-open bigger-120"></i>
                                  </span>
                                </a>
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
        
