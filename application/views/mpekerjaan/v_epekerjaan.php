<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Jenis Pekerjaan
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('Jenispekerjaan'); ?>">Data Jenis Pekerjaan</a></li>
        <li class="active">Lihat Data</li>
      </ol>
    </section>
    <div class="box-body">
    <?php if ($this->session->flashdata('SUCCESS')) { ?>
       <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fa fa-check"></i> Success!</h5>
          Data berhasil di perbarui.
        </div>                 
      <?php } ?>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class='col-lg-12'>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Data</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <form action='<?= site_url("C_MPekerjaan/update")?>' method='POST'>
                <div class='row'>
                  <?php foreach ($pek as $pek) { ?>
                  <div class="col-lg-12">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis Pekerjaan</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="namapekerjaan" value="<?php echo $pek->namapekerjaan ?>">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $pek->id_jenispekerjaan ?>">
                      </div>
                  </div>
                <?php } ?>
                </div><br>
                <div class='row'>
                  <div class='col-lg-12'>
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-3">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Jenis Pekerjaan</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Pekerjaan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($tipe as $tipe) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $tipe->namapekerjaan; ?></td>
                  <td>
                    <div class="btn-group">
                      <a href="<?php echo site_url('Jenispekerjaan-edit/'.$tipe->id_jenispekerjaan); ?>"><button type="button" class="btn btn-info"><i class="fa fa-fw fa-pencil-square-o"></i></button></a>
                      <a href="<?php echo site_url('C_MPekerjaan/hapus/'.$tipe->id_jenispekerjaan); ?>"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i></button></a>
                    </div>
                  </td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>