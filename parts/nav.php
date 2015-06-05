<nav>
    <h6 class="visuallyhidden">Hogar Help Top Menu</h6>
    <div id="header_logo" class="clearfix sticky">
        <h6 class="visuallyhidden">Hogar Help Logo</h6>
        <a class="logo-anchor" href="index.php" title="Hogar Help -  Servicios para el hogar">
            <img src="images/hogar-help-logo.jpg" alt="Hogar Help Logo" class="left">
            <h1 class="logo-text left">hogarhelp</h1>
            <span class="slogan">Haciendo de tu Hogar, tu lugar en el mundo.</span>
        </a>
    </div>
    <ul class="hh-menu">
        <li class="<?php echo $active = $_SESSION["active"]== 'inicio' ? 'active' : ''; ?>"><a href="index.php">Inicio</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'servicios' ? 'active' : ''; ?>"><a href="servicios.php">Servicios</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'empresa' ? 'active' : ''; ?>"><a href="quienes-somos.php">Quienes somos</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'cobertura' ? 'active' : ''; ?>"><a href="cobertura.php">Cobertura</a></li>
        <li><a href="#">Solicitar service</a></li>
        <li class="<?php echo $active = $_SESSION["active"]== 'contacto' ? 'active' : ''; ?>"><a href="contacto.php">Contacto</a></li>
    </ul>
</nav>