CKEDITOR.editorConfig = function( config )
{
config.filebrowserBrowseUrl = '<?php echo base_url()?>assets/admin/kcfinder/browse.php?type=files';
config.filebrowserImageBrowseUrl = '<?php echo base_url()?>assets/admin/kcfinder/browse.php?type=images';
config.filebrowserFlashBrowseUrl = '<?php echo base_url()?>assets/admin/kcfinder/browse.php?type=flash';
config.filebrowserUploadUrl = '<?php echo base_url()?>assets/admin/kcfinder/upload.php?type=files';
config.filebrowserImageUploadUrl = '<?php echo base_url()?>assets/admin/kcfinder/upload.php?type=images';
config.filebrowserFlashUploadUrl = '<?php echo base_url()?>assets/admin/kcfinder/upload.php?type=flash';
// Define changes to default configuration here. For example:
// config.language = ‘fr’;
// config.uiColor = ‘#AADC6E’;
};