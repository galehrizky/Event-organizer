  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Foto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>backend/photo/simpan">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">project</label>
                  <input type="text" name="projek" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Tambah Foto</label>
                  <input type="file" name="gambar">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" required=""> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
    </section>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->