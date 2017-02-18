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
        <h4>Poster </h4>
        </div>
        <?php $no=1;
        foreach ($poster as $poster) { ?>
              <div class="col-lg-4 col-md-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">                                
                                <div class="col-xs-9">
                                    <h2 class="panel-title"><?php echo $no++ . '. ' . ucwords($poster['nama']) ?></h2>
                                </div>
                                <div class="col-xs-3 text-right">
                                    <a href="<?php echo site_url('master/edit_barang.php?id='.$poster['id_sku']) ?>" style="color: #fff"><i class="fa fa-edit fa-1x"></i></a>
                                    &nbsp;
                                    <a href="<?php echo site_url(''.$poster['id_sku']) ?>" onclick="return confirm('Hapus [<?php echo ucwords($poster['nama']) ?>]')" style="color: #fff"><i class="fa fa-remove fa-1x"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-3">
                                <?php if (!empty($poster->foto)) { ?>
                                       <i class="fa fa-camera fa-5x"></i>
                                      <?php } else { ?>
                                    <img src="<?php echo base_url('')?>assetsfront/images/home/baju/<?php echo $poster['foto'];?>" class="img-circle" style="width: 100px; height: 100px;">

                                <?php } ?>
                            </div>
                            <div class="col-xs-9 text-right">
                                <strong><?php echo $poster['harga'] ?>K</strong>
                           <!---     <p class="text-muted"><?php echo $poster['deskripsi'] ?></p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

        </div>
        </div>
        </div>
        </div>
        </div>
        </section>