  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Contact</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach($contact as $row){?>
            <form role="form" method="post" action="<?php echo base_url()?>backend/contact/simpan">
              <div class="box-body">
                <div class="form-group">
                  <label >Alamat</label>
                  <input type="text" class="form-control" placeholder="Enter alamat" name="alamat" value="<?php echo $row->alamat?>">
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input type="number" class="form-control" placeholder="Enter Telepon " name="tlpn" value="<?php echo $row->telepon?>">
                </div> 
                 <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Enter email " name="email" value="<?php echo $row->email?>">
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