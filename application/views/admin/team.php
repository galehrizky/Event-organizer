<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Team</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url()?>backend/team/simpan" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" placeholder="Enter Nama" name="nama" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  <input type="text" class="form-control" placeholder="Enter Jabatan" name="jabatan" required="">
                </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="text" class="form-control" placeholder="https://facebook.com/namafb" name="facebook" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Twiter</label>
                  <input type="text" class="form-control" placeholder="https://twiter.com/namafb" name="twit" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Instagram</label>
                  <input type="text" class="form-control" placeholder="https://ig.com/namaig" name="ig" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                  <input type="file" name="gambar">
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