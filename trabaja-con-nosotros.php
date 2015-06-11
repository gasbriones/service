<!DOCTYPE html>
<head>
    <?php
    include 'parts/head.php';
    $_SESSION['active'] = "trabaja";
    ?>

</head>
<body class="contacto" data-page="service">
<div class="page">
    <section class="header-container clearfix">
        <header id="header">
            <h6 class="visuallyhidden">hogarhelp.com</h6>
            <?php include 'parts/header.php' ?>
        </header>
    </section>
    <section class="body-container clearfix content" >
        <div class="wrapper">
            <div class="row">
                <h2>Trabaja con nostros y se parte de nuestro equipo</h2>
                <p>Comunicate a los siguientes teléfonos o llena el formulario</p>
                <div class="grid_3">

                    <div class="hline2 v3">
                        <h3>Teléfono:</h3>
                        <p> (11) 15 3667 0771 </p>
                    </div>
                    <div class="hline2 v3 no_line">
                        <h3>E-mail: </h3>
                        <p><a href="mailto:consulta@hogarhelp.com">consulta@hogarhelp.com</a></p>
                    </div>
                </div>
                </div>

                <div class="grid_8 preffix_1">
                    <h2>Formulario</h2>
                    <form id="contact-form">
                        <label class="name">
                            <input type="text" required="required" placeholder="Nombre" />
                        </label>
                        <label class="email">
                            <input type="text" required="required" placeholder="E-mail" />
                        </label>
                        <label class="phone last">
                            <input type="text" required="required" placeholder="Teléfono" />
                        </label>
                        <label class="especialidad last">
                            <input type="text" required="required" placeholder="Especialidad Laboral" />
                        </label>

                        <label class="message">
                            <textarea placeholder="Mensaje"></textarea>
                        </label>
                        <div class="form_btns">
                            <a class="more_btn" data-type="submit" href="#">Enviar</a>
                        </div>
                    </form>


                </div>

            </div>

        </div>
    </section>
    <footer id="footer">
        <?php include 'parts/footer.php' ?>
    </footer>
</div>
</body>
</html>
