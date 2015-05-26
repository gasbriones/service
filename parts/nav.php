<nav>
    <h6 class="visuallyhidden">Hogar Help Top Menu</h6>
    <ul class="hh-menu">
        <li class="<?php echo $active = $_SESSION["active"]== 'inicio' ? 'active' : ''; ?>"><a href="index.php">Inicio</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'servicios' ? 'active' : ''; ?>"><a href="servicios.php">Servicios</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'empresa' ? 'active' : ''; ?>"><a href="quienes-somos.php">Quienes somos</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'cobertura' ? 'active' : ''; ?>"><a href="cobertura.php">Cobertura</a></li>
        <li><a href="#">Solicitar service</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'contacto' ? 'active' : ''; ?>"><a href="contacto.php">Contacto</a></li>
    </ul>
</nav>