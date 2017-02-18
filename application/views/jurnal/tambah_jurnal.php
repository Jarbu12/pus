<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Tambah Jurnal </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Jurnal</li>
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
          Upload Jurnal
          <?php echo $this->session->flashdata('jurnal');?>
          </div>
         

        <!-- /.col-lg-12 -->
        <div class="col-lg-6">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title">Data Menu</h2>
                </div>
                <div class="panel-body">
                <?php echo form_open_multipart('master=main&slave=simpan_jurnal');?>
                    <table class="table table-responsive">
                        <tr>
                            <td>Judul</td>
                            <td>:</td>
                            <td>
                              <?php echo form_input(array('name'=>'judul','class'=>'form-control')) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Pembuat</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'pembuat','class'=>'form-control')) ?></td>
                        </tr>
                        <tr>
                            <td>Tema</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'tema','class'=>'form-control')) ?></td>
                        </tr>
                        <tr>
                            <td>Publisher Jurnal(Uploader Jurnal)</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'publisher','class'=>'form-control')) ?></td>
                        </tr>
                         <tr>
                            <td>Fakultas</td>
                            <td>:</td>
                            <td><select name="fakultas" class="form-control" id="fakultas">
                            <option value="" required="">--Pilih Fakultas--</option>
                                <?php foreach($fakultas as $f){?>
                                    <option value="<?php echo $f['kd_fakultas'];?>"><?php echo $f['fakultas'];?></option>
                                <?php  } ?> 
                                </select>
                            </td>
                        </tr>
                         <tr>
                            <td>Dosbing</td>
                            <td>:</td>
                            <td><select name="dosbing" class="form-control" id="dosbing">
                             <option value="" required="">--Pilih Dosen Pembimbing--</option>

                                        
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'ket','class'=>'form-control')) ?></td>
                        </tr>
                        <tr>
                            <td>File Jurnal</td>
                            <td>:</td>
                            <td><?php echo form_upload(array('name'=>'userfile','class'=>'')) ?></td>
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
            <?php echo form_close(); ?>
            
        </div>
    </div>
    <!--</div>-->
    <!-- /.row -->
</div>
</div>
</div>
</div>
</section>
<script>
        $(document).ready(function(){
            $("#fakultas").change(function(){
                var fakultas=$("#fakultas").val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('master=main&slave=get_dosen');?>",
                    data : "fakultas="+fakultas,
                    success: function (data){
                        $("#dosbing").html(data);
                    }
                });
            });
        });
        </script>