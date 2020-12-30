<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Bootstrap Check -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/admin/css/adminlte.min.css">
  <?php

	$array_plugins = explode(",", $plugins_css);
	if ($array_plugins[0] !== "") {
		foreach ($array_plugins as $item_plugins) {
			echo '<link rel="stylesheet" href="' . base_url() . 'public/admin/plugins/' . $item_plugins . '">';
		}
	}

	$array = explode(",", $css);
	if ($array[0] !== "") {
		foreach ($array as $item) {
			echo '<link rel="stylesheet" href="' . base_url() . 'public/admin/css/' . $item . '">';
		}
	}
	?>
</head>

<body class="hold-transition login-page">

