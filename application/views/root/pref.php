<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Pengaturan SUPER ROOT </small>
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
          <div class="container col-sm-12 ">
          <div class="page-header">
          Super ROOT aplikasi Bank jurnal
          </div>

        <!-- /.col-lg-12 -->
        <div class="col-lg-6">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title">Menambah fakultas</h2>
                </div>
                <div class="panel-body">
                <?php echo form_open_multipart('master=main&slave=simpan_fakultas');?>
                    <table class="table table-responsive">
                        
                        <tr>
                            <td>Kode Fakultas</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'kd_fakultas','class'=>'form-control')) ?></td>
                        </tr>
                        <tr>
                            <td>Nama Fakultas</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'fakultas','class'=>'form-control')) ?></td>
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="text-align: left;">
                                <?php echo form_submit(array('value'=>'Update','class'=>'btn btn-primary')) ?>
                                &nbsp;
                                <?php echo form_reset(array('value'=>'Batal','class'=>'btn btn-primary')) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>           
            <?php echo form_close();  ?>
            
        </div>
         <div class="col-lg-6">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title">Menambah Dosen</h2>
                </div>
                <div class="panel-body">
                <?php echo form_open_multipart('master=main&slave=simpan_dosen');?>
                    <table class="table table-responsive">
                       
                        <tr>
                            <td>NIDN</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'nip','class'=>'form-control')) ?></td>
                        </tr>
                        <tr>
                            <td>Nama Dosen</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'dosen','class'=>'form-control')) ?></td>
                        </tr>
                        <tr>
                            <td>no_hp</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'no_hp','class'=>'form-control')) ?></td>
                        </tr>
                         <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><input type="radio" name="jk"  value="L">Laki &nbsp;&nbsp;
                            <input type="radio" name="jk"  value="P">Perempuan
                            </td>
                        </tr>
                         <tr>
                            <td>Fakultas</td>
                            <td>:</td>
                            <td>
                               <select name="kd_fakultas" class="form-control">
                               <?php foreach ($fakultas as $fakultas) { ?>
                                    <option value="<?php echo $fakultas['kd_fakultas'];?>"><?php echo $fakultas['fakultas'];?></option>
                                
                                    <?php }?>
                                    </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'jabatan','class'=>'form-control')) ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'status','class'=>'form-control')) ?></td>
                        </tr>
                        <tr>
                            <td>File Gambar</td>
                            <td>:</td>
                            <td><?php echo form_upload(array('name'=>'userfile','class'=>'')) ?></td>
                        </tr>
                         <tr>
                            <td>Password Login</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'password','class'=>'form-control')) ?></td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="text-align: left;">
                                <?php echo form_submit(array('value'=>'Update','class'=>'btn btn-primary')) ?>
                                &nbsp;
                                <?php echo form_reset(array('value'=>'Batal','class'=>'btn btn-primary')) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>           
            <?php echo form_close();  ?>
            
        </div>
    </div>
    <!--</div>-->
    <!-- /.row -->
</div>
</div>
</div>
</div>
</section>