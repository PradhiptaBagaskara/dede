<?php $this->load->view('inc/header.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cerita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Cerita</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
       
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Cerita</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="row">
                  <label for="nama" class="col-sm-2 control-label">Judul</label>
                  <div class="col-sm-10">
                    <?=isset($cerita) ? $cerita->judul : '' ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <label for="nama" class="col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <?=isset($cerita) ? $cerita->diskripsi : '' ?>
                  </div>
                </div>
                <div class="row">
                  <label for="nama" class="col-sm-2 control-label">Isi</label>
                  <div class="col-sm-10">
                    <?=isset($cerita) ? $cerita->isi : '' ?>
                  </div>
                </div>

                <div class="row">
                  <label for="nama" class="col-sm-2 control-label">Aksi</label>
                  <div class="col-sm-10">
                    <?php if (empty($cerita->img)): ?>
                    <a href="<?=base_url('admin/home/delete/'.$cerita->id_cerita.'/')?>null" class="btn btn-danger btn-sm" title="">delete</a>

                    <?php else: ?>
                    <a href="<?=base_url('admin/home/delete/'.$cerita->id_cerita.'/'.$cerita->img)?>" class="btn btn-danger btn-sm" title="">delete</a>

                    <?php endif ?>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col-->
      </div>
     
      <!-- ./row -->
    </section>
       <div id="modalku" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalku" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Peringatan!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>data yang sudah di hapus tidak dapat dikembalikan.</p>
                          <p>Apakah anda yakin ingin melanjutkan menghapus data?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <a  class="btn btn-primary btn-ok">Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('inc/footer2.php'); ?>
 