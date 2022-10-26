<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SADIDAS S.A.S</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> 
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="fila">
                    <div id="logo">
                        <a href=""><img src="img/WhatsApp_Image_2022-08-02_at_1.40.46_PM .svg" alt="Logo" width="40%"></a>
                    </div>
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#section1">Quiénes somos</a></li>
                        <li><a href="#section2">Servicios</a></li>
                        <li><a href="#section4">Productos</a></li>
                        <li><a href="#section5">Contáctenos</a></li>
                        <li><a href="login">INGRESAR</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hero">
            <div class="container">
                <div id="contenido">
                    <h1>Nuestros productos <br>
                        <b>para ti </b></h1>
                    <P>Somos una PYME encargada al comercio y distribuidora de ropa deportiva, te invitamos a conocer nuestros productos ¡contáctate con nosotros!</P>
                    <button class="btn-primary" onclick="location.href='#section3'">Explore más</button>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section id="section1">
            <div class="container">
                <div class="fila destacados">
                    <article>
                        <h2><img src="img/bandera.png" alt="icono" width="30px" height="40px"> MISIÓN</h2>
                        <p>Ser marca líder a nivel nacional ofreciendo prendas deportivas a bajos costos con la intención de promover la cultura deportiva.</p>
                    </article>  
                    <article>
                        <h2><img src="img/eye-free-icon-font.png" alt="icono" width="30px" height="40px"> VISIÓN</h2>
                        <p>En cinco años seremos competentes en la industria con un enfoque en obtener las mejores prendas deportivas en relación calidad - precio.</p>
                    </article>
                </div>
                <div class="fila welcome">  
                    <article class="info">
                        <h3>¿Quiénes
                            <b> somos?<b></h3>
                        <p>Somos una ampresa ubicada en el sur de Bogotá específicamente en la localidad de Ciudad Bolivar la cual tiene como objeto social 
                            la compra de materia prima (telas, hilos, ...), maquinaria e insumos (agujas, aceite, ...) con el fin de confeccionar ropa deportiva a 
                            bajos precios para que sean asequible a cualquier persona independientemente de su presupuesto.
                        </p>  
                        <button>¿Quieres saber más? </button>   
                    </article>
                    <article class="fotos">
                        <img src="img/welcome2.png" alt="imagen">
                        <div>
                            <img src="img/telas.png" alt="imagen">
                        </div>
                    </article>
                </div>
                <div class="fila redes">
                    <button><i class="bi bi-whatsapp"></i></button>
                    <button><i class="bi bi-facebook"></i></button>
                    <button><i class="bi bi-instagram"></i></button>
                </div>
            </div>
        </section>
        <section id="section2">
            <div class="container">
                <article class="info-section2">
                    <h3>Explore nuestros <b>Servicios</b></h3>
                    <p>En total tenemos cuatro servicios los cuales pueden ser adquiridos por nuestros aliados.</p>
                </article>
            
            <div class="fila">
                <article class="card">
                    <img src="img/maquina-de-coser.png" alt="">
                    <h4><b>01</b></h4>
                    <h4>Confección</h4>
                    <P>Contamos con maquinaria calificada para poder brindar el mejor servicio en cuestión de armado de prendas, un ejemplo de los productos ya entregados es: </P>
                    <ul>
                        <li>Blusas</li>
                        <li>Sudaderas</li>
                        <li>Camisas ...</li>
                    </ul>
                </article>

                <article class="card">
                    <img src="img/maquina-de-corte-por-laser.png" alt="">
                    <h4><b>02</b></h4>
                    <h4>Corte</h4>
                    <P>Se realiza corte textil de diferentes tipos de tela al igual <br> contamos con maquinaria especial para cada una de ellas: <br> </P>
                    <br>
                    <ul>
                        <li>Vioto</li>
                        <li>Acrílico</li>
                        <li>Afelpado ...</li>
                    </ul>
                </article>

                <article class="card">
                    <img src="img/bordado.png" alt="">
                    <h4><b>03</b></h4>
                    <h4>Bordado</h4>
                    <P> Existen diversos tipos de bordados, que se caracterizan por el relieve que presentan <br> por lo cual contamos con diferentes tipos de relieves para ti:</P>
                
                    <ul>
                        <li>Lisos</li>
                        <li>Realce</li>
                        <li>Sobre puesto</li>
                    </ul>
                </article>

            </div>
        </section>
        <section id="section3">
            <div class="container">
                <div class="fila">
                    <article class="card-vertical">
                        <div class="info-card">
                            <h3>01</h3>
                            <h2>Compra de sudaderas vioto</h2>
                            <p>Por último puedes adquirir la compra al por mayor o detal de pantalones, pantalonetas tipo sudadera las cuales cuales estan realizadas en material vioto que es también conocida como tela Lotto o Bioto la cual es un perchado de poliéster satinado, resistente y grueso que permite que nuestros productos tengan una larga duración, comodidad, obteniendo calidad a bajos precios. </p>
                        </div>
                    </article>
                    <!--
                    <article class="card-vertical">
                        <div class="info-card">
                            <h3>02</h3>
                            <h2>Quality Management</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis reiciendis aspernatur accusamus facilis consectetur provident commodi maxime. Libero, eveniet cum!</p>
                        </div>
                    </article>
                    <article class="card-vertical">
                        <div class="info-card">
                            <h3>03</h3>
                            <h2>Quality Management</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis reiciendis aspernatur accusamus facilis consectetur provident commodi maxime. Libero, eveniet cum!</p>
                        </div>
                    </article>
                    <article class="card-vertical">
                        <div class="info-card">
                            <h3>01</h3>
                            <h2>Quality Management</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis reiciendis aspernatur accusamus facilis consectetur provident commodi maxime. Libero, eveniet cum!</p>
                        </div>
                    </article>
                    -->
                </div>
            </div>
        </section>
        <section id="section4">
            <div class="container">
                <h2>Características de <b> nuestros Productos</b></h2>
                <p>Nuestros productos se identifican principalmente por 4 características las cuales nos permiten abarcar un amplio nicho de mercado.</p>
                <div class="fila">
                    <article class="card-metas">
                        <i class="bi bi-hourglass-split"></i>
                        <h3>+90</h3>
                        <h4>Durabilidad</h4>
                        <p>Contamos con una resistencia textil ya que realizamos pruebas sometiendo las fibras de la tela a cierto tipo de tensiones.</p>
                    </article>
                    <article class="card-metas">
                        <i class="bi bi-person-heart"></i>
                        <h3>+85</h3>
                        <h4>Comodidad</h4>
                        <p>Gracias al tipo de material en el que está hecho nuestro producto permite un mayor confort.</p>
                    </article>
                    <article class="card-metas">
                        <i class="bi bi-award-fill"></i>
                        <h3>+90</h3>
                        <h4>Calidad</h4>
                        <p>Nos esforzamos por manteder estandares de calidad textil altos para satisfacer las necesidades de nuestros cliente.</p>
                    </article>
                    <article class="card-metas">
                        <i class="bi bi-tags-fill"></i>
                        <h3>+100</h3>
                        <h4>Bajos precios</h4>
                        <p>Nuestros productos resultan ser competitivos por el valor de adquisición a compración de otras marcas</p>
                    </article>
                </div>
            </div>
        </section>
        <section id="section5">
            <div class="container">
                <h2>Contáctenos</h2>
                <div class="fila">
                    <article class="formulario">
                        <input type="text" name="nombre" placeholder="Nombre">
                        <input type="text" name="celular" placeholder="Celular">
                        <input type="text" name="correo" placeholder="Correo">
                        <input type="text" name="ciudad" placeholder="Ciudad">
                        <textarea name="mensaje" placeholder="Describe lo que desea saber ..."></textarea>
                        <button>Enviar</button>   
                    </article>
                    <article class="informacion">
                        <p>Para nosotros es un placer convertirnos en su aliado y lograr juntos el crecimiento de su empresa. no dude en escribirnos o contactarnos por cualquiera de los siguientes medios, estaremos atentos para brindarle nuestra asesoría y resolver cualquier duda de los servicios a adquirir.</p>  
                        <ul>
                            <li><i class="bi bi-envelope-paper"></i>compras@sadidas.com</li>
                            <li><i class="bi bi-geo-alt-fill"></i>Carrera 70 A sur 20</li>
                            <li><i class="bi bi-telephone-fill"></i>+601 - 5472578</li>
                            <li><i class="bi bi-file-richtext"></i>+57 - 320966901</li>
                        </ul>
                    </article>
                </div>            
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>Copyrigth © 2022 Sadidas S.A.S by Infi-A. All Rights Reserved </p>
        </div>
    </footer>
</body>
</html>