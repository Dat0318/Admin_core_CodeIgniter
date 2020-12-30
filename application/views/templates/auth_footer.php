<!-- jQuery -->
<script src="<?php echo base_url() ?>public/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php

$array_plugins = explode(",", $plugins_js);
if ($array_plugins[0] !== "") {
	foreach ($array_plugins as $item_plugins) {
		echo '<script src="' . base_url() . 'public/admin/plugins/' . $item_plugins . '"></script>
';
	}
}
?>

<!-- AdminLTE -->
<script src="<?php echo base_url() ?>public/admin/js/adminlte.js"></script>

<?php
$array = explode(",", $js);
if ($array[0] !== "") {
	foreach ($array as $item) {
		echo '<script src="' . base_url() . 'public/admin/js/' . $item . '"></script>
';
	}
}

if (strlen($script) > 0) {
	echo $script;
}
?>
</body>

</html>

