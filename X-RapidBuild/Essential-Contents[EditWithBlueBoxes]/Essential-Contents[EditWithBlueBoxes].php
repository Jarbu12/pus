<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>DecoReco - First Page </small>
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
          Edit Data
          </div>

        <!-- /.col-lg-12 -->
        <div class="col-lg-6">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title">Data Menu</h2>
                </div>
                <div class="panel-body">
                <?php echo form_open_multipart('master/simpan');?>
                    <table class="table table-responsive">
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td>
                               <select name="kategori" class="form-control">
                                    <option value="kaos">T-SHIRT</option>
                                    <option value="hodie">Hodie</option>
                                    </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Kode SKU</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'kode','class'=>'form-control','value'=>$edit['id_sku'])) ?></td>
                        </tr>
                        <tr>
                            <td>Nama Menu</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'menu','class'=>'form-control','value'=>$edit['nama'])) ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'harga','class'=>'form-control','value'=>$edit['harga'])) ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'ket','class'=>'form-control','value'=>$edit['deskripsi'])) ?></td>
                        </tr>
                        <tr>
                            <td>File Gambar</td>
                            <td>:</td>
                            <td><?php echo form_upload(array('name'=>'file','class'=>'')) ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <img src="<?php echo base_url('') ?>/assetsfront/images/home/baju/<?php echo $edit['foto'];?>" style="width: 160px; height: 160px;" class="img-rounded">
                            </td>
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