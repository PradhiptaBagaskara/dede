<?php $this->load->view('inc/header.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Post Area
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
       
          <!-- /.box -->
          <?php //echo $alert; ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Informasi ke Mading
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
        
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="" method="post" enctype="multipart/form-data">
                <label for="row"> Chose Image For Mading </label>
                <div id="row" class="row">
                  <div class="col-xs-12 col-md-6 col-sm-8"> 
                      <div class="input-group image-preview">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                  <span class="glyphicon glyphicon-remove"></span> Clear
                              </button>
                              <div class="btn btn-default image-preview-input">
                                  <span class="glyphicon glyphicon-folder-open"></span>
                                  <span class="image-preview-input-title">Browse</span>
                                  <input type="file" accept="image/png, image/jpeg, image/gif" name="file"/>
                              </div>
                          </span>
                     
                      </div>
                      <div id="img-edit" class="image-preview" style="margin-top: 10px">
                          <img src="<?=base_url().'uploads/'.$data['img']?>" id="img" width="250" height="200" alt="">
                          <!-- <img src="" id="img-edit" width="250" height="200" alt=""> -->

                        
                      </div>
                  </div>
              </div><br>
              <div class="row">
                <div class="col-xs-12 col-md-6 col-sm-8"> 
                  <div class="form-group">
                    <label for="judul">Judul Mading</label>
                    <input class="form-control" id="judul" type="text" name="judul" placeholder="Tuliskan Judul" value="<?=$data['judul']?>" />
                    
                  </div>
                  
                </div>
              </div> 
              <label for="editor">Isi Mading</label>
                <textarea id="editor" class="textarea" name="isi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$data['isi']?></textarea>
                <input type="submit" class="btn btn-success" value="Post Ke Mading" style="margin-top: 10px; float: right;" />
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('inc/footer.php'); ?>
 