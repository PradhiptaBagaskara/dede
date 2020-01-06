<?php $this->load->view('inc/header.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ukm
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li ><a href="#">Ukm</a></li>
        <li class="active"><a href="#">Tambah Admin UKM</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
       
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Admin Ukm</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Admin Username</label>
                      <?php 
                        $id_user = $ukm->id_user;
                        $id_kategori = $ukm->id_kategori;
                       ?>
                  <div class="col-sm-10">
                    <select name="username" class="form-control">
                      <?php foreach ($user as $key => $val): ?>
                      <?php if ($val->id_user == $id_user): ?>
                      <option value="<?= $val->id_user ?>" selected><?= $val->username ?></option>
                      <?php else: ?>
                      <option value="<?= $val->id_user ?>"><?= $val->username ?></option>

                          
                        <?php endif ?>
                      <?php endforeach ?>
                    </select>
                    <!-- <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Ukm"> -->
                  </div>
                </div>
              </div>
               <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama UKM</label>

                  <div class="col-sm-10">
                    <select name="ukm" class="form-control">
                      
                      <?php foreach ($kategori as $key => $val): ?>

                      <?php if ($val->id_kategori == $id_kategori): ?>
                      <option value="<?= $val->id_kategori ?>" selected><?= $val->nama_kategori ?></option>
                      <?php else: ?>
                      <option value="<?= $val->id_kategori ?>"><?= $val->nama_kategori ?></option>

                          
                        <?php endif ?>
                        
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="submit" name="simpan" class="btn btn-success" value="Simpan">
              </div>
              <!-- /.box-footer -->
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
 