<?php require_once 'admin/db_con.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="admin/img/escudo.jpg">
    <title>Jardín infantil la sabiduría</title>
</head>
<body>
    <main class="main">
        <header class="cabecera">
            <a href="" class="cabecera__link"><img src="admin/img/escudo.jpg" alt="Logo de pagina" class="cabecera__img">Jardín la sabiduría</a>
        </header>
        <nav class="navegacion">
            <a href="">Inicio</a>
            <a href="">Nosotros</a>
            <a href="">Servicios</a>
            <a href="">Contacto</a>
        </nav>

        <!--SECCIÓN 1 BANNER-->
        <section class="banner">
            <h1>Bienvenido</h1>
            <h2>al jardín infantil la sabiduría</h2>
            <a href="admin/login.php">Matricúlate ya</a>
        </section>

        <!--SECCIÓN 2-->
        <section class="seccion-2">
            <article class="bloque-izq">
                <div class="izq-titulo">
                    <h2>Nuestros servicios</h2>
                    <h3>Aprendo explorando, construyo creando.</h3>
                    <h3>Nuestro jardín infantil para niños y niñas ofrece el ambiente y las herramientas adecuadas para el desarrollo integral de nuestros niños en sus primeras etapas de aprendizaje.</h3>
                </div>
                <div class="izq-img">
                    <img src="admin/img/Fotolia_94942220_L.jpg" alt="">
                </div>
                <p class="izq-parrafo"><span>Fomentamos y fortalecemos</span> una educación enfocada en el desarrollo integral del niño en todas sus dimensiones y habilidades por medio de la exploración a través de sus sentidos, incentivando su independencia y autonomía para realizar sus propias creaciones.</p>
            </article>
            <aside class="bloque-der">
                <div class="der-titulo">
                    <h3>Nuestros niveles</h3>
                </div>
                <div class="der-noticias">
                    <div class="noticias-img">
                        <img src="admin/img/parvulos.jpg" alt="">
                    </div>
                    <div class="noticias-textos">
                        <h4>Párvulos</h4>
                        <p>28 a 39 Meses</p>
                        <a href="">Ver nivel</a>
                    </div>
                </div>
                <div class="der-noticias">
                    <div class="noticias-img">
                        <img src="admin/img/prejardin.jpg" alt="">
                    </div>
                    <div class="noticias-textos">
                        <h4>Pre - jardín</h4>
                        <p>40 meses a los 51 meses</p>
                        <a href="">Ver nivel</a>
                    </div>
                </div>
                <div class="der-noticias">
                    <div class="noticias-img">
                        <img src="admin/img/jardin.jpg" alt="">
                    </div>
                    <div class="noticias-textos">
                        <h4>Jardín</h4>
                        <p>52 meses a los 63 meses</p>
                        <a href="">Ver nivel</a>
                    </div>
                </div>
                <div class="der-noticias">
                    <div class="noticias-img">
                        <img src="admin/img/transicion.jpg" alt="">
                    </div>
                    <div class="noticias-textos">
                        <h4>Transición</h4>
                        <p>64 meses a los 75 meses</p>
                        <a href="">Ver nivel</a>
                    </div>
                </div>
            </aside>
        </section>

        <!--SECCIÓN 3-->
        <section class="seccion-3">
            <article class="article">
                <div class="tabla-titulo">
                    <h2>Califícanos</h2>
                </div>
                <div class="tabla-div">
                    <table class="tabla">
                        <tr class="fila-dato">
                            <th class="columna">⭐</th>
                            <th class="columna">⭐</th>
                            <th class="columna">⭐</th>
                            <th class="columna">⭐</th>
                            <th class="columna">⭐</th>
                        </tr>
                        <tr class="fila-dato">
                            <td class="columna">⭐</td>
                            <td class="columna">⭐</td>
                            <td class="columna">⭐</td>
                            <td class="columna">⭐</td>
                            <td class="columna">☆</td>
                        </tr>
                        <tr class="fila-dato">
                            <td class="columna">⭐</td>
                            <td class="columna">⭐</td>
                            <td class="columna">⭐</td>
                            <td class="columna">☆</td>
                            <td class="columna">☆</td>
                        </tr>
                        <tr class="fila-dato">
                            <td class="columna">⭐</td>
                            <td class="columna">⭐</td>
                            <td class="columna">☆</td>
                            <td class="columna">☆</td>
                            <td class="columna">☆</td>
                        </tr>
                        <tr class="fila-dato">
                            <td class="columna">⭐</td>
                            <td class="columna">☆</td>
                            <td class="columna">☆</td>
                            <td class="columna">☆</td>
                            <td class="columna">☆</td>
                        </tr>
                    </table>
                </div>
                <div class="rs-div">
                    <h3>Redes sociales</h3>
                    <div class="rs-img">
                        <img src="admin/img/facebook.jpg" alt="">
                        <img src="admin/img/instagram.jpg" alt="">
                        <img src="admin/img/whatsapp.jpg" alt="">
                        <img src="admin/img/youtube.jpg" alt="">
                    </div>
                </div>
            </article>
            <aside class="aside">
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d254508.51141489705!2d-74.107807!3d4.64829755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1693203844279!5m2!1ses!2sco" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="form-div">
                    <h3>Contacta con nosotros</h3>
                    <p>Si deseas conocer más información acerca de nuestro jardín infantil y su proceso de admisión, te invitamos a llenar el siguiente formulario:</p>

                    <form class="formulario" action="">
                        <input class="input" type="text" placeholder="Nombre completo">
                        <input class="input" type="email" placeholder="Correo electrónico">
                        <input class="input" type="text" placeholder="Asunto">
                        <textarea class="textarea" name="" id="" cols="30" rows="5" placeholder="Mensaje"></textarea>
                        <input class="submit" type="submit" value="Enviar">
                    </form>
                </div>
            </aside>
        </section>

        <!--SECCIÓN 4 FOOTER-->
        <section class="seccion-4">
            <nav class="navegacion-footer">
                <a href="">Inicio</a>
                <a href="">Nosotros</a>
                <a href="">Servicios</a>
                <a href="">Contacto</a>
            </nav>

            <div class="contenedor-s4">
                <div class="textos-s4">
                    <h3>Correo electrónico</h3>
                    <a href="">jardininfantilsabiduria@gmail.com</a>
                </div>
                <div class="textos-s4">
                    <h3>Dirección</h3>
                    <a href="">CL 87 B SUR NO 7 D ESTE - 64</a>
                </div>
                <div class="textos-s4">
                    <h3>Redes sociales</h3>
                    <a href="">Facebook</a>
                    <a href="">Instagram</a>
                    <a href="">WhatsApp</a>
                    <a href="">YouTube</a>
                </div>
                <div class="textos-s4">
                    <h3>Teléfonos</h3>
                    <a href="">+57 316 6378317</a>
                    <a href="">+57 322 7838432</a>
                </div>
            </div>
            <footer class="footer">
                copyright &copy;<a href="">2023</a>. <p>Todos los derechos reservados</p>
            </footer>
        </section>
    </main>
</body>
</html>