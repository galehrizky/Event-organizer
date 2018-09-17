
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Client </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Instansi</th>
                  <th>URLS</th>
                  <th>Client</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($client as $row){?>
                <tr>
                  <td><?php echo $row->instansi?></td>
                  <td><?php echo $row->url?></td>
                  <td><img src="<?php echo base_url()?>assets/upload/client/<?php echo $row->poto?>" width="100"></td>
                  <td><a href="<?php echo base_url()?>backend/client/hapus/<?php echo $row->id?>"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a><a href="<?php echo base_url()?>backend/client/edit/<?php echo $row->id?>"><button class="btn btn-primary"><span class="fa fa-edit  "></span></button></a></td>
                </tr>
              <?php }?>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->