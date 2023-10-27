<?php 
$css_files = get_css_assets($asset_module);
foreach ($css_files as $file):?>
    <link rel="stylesheet" href="<?php echo base_url($file); ?>">
<?php endforeach;?>