@extends('plantilla')


@section('ubicacion')
Inicio
@endsection

@section('contenido')

    <section id="home" class="slider_area" >
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
        
                <div class="carousel-inner">
                    <div class="carousel-item active"  style='background: url(/imgs/fondo.png) no-repeat;'>
                     <div class="container">
                        <div class="row" style='text-align:center;'>
                        <div class="col-lg-6">
                            <div class="slider-content" style='width:100%;text-align:center;'>
                                <img src="/imgs/ostamma.png" alt="OSTAMMA La obra social de todos" style='width:100%;max-width:250px;'/>
                            </div>
                        </div>
                        <img src="/imgs/familia.png" alt="Familia OSTAMMA" class='familia'/>
                        </div>
                     </div>
                </div> <!-- carousel-item -->
 
            </div>

        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== FEATRES TWO PART START ======-->

    <section id="planes" class="features-area" style='background:#0097CE;'>
        <div class="container">
            <div class="row justify-content-center pb-60">
                <div class="col-lg-8 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">PLANES</h3>
                        <p class="text">Nuestros planes de salud brindan una amplia cobertura. Con tu aporte mensual o un pago adicional son ideales para grupos familiares  o personas solas que buscan cobertura social sin pagar de más.
                        
                        </p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9 pt-10">
                    <a href="/plan/plan_clasico">
                    <img src="imgs/clasico.png" alt="Plan Clásico" style='width:100%;'>
                    </a>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9 pt-10"> 
                    <a href="/plan/plan_superior">
                    <img src="imgs/superior.png" alt="Plan Superior" style='width:100%;'>
                    </a>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9 pt-10">
                    <a href="/plan/plan_joven">
                    <img src="imgs/joven.png" alt="Plan Jóven" style='width:100%;padding-left:11px;'>
                    </a>
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center pt-50">
                <div class="col-lg-8 col-md-10">
                    <div class="section-title text-center pt-20">
                        <a href="/conocer_plan/todos">
                        <img src="imgs/planes.png" alt="Conocé nuestros planes" style='width:100%;'>
                        </a>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATRES TWO PART ENDS ======-->
    
    <!--====== PORTFOLIO PART START ======-->

    <section id="autogestion" class="portfolio-area portfolio-four pb-0">
        <div class="container">
            <div class="row justify-content-center pt-10">
                <div class="col-lg-12 col-md-10">
                    <div class="section-title text-center pb-0">
                        <a href="/consulta">
                            <img src="imgs/autogestion.jpg" alt="Acceso a Autogestión" style='width:100%;'/>
                        </a> 
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div>
    </section>
    <section id="cartilla" class="portfolio-area portfolio-four pb-50">
        <div class="container">
            <div class="row justify-content-center pb-30">
                <div class='mt-20 mb-20' style='width:100%;height:2px;background:#444;'></div>

                <div class="col-lg-8 col-md-10">
                    <div class="section-title text-center pb-20 pt-20">
                        <h3 class="title" style='color:#0159A6;'>CARTILLA</h3>
                        
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9 pt-40" style='height:100%;text-align:center;'>
                    <a href="/prestadores">
                    <img src="imgs/prestadores.png" alt="Prestadores" style='bottom:0px;'/>
                    </a>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9 pt-40" style='height:100%;text-align:center;'> 
                    <a href="/centros">
                    <img src="imgs/centros.png" alt="Centros Médicos" style='bottom:0px;' />
                    </a>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9 pt-40" style='height:100%;text-align:center;'>
                    <a href="/farmacias">
                    <img src="imgs/farmacias.png" alt="Farmacias"  style='bottom:0px;' />
                    </a>
                </div>
            </div> <!-- row -->
        </div>
    </section>
    <section id="promociones" class="features-area m-100 " style='background:#B8E2F1;'>
            <div class="container p-30">
                <img src="imgs/lactancia2.jpg" alt="" style='width:100%;border-radius:14px;'>
            </div>
    </section>
    <section id='nosotros' class="portfolio-area portfolio-four pb-100">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title" style='color:#0097CE;'>¿QUIÉNES SOMOS?</h3>
                    </div>  
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="portfolio-menu text-left mt-50">
                        <ul>
                            <li data-filter=".historia" class="active" style='background:#0097CE;border-radius:10px;color:white;'>NUESTRA HISTORIA</li>
                            <li data-filter=".certificacion" style='background:#0097CE;border-radius:10px;color:white;'>CERTIFICACION</li>
                            <li data-filter=".calidad" style='background:#B8E2F1;border-radius:10px;color:white;line-height:30px;text-transform:none;'>
                            Política de la calidad</li>
                            <li data-filter=".alcance" style='background:#B8E2F1;border-radius:10px;color:white;line-height:30px;text-transform:none;'>
                            Alcance</li>
                            <li data-filter=".certificado" style='background:#B8E2F1;border-radius:10px;color:white;line-height:30px;text-transform:none;'>
                            Certificado</li>
                            <li data-filter=".consejo" style='background:#0097CE;border-radius:10px;color:white;'>CONSEJO DIRECTIVO</li>
                            <li data-filter=".estatuto" style='background:#0097CE;border-radius:10px;color:white;'>ESTATUTO</li> 
                        </ul>
                    </div>  
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row no-gutters grid mt-50">
                        <div class="col-lg-9 col-sm-12 historia" >
                        <h4 class='mb-2 mt-4'> Nuestra historia </h4><br> <br>

                        La Obra Social de los Trabajadores Asociados a la Asociación Mutual Mercantil Argentina (OSTAMMA) se inició el 1 de diciembre de 2004, como resultado del esfuerzo de la mutual AMMA que anhelaba erigirse y operar como Obra Social, siendo la primera en el interior del país en lograr esta inscripción.
                        OSTAMMA se desempeña como una entidad con autonomía financiera, respetando y potenciando su origen y, hoy, reafirmando de manera continua su compromiso con la salud de todos los trabajadores

                        </div>

                        <div class="col-lg-9 col-sm-12 certificacion" >
                        <h4 class='mb-2 mt-4'>Certificación</h4> <br><br>
                            OSTAMMA, como Obra Social líder, certificó desde el año 2016 su Sistema de Gestión de la Calidad de acuerdo con los requisitos de la Norma Internacional ISO 9001:2015, siguiendo el propósito y la dirección estratégica para el crecimiento y el desarrollo y basados en el concepto fundamental de la mejora continua. <br><br>
                            Esta Norma de Calidad garantiza que OSTAMMA cumple con los requerimientos establecidos, ofreciéndole a la sociedad en su conjunto la mejor calidad de servicio.
                        </div>

                        <div class="col-lg-9 col-sm-12 calidad " >
                            <h4 class='mb-2 mt-4'>Política de la Calidad</h4> <br><br>
                            La Dirección de OSTAMMA establece, implementa, mantiene y comunica la siguiente Política de la Calidad, la cual es entendida y aplicada por los colaboradores de la organización y está disponible como información documentada para las partes interesadas pertinentes según corresponda:<br><br>
                            “Somos una Obra Social comprometida en asegurar el proceso de salud-enfermedad a nuestros beneficiarios y partes interesadas pertinentes, a través de un diagnóstico y tratamiento oportuno, implementando una administración ágil y efectiva, con la permanente competencia de nuestros profesionales, la innovación tecnológica y la gestión de los riesgos y las oportunidades, garantizando nuestra vocación de servicio para prevenir y detectar tempranamente las patologías.<br><br>
                            Trabajamos en mejorar continuamente la eficacia de nuestro sistema de gestión de la calidad, cumpliendo con los requisitos aplicables vigentes, controlando y monitoreando las prestaciones que reciben los beneficiarios en los centros del grupo y en los contratados, y con el objetivo final de brindar la mejor calidad y la mayor eficiencia de nuestros servicios en el cuidado de la salud.<br><br>
                            La Dirección asegura que esta Política de la Calidad es comunicada, entendida y aplicada en OSTAMMA, que será revisada periódicamente y que está disponible para los colaboradores de OSTAMMA y de las partes interesadas pertinentes según corresponda”

                        </div>

                        <div class="col-lg-9 col-sm-12 alcance" >
                            <h4 class='mb-2 mt-4'>Alcance</h4> <br><br>
                            “Gestión de las prestaciones médico asistenciales para el servicio integral de salud a sus beneficiarios”. <br> <br>
                            OSTAMMA establece, implementa, mantiene y mejora continuamente su sistema de gestión de la calidad, incluyendo los procesos correspondientes y sus interacciones de acuerdo con los requisitos de la Norma ISO 9001:2015.

                        </div>

                        <div class="col-lg-9 col-sm-12 certificado" >
                            <h4 class='mb-2 mt-4'>Certificado</h4> <br><br>
                            <a href="/fuente/iqnet_9001.jpg" download>
                                Descargar Certificado IQNET ISO 9001
                            </a> <br><br>
                            <a href="/fuente/iram_9001.jpg" download>
                                Descargar Certificado IRAM ISO 9001
                            </a>
                        </div>

                        


                        <div class="col-lg-9 col-sm-12 consejo" >
                            <h4 class='mb-2 mt-4'>Consejo Directivo Período 2019-2023</h4> <br> <br>
                            <strong>Presidente</strong><br>
                            Fernando Iván Pepicelli <br><br>
                            <strong>Vicepresidente</strong><br>
                            Edgardo Miguel Devoto <br><br>
                            <strong>Tesorero</strong> <br>
                            Matías Alejandro Priotti <br><br>
                            <strong>Secretario de Actas</strong> <br>
                            Iven Alfredo Giletta <br><br>
                            <strong>Secretaria de Acción Social</strong><br>
                            Karina Elizabeth Quevedo <br><br>
                            Vocal Suplente 1: María Belén Guirardelli <br>
                            Vocal Suplente 2: María José Pauletti  <br> <br>
                            <strong> Comisión Revisora de Cuentas</strong> <br><br>
                            Revisor 1: Miguel Ángel Olaviaga <br>
                            Revisor 2: Domingo Hipólito Gutierrez <br>
                            Revisor 3: Jerónimo Joaquín Yacob 
                        </div>  
                        
                        <div class="col-lg-9 col-sm-12 estatuto" >
                        <h4 class='mb-2 mt-4'>Estatuto</h4> <br><br>
                            <a href="/fuente/estatuto_ostamma.pdf" download>
                                Descargar Estatuto OSTAMMA
                            </a>  
                        </div>

                        
                        </div>
                    </div> <!-- row -->
                </div>
            <div class="row">
                <div class="col-12 mt-40 mb-20 "> 
                    <h4 class='mb-2 mt-4'>Misión</h4>  <p></p>
                    “Proporcionar a la sociedad, con un concepto universal e integral, desde un modelo biopsicosocial y con promoción y prevención de la salud, los mejores servicios médicos para el cuidado y la mejora continua de su calidad de vida”.
                    <p></p> <br>
                    <h4  class='mb-2 mt-3' >Visión</h4><p></p>
                    “Ser reconocidos como una Obra Social líder, con innovación, vocación de servicio, avanzada tecnología y la más alta calidad profesional”.
                    <p></p> <br>
                    <h4  class='mb-2 mt-3' >Valores</h4><p></p>
                    <ul style='  list-style-type: disc; margin-left:25px;list-style-position: outside; list-style-image: none; color:blue;'>
                        <li style='color:black;'>Liderazgo y compromiso social anticipando las necesidades de los beneficiarios y la comunidad en general.</li>
                        <li style='color:black;'>Accesibilidad y eficiencia para los beneficiarios en prestaciones de calidad basadas en la sustentabilidad.</li>
                        <li style='color:black;'>Transparencia y honestidad en la administración de los recursos.</li>
                        <li style='color:black;'>Integridad y ética en el desarrollo de los negocios.</li>
                        <li style='color:black;'>Cooperación y trabajo en equipo en las acciones.</li>
                        <li style='color:black;'>Solidaridad y equidad con los beneficiarios y con todas nuestras partes interesadas pertinentes.</li>
                        <li style='color:black;'>Democracia en la elección de sus directivos.</li>
                    </ul>

                </div>
            
            
            </div>

        </div> <!-- container -->
    </section> 
    <section id="contacto" class="contact-area" style='background:#0097CE;padding-bottom:0px;'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10" style='color:white;font-size:18px;line-height:22px;text-align:center;'>
                    <div class="section-title text-center pb-30" style=''>
                        <h3 class="title">CONTACTO</h3> 
                        <a href="http://www.ammasalud.com.ar">
                        <img src="/imgs/pie.png" alt="OSTAMMA AMMA Salud" style='padding-top:50px;'>
                        </a>
                        <p></p>
                        
                    </div> <!-- section title -->

                    La Obra Social de los Trabajadores Asociados a la Asociación Mutual Mercantil Argentina (OSTAMMA) se inició el 1 de diciembre de 2004, un año después que se presentara el expediente, solicitando la incorporación de la mutual al régimen de agentes de seguro de salud. 
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map mt-30">
                    <iframe id="gmap_canvas" src="https://www.google.com/maps/d/embed?mid=10YqHMmdjm-HddwdCBnXENIDK1OsF0lpD" width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> 
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30 pb-0 mb-0">
             <div class="container">
                <div class="row">
                    <div class="col-4 "> 
                    </div>
                    <div class="col-4" style='text-align:center;'>
                        <a href="https://www.facebook.com/OSTAMMA/" style='border-radius:30px;background:white;text-align:center;height:60px;width:60px;margin:5px;'>
                            <i class="lni lni-facebook-filled" style='color:#0097CE;font-size:40px;line-height:60px;'></i>
                        </a> 
                        <a href="https://www.instagram.com/o.s.t.a.m.m.a?r=nametag" style='border-radius:30px;background:white;text-align:center;height:60px;width:60px;margin:5px;'>
                            <i class="lni lni-instagram-original" style='color:#0097CE;font-size:40px;line-height:60px;'></i>
                            </a> 
                        <p></p><p></p><br/>
                        <a href="http://www.gesta.org.ar" target='_blank'>
                            <img src="/imgs/gesta.png" alt="Entidad perteneciente al Grupo GESTA" /> <br/><br/>
                        </a> <br>
                        <img src="/imgs/sss.png" alt="Super Intendencia de Salud de la Nación" />  
                    </div>
                    <div class="col-4" style='vertical-align:top;' > 
                        <a href="https://wa.me/5493535629113" style='width:100%;text-align:right;'>
                            <img src="/fuente/whatsapp.png" alt="Whatsapp" style='width:60px;max-width:100%;'>
                        </a>
                    </div>
                </div> <!-- row -->
                </div>
            </div> <!-- contact info --> 
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
@endsection