<?php $js_files = get_js_assets($asset_module);
foreach ($js_files as $file):?>
    <script src="<?php echo base_url($file) ?>"></script>
<?php endforeach;?>