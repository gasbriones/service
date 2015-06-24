<!DOCTYPE html>
<head>
    <?php
    include 'parts/head.php';
    $_SESSION['active'] = "service";
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
                <h2>Solicitar service</h2>
                <p>Complete los campos necesarios para enviarnos el formulario de solicitud de service. Nos pondremos en contacto a la brevedad. </p>
                <div class="grid_3">

                    <div class="hline2 v3">
                        <h3>Teléfonos:</h3>
                        <p><i class="fa fa-phone-square" style="margin-right: .5em"></i>4838 1386</p>
                        <p><i class="fa fa-mobile" style="margin-right: .25em; font-size: 20px"></i>15 3667 0771 </p>
                        <p><i class="fa fa-whatsapp" style="margin-right: .25em; font-size: 20px"></i>15 5386 0746 </p>

                    </div>
                    <div class="hline2 v3 no_line">
                        <h3>E-mail: </h3>
                        <p><a href="mailto:consulta@hogarhelp.com">consulta@hogarhelp.com</a></p>
                    </div>
                </div>
                </div>

                <div class="grid_8 preffix_1">
                    <h2>Formulario</h2>
                    <form id="contact-form" class="solicitar-service">
                        <label class="artefacto">
                            <select name="artefacto" size="1">
                                <option value="Seleccione el tipo de Artefacto">Seleccione el tipo de Artefacto</option>
                                <option value="Aire Acondicionado">Aire Acondicionado</option>
                                <option value="Calefacción Central">Calefacción Central</option>
                                <option value="Calefactor">Calefactor</option>
                                <option value="Calefón">Calefón</option>
                                <option value="Cocina">Cocina</option>
                                <option value="Heladera">Heladera</option>
                                <option value="Lavarropas">Lavarropas</option>
                                <option value="Lavavajillas">Lavavajillas</option>
                                <option value="Secarropas">Secarropas</option>
                                <option value="Termotanque">Termotanque</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </label>
                        <label class="marca">
                            <select name="marca" size="1">
                                <option value="marca">Seleccione la marca</option>
                                <option value="Ariston">Ariston</option>
                                <option value="Arthur Martin">Arthur Martin</option>
                                <option value="Aurora">Aurora</option>
                                <option value="BGH">BGH</option>
                                <option value="Bosch">Bosch</option>
                                <option value="Brastemp">Brastemp</option>
                                <option value="Candy">Candy</option>
                                <option value="Carrier">Carrier</option>
                                <option value="Columbia">Columbia</option>
                                <option value="Conqueror">Conqueror</option>
                                <option value="Coventry">Coventry</option>
                                <option value="Domec">Domec</option>
                                <option value="Drean">Drean</option>
                                <option value="Emege">Emege</option>
                                <option value="Eskabe">Eskabe</option>
                                <option value="Electra">Electra</option>
                                <option value="Electrolux">Electrolux</option>
                                <option value="Eslabon de Lujo">Eslabon de Lujo</option>
                                <option value="Fedders">Fedders</option>
                                <option value="Flamex">Flamex</option>
                                <option value="Frigidaire">Frigidaire</option>
                                <option value="General Electric">General Electric</option>
                                <option value="Goldstar">Goldstar</option>
                                <option value="Heineken">Heineken</option>
                                <option value="Hitachi">Hitachi</option>
                                <option value="Indesit">Indesit</option>
                                <option value="Kelvinator">Kelvinator</option>
                                <option value="Koh-i-Noor">Koh-i-Noor</option>
                                <option value="LG Electronics">LG Electronics</option>
                                <option value="Longvie">Longvie</option>
                                <option value="Marshall">Marshall</option>
                                <option value="Orbis">Orbis</option>
                                <option value="Oro Azul">Oro Azul</option>
                                <option value="Patrick">Patrick</option>
                                <option value="Philips">Philips</option>
                                <option value="Philco">Philco</option>
                                <option value="Panasonic">Panasonic</option>
                                <option value="Peabody">Peabody</option>
                                <option value="Rheem">Rheem</option>
                                <option value="Samsung">Samsung</option>
                                <option value="Sanyo">Sanyo</option>
                                <option value="Saccol">Saccol</option>
                                <option value="Saiar">Sair</option>
                                <option value="Siam">Siam</option>
                                <option value="Siemens">Siemens</option>
                                <option value="Surrey">Surrey</option>
                                <option value="Tivoly">Tivoly</option>
                                <option value="Toshiba">Toshiba</option>
                                <option value="Universal">Universal</option>
                                <option value="Volcan">Volcan</option>
                                <option value="Whirlpool">Wirlpool</option>
                                <option value="Westinghouse">Westinghouse</option>
                                <option value="York">York</option>
                                <option value="Zenith">Zenith</option>
                                <option value="Otra">Otra</option>
                            </select>
                        </label>
                        <label class="desperfecto">
                            <textarea placeholder="Desperfecto"></textarea>
                        </label>
                        <label class="direccion">
                            <input type="text" required="required" placeholder="Dirección" />
                        </label>
                        <label class="localidad">
                            <input type="text" required="required" placeholder="Localidad" />
                        </label>
                        <label class="phone last">
                            <input type="text" required="required" placeholder="Teléfono principal" />
                        </label>
                        <label class="phone last">
                            <input type="text" required="required" placeholder="Teléfono alternativo" />
                        </label>
                        <label class="name">
                            <input type="text" required="required" placeholder="Nombre y Apellido" />
                        </label>
                        <label class="phone last">
                            <select name="horario" size="1">
                                <option value="marca">Seleccione un horario de contacto</option>
                            <?php
                                $hour = 7;
                                while($hour++ < 24):
                            ?>
                                <option value="<?php echo $hour.':00' ?>"><?php echo $hour.':00' ?></option>

                            <?php endwhile?>
                            </select>
                        </label>
                        <label class="email">
                            <input type="text" required="required" placeholder="E-mail" />
                        </label>

                        <label class="message">
                            <textarea placeholder="Comentario adicional"></textarea>
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
