<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2020 <a href="#">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.1.0-rc
  </div>
</footer>
</div>

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

