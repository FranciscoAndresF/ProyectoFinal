<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/minstyle.css'); ?>">
	<script src="https://kit.fontawesome.com/e552736195.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div class="ms-menu">
		<div class="ms-menu-logo">
			<p>AdvenTours <i class="fas fa-feather-alt"></i></p>

		</div>
		<nav class="ms-menu-link">
			<input type="checkbox" id="ms-menu-toggle">
			<label for="ms-menu-toggle" class="ms-menu-icon"><i class="fa fa-bars"></i></label>
			<ul>
                <a href='<?php echo site_url('main/usuarios')?>'>Usuarios</a> | 
                <a href='<?php echo site_url('main/hotels')?>'>Hoteles</a> | 
                <a href='<?php echo site_url('main/guias')?>'>Guías</a> | 
                <a href='<?php echo site_url('main/autos')?>'>Autos</a> | 
                <a href='<?php echo site_url('main/aerolineas')?>'>Aerolíneas</a> |
                <a href="<?php echo base_url()?>index.php/chartsController/">Gráficos</a>|
                <a href="<?php echo base_url()?>index.php/usuariosController/logout">Log Out</a> 
			</ul>
		</nav>
	</div>
<!-- End of header-->
    <div style='height:30px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
<!-- Beginning footer -->
<div></div>
<!-- End of Footer -->
</body>
</html>
 