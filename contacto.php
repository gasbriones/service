<!DOCTYPE html>
<head>
    <?php
    include 'parts/head.php';
    $_SESSION['active'] = "contacto";
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
                <div class="grid_3">
                    <h2>Nuestras direcciones</h2>
                    <div class="hline2 v3">
                        <h3>Dirección 1:</h3>
                        <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45. </p>
                    </div>

                    <div class="hline2 v3">
                        <h3>Teléfono:</h3>
                        <p>+1 800 559 6580<br>+1 800 603 6035</p>
                    </div>

                    <div class="hline2 v3">
                        <h3>Dirección 2:</h3>
                        <p>9863 - 9867 Mill Road, Cambridge, <br>MG09 99HT.</p>
                    </div>

                    <div class="hline2 v3 no_line">
                        <h3>Teléfono: </h3>
                        <p>+1 800 559 6580<br>+1 800 603 6035</p>
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
