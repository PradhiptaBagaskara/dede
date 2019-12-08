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
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form action="" method="post" class="form">
            	
            
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                  	<input type="text" id="nama" name="nama" class="form-control" value="<?=$users->nama_user ?>">

                    
                  </div>
                </div>

              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                  	<input type="text" id="username" name="username" class="form-control" value="<?=$users->username ?>">
                  </div>
                </div>
                
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                  	<input type="email" id="email" name="email" class="form-control" value="<?=$users->email ?>">
                  </div>
                </div>
              </div>

               <div class="box-body">
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">password</label>
                  <div class="col-sm-10">
                  	<input type="password" id="password" name="password" class="form-control" >
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <!-- <label for="nama" class="col-sm-2 control-label">Username</label> -->
                  <div class="col-sm-10">
                  	<input type="submit" name="edit" class="btn btn-primary" value="SAVE">
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
 