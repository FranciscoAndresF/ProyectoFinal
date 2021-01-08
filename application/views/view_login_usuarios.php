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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/dark-mode-switcher@0.0.1/dist/dark.min.js"></script>
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
                <a href="<?php echo base_url() ?>index.php/usuariosController/logout"><i class="fas fa-sign-out-alt"></i> Regresar</a>
            </ul>
        </nav>
    </div>

    <div class="socialLinks" style="background-color: black;">
        <div class="container">

            <div class="row">
                <div class="col-sm-9">
                    <span>Contáctanos: 0985631457</span>
                    <i class="fab fa-whatsapp"></i>
                    <i class="fas fa-phone-volume"></i>
                </div>
                <div class="col-sm-3">
                    <span>Síguenos:</span>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>



    <div id="contenido" style="background-image: url('https://apullacta.com/es/wp-content/uploads/2019/12/quilotoaBanner002Interna.jpg'); background-repeat: no-repeat;background-attachment: fixed;  background-size: 100%; background-position-y: 75px;">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5" style="background-image: url('https://lh3.googleusercontent.com/proxy/EcEGLu8fAvc1HUul3XAIcsvi0U3fnQUJ_pU18z_YP0PzuPXlula-TnhF6tX6DhsC35zSGRSof63cBVP7J8FiLU05pPVCZ2hNpt1v45Xu');">
                    <div class="ms-form-group">
                        <?php

                        $input_usuEmail = array(
                            'type' => 'text',
                            'name' => 'usuEmail',
                            'id' => 'usuEmail',
                            'maxlenght' => '120',
                            'size' => '100',
                            'value' => set_value('usuEmail', @$datos_usuarios[0]->usuEmail)
                        );
                        $input_usuPassword = array(
                            'type' => 'password',
                            'name' => 'usuPassword',
                            'id' => 'usuPassword',
                            'maxlenght' => '120',
                            'size' => '100',
                            'value' => set_value('usuPassword', @$datos_usuarios[0]->usuPassword)
                        );


                        ?>
                        <?php echo form_open(); ?>
                        <br>
                        <br>
                        <h5><?php echo form_label('Email'); ?><br></h5>
                        <?php echo form_input($input_usuEmail) ?><br>
                        <?php echo form_error('usuEmail'); ?><br>

                        <h5><?php echo form_label('Password'); ?><br></h5>
                        <?php echo form_input($input_usuPassword) ?><br>
                        <?php echo form_error('usuPassword'); ?><br>

                        <?php echo form_submit('btn_enviar', 'Ingresar') ?><br>
                        <?php echo form_close(); ?><br>



                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="footer" style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <ul>
                        <li style="list-style-type: none;">Somos AdvenTours
                            <ul style="list-style-type: none;">
                                <li style="list-style-type: none;">Nuestro teléfono</li>
                                <li style="list-style-type: none;">Trabaja con nosotros</li>
                                <li style="list-style-type: none;">Relación con inversores</li>
                                <li style="list-style-type: none;">Sobre AdvenTours</li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul>

                        <li style="list-style-type: none;">Confianza en tus compras
                            <ul style="list-style-type: none;">
                                <li style="list-style-type: none;">Términos y condiciones</li>
                                <li style="list-style-type: none;">Política de privacidad</li>
                                <li style="list-style-type: none;">Promociones vigentes</li>
                                <li style="list-style-type: none;">Conoce las formas de pago</li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul>

                        <li style="list-style-type: none;">Potencia tu negocio
                            <ul style="list-style-type: none;">
                                <li style="list-style-type: none; ">Agrega tu flota</li>
                                <li style="list-style-type: none;">Programa de Agencia Afiliadas</li>
                                <li style="list-style-type: none;">Programa Red de Afiliados</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <br>
                    <span>Contáctanos: 0985631457</span>
                    <i class="fab fa-whatsapp"></i>
                    <i class="fas fa-phone-volume"></i>
                </div>
                <div class="col-sm-1">
                    <br>
                    <span>Síguenos:</span>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>
</body>

</html>