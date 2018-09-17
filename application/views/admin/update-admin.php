  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach($admin as $row){?>
            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>backend/admin/update_profile">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Username</label>
                  <input type="text" name="username" class="form-control" value="<?php echo $row->username?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Password Lama</label>
                  <input type="password" name="passwordlm" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                  <input type="hidden" name="id" class="form-control" value="<?php echo $row->id?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Telephon</label>
                  <input type="number" name="tlp" class="form-control" value="<?php echo $row->no_telp?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Email</label>
                  <input type="email" name="email" class="form-control" value="<?php echo $row->email?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputFile">Status</label>
                  <select class="form-control" name="status">
                     <option <?php if($row->status == 1){ echo "selected";}?> value="1">Aktif</option>
                     <option <?php if($row->status == 0){ echo "selected";}?> value="0">Tidak Aktif</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Tambah Foto</label><br>
                  <img src="<?php echo base_url()?>assets/upload/admin/<?php echo $row->foto?>" width="200"><br><br>
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
          <?php }?>
          </div>
          <!-- /.box -->
    </section>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->