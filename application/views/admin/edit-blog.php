
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Blog</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach($blog as $row){?>
            <form role="form" method="post" action="<?php echo base_url()?>backend/blog/update" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" placeholder="Enter judul" name="judul" value="<?php echo $row->judul?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Enter judul" name="id" value="<?php echo $row->id?>">
                </div>
                <div class="form-group">
                    <label>isi blog</label>
                    <textarea class="ckeditor" id="ckeditor" name="isi"><?php echo $row->isi?></textarea>
                </div>
                <div class="form-group">
                  <label>gambar</label> <br>
                  <img src="<?php echo base_url()?>assets/upload/blog/<?php echo $row->gambar?>" width="100"><br><br>
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
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->