<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/minstyle.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/vuelo.css'); ?>">
    <script src="https://kit.fontawesome.com/e552736195.js" crossorigin="anonymous"></script>
    <title>RESERVA</title>
</head>

<body>


    <div class="ms-menu">
        <div class="ms-menu-logo">
            <p>AdvenTours <i class="fas fa-feather-alt"></i></p>

        </div>
        <nav class="ms-menu-link">
            <input type="checkbox" id="ms-menu-toggle">
            <label for="ms-menu-toggle" class="ms-menu-icon"><i class="fa fa-bars"></i></label>
            <ul>
                <a href="<?php echo base_url() ?>index.php/Main/usuarios"><i class="fas fa-sign-out-alt"></i> Regresar</a>
            </ul>
        </nav>
    </div>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <form method="post">
                    <br>
                    <br>
                    <h6> Ingrese el año que desea visualizar</h6>
                    <br>
                    <input type="text" name="año">
                    <br>
                    <br>
                    <?php echo form_submit('btn_enviar', 'Visualizar') ?><br>
                </form>
            </div>
        </div>

    </div>




</body>

</html>