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
        <li class="active">Masukan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
       
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Masukan User
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
                   <th>User</th>
                   <th>Masukan</th>
                   <!-- <th>Detail</th> -->

                   
                 </tr>
               </thead>
               <tbody>
                <?php foreach ($data as $value): ?>
                  
                 <tr >
                  <td><?=$no++?></td>
                  <td><?=$value['username']?></td>
                  <!-- <td><?=$value['isi']?></td> -->

                  <td> 
                    <a class="btn btn-primary" id="detail<?=$value['id_masukan']?>" data-toggle="modal" data-target="#myModal<?=$value['id_masukan']?>" data-href="">Lihat Masukan</a>
                  </td>
                 </tr>
                 <div id="myModal<?=$value['id_masukan']?>" class="modal bd-example-modal-lg animated bounceInDown" role="dialog" aria-labelledby="modalTitle">
                   <div class="modal-dialog modal-dialog-centered modal-lg">
                  <!-- konten modal-->
                  <div class="modal-content">
                    <!-- heading modal -->
                    <div class="modal-header card-header bg-primary">

                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                      <?= $value['isi'] ?>

                    </div>
                    <!-- footer modal -->
                    
                  </div>
                   </div>
                </div>
               
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
       
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('inc/footer2.php'); ?>
 