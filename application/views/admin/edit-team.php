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
            <?php foreach($team as $row){?>
            <form role="form" method="post" action="<?php echo base_url()?>backend/team/update" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" placeholder="Enter Nama" name="nama" value="<?php echo $row->nama?>" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  <input type="text" class="form-control" placeholder="Enter Jabatan" name="jabatan" value="<?php echo $row->jabatan?>" required="">
                </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="text" class="form-control" placeholder="https://facebook.com/namafb" value="<?php echo $row->facebook?>" name="facebook" required="">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" placeholder="https://facebook.com/namafb" value="<?php echo $row->id?>" name="id" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Twiter</label>
                  <input type="text" class="form-control" placeholder="https://twiter.com/namafb" value="<?php echo $row->twit?>" name="twit" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Instagram</label>
                  <input type="text" class="form-control" placeholder="https://ig.com/namaig" value="<?php echo $row->instagram?>" name="ig" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto</label><br>
                  <img src="<?php echo base_url()?>assets/upload/team/<?php echo $row->foto?>" width="200"><br><br>
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