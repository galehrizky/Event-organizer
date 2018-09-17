<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Foto
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <?php foreach($poto as $row){?>
        <div class="col-md-4">
        <div class="well">
          <img class="thumbnail img-responsive" alt="gambar" src="<?php echo base_url()?>/assets/upload/photos/<?php echo $row->poto?> " width="200">
            <h4><?php echo $row->project?></h4>
            <a href="<?php echo base_url()?>backend/photo/hapus/<?php echo $row->id?>"><button type="submit" class="btn btn-danger">Hapus</button></a>
        </div>
        </div>
      <?php }?>
      </div>
    </section>
  <div class="control-sidebar-bg"></div>
</div>