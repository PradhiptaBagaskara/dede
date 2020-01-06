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
        <li class="active"><a href="#">Ukm</a></li>
      </ol><br>
              <a href="<?=base_url()?>admin/Ukm/create" class="btn btn-primary" >Create New</a>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
       
          <!-- /.box -->


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

            <table  id="datatable" class="table">
               <thead >
                 <tr>
                   <th>No</th>
                   <th>Nama</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>
               
                <?php if (isset($Ukms)) { $no = 1; foreach ($Ukms as $Ukm) {?>
                    <?php if ($Ukm->nama_kategori != "administrator"): ?>

                <tr>
                  <td><?=$no++?></td>
                  <td><?=$Ukm->nama_kategori?></td>
                  <td>
                    <a href="<?=base_url('admin/Ukm/edit/').$Ukm->id_kategori?>" class="btn btn-success">Edit</a>
                    <a href="<?=base_url('admin/Ukm/delete/').$Ukm->id_kategori?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                  <?php endif ?>
                
                <?php } }?>
               </tbody>
             </table>             
            </div>
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
 