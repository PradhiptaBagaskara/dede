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
                   <th>User</th>
                   <th>judul</th>
                   <th>Ukm</th>
                   <th>Terakhir Update</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>

                  <?php foreach ($cerita as $value): ?>
                    
                 <tr >
                  <td><?=$value['username']?></td>
                  <td> <?=$value['judul']?>  </td>
                  <td><?=$value['nama_kategori']?></td>
                  <td><?=$value['date']?></td>

                  <td> 
                    <a class="btn btn-primary" href="<?=base_url('admin/home/view/').$value['id_cerita']?>">Detail</a> 
                    <a class="btn btn-<?=$value['status'] == 'enable' ? 'success' : 'danger' ?>" href="<?=base_url('admin/home/toggle/').$value['id_cerita']?>"><?=$value['status'] == 'enable' ? 'Enabled' : 'Disabled' ?></a> 
                    <!-- <a class="btn btn-danger" data-toggle="modal" data-target="#modalku" data-href="hapus/">hapus</a> -->
                  </td>
                 </tr>
                  <?php endforeach ?>
               

                     
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
  <!-- /.content-wrapper -->
 <footer class="main-footer">
    
    <strong>Copyright &copy; Mading Online</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
  
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>assets/dist/js/demo.js"></script>
<!-- CK Editor -->
<!-- Bootstrap WYSIHTML5 -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#datatable').DataTable({
      "order": [[ 3, "desc" ]]


      // ]
    });

    $('#date img').mouseover(function(){
      console.log('1');
    });

    // $('modal').o

} );


</script>
</body>
</html>
