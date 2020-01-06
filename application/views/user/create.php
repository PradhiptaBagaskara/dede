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

            <form action="" method="post" class="form">
              
            
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="nama" required>

                    
                  </div>
                </div>

              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                  </div>
                </div>
                
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" require>
                  </div>
                </div>
              </div>

               <div class="box-body">
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">password</label>
                  <div class="col-sm-10">
                    <input type="password" id="password" name="password" class="form-control" required>
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
  <!-- /.content-wrapper -->
<?php $this->load->view('inc/footer2.php'); ?>
 