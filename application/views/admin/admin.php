  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>backend/admin/simpan">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Username</label>
                  <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">password</label>
                  <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Telephon</label>
                  <input type="number" name="tlp" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Email</label>
                  <input type="email" name="email" class="form-control">
                </div>
                 <div class="form-group">
                  <label for="exampleInputFile">Status</label>
                  <select class="form-control" name="status">
                     <option value="1">Aktif</option>
                     <option value="0">Tidak Aktif</option>
                  </select>
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