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
                   <th>Gambar</th>
                   <th>Judul</th>
                   <th>Terakhir Update</th>
                   <th>Action</th>



                 </tr>
               </thead>
               <tbody>
                 <?php foreach ($data as $res ):?>
                 <tr >

                  <td><?=$no++?> </td>
                  <td id="date"> <img src="<?php echo base_url().'uploads/'.$res->img; ?>" width="70" height="50" >  </td>
                  <td><?php echo $res->judul; ?> </td>
                  <td><?=date('g:i - d M Y', strtotime($res->date))?></td>

                  <td> 
                    <a class="btn btn-primary" href="edit/<?=$res->id?>" title="">Edit</a> 
                    <a class="btn btn-danger" data-toggle="modal" data-target="#modalku" data-href="hapus/<?=$res->id.'/'.$res->img?>">hapus</a>
                  </td>
                 </tr>
               


                     
                 <?php endforeach; ?>
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
 