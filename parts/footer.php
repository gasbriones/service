<nav>
    <h6 class="visuallyhidden">Hogar Help fotter Menu</h6>
    <ul class="hh-menu">
        <li class="<?php echo $active = $_SESSION["active"]== 'inicio' ? 'active' : ''; ?>"><a href="index.php">Inicio</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'servicios' ? 'active' : ''; ?>"><a href="servicios.php">Servicios</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'empresa' ? 'active' : ''; ?>"><a href="quienes-somos.php">Quienes somos</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'cobertura' ? 'active' : ''; ?>"><a href="cobertura.php">Cobertura</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'service' ? 'active' : ''; ?>"><a href="solicitar-service.php">Solicitar service</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'contacto' ? 'active' : ''; ?>"><a href="contacto.php">Contacto</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'trabaja' ? 'active' : ''; ?>"><a href="trabaja-con-nosotros.php">Trabaja con nosotros</a></li>
    </ul>
    <div class="copyright">
        Copyright 2015 HogarHelp.com -  E-mail: <a href="solicitar-service.php#contact-form"> consulta@hogarhelp.com</a>
    </div>

    <ul id="footer-social">
        <li>
            <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
            <a class="tw" href="https://twitter.com/hogarhelp"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
            <a class="wh" title="Cel (11) 3667-0771" href="whatsapp://send?text=Hogar Help - Servicio técnico para todos tus electrodomésticos - Cel: 113667 0771 - http://hogarhelp.com"><i class="fa fa-whatsapp"></i></a>
        </li>
    </ul>
</nav>
