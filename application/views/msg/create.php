<?php $this->load->view('inc/header.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">User</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
       
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form action="<?=base_url()?>admin/msg/create" method="post" class="form" enctype="multipart/form-data">
              
            
             
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">judul</label>
                  <div class="col-sm-10">
                    <input type="text" id="username" name="judul" class="form-control" placeholder="Judul" required>
                  </div>
                </div>
                
              </div>
               <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Gambar</label>
                  <div class="col-sm-10">
                    <input type="file" id="nama" name="img" class="form-control" required>

                    
                  </div>
                </div>

              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Diskripsi Singkat</label>
                  <div class="col-sm-10">
                    <textarea name="diskripsi" class="form-control" rows="5" placeholder="Diskripsi"></textarea>
                  </div>
                </div>
              </div>

               <div class="box-body">
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Isi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="10" id="textarea" name="isi" placeholder="Isi"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <!-- <label for="nama" class="col-sm-2 control-label">Username</label> -->
                  <div class="col-sm-10">
                    <input type="submit" name="simpan" class="btn btn-primary" value="SIMPAN">
                  </div>
                </div>
              </div>
            </form>
            
          </div>
        </div>
        <!-- /.col-->
      </div>
     
      <!-- ./row -->
    </section>
  
    <!-- /.content -->
  </div>
     <script src="<?=base_url()?>/assets/tinymce/tinymce.min.js" ></script>
      <script>tinymce.init({ selector:'textarea', theme: 'modern'});</script>
  <!-- /.content-wrapper -->
<?php $this->load->view('inc/footer2.php'); ?>
 