
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Client</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach($client as $row){?>
            <form role="form" method="post" action="<?php echo base_url()?>backend/client/update" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Instansi</label>
                  <input type="text" class="form-control" placeholder="Enter Instansi" name="instansi" value="<?php echo $row->instansi;?>">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" placeholder="Enter Instansi" name="id" value="<?php echo $row->id;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Url</label>
                  <input type="text" class="form-control" placeholder="Enter Url" name="url" value="<?php echo $row->url;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto Client</label><br>
                  <img src="<?php echo base_url()?>assets/upload/client/<?php echo $row->poto;?>" width="200"><br><br>
                  <input type="file" name="gambar">
                </div>  
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          <?php }?>
          </div>
          <!-- /.box -->
    </section>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->