<?php 


function mostrar_actividades(){

  $rutaImagenes ='img/actividades/';
  $actividades = get_actividades();
  
  ?>
  <div class="row">
    <?php
    foreach ($actividades as $key => $act) { ?>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="<?php echo "#cartel-actvididades-{$act['id']}";?>">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <div>
              <?php 
              $imagenCartel = $rutaImagenes . $act['cartel'];
              $imagenAlt = $rutaImagenes . $act['alt_cartel']; ?>
              <img class="img-fluid" src="<?php echo $imagenCartel;?>" alt="<?php echo $imagenAlt;?>" >
            </div>
                        
          </div>
        </div>

    <?php 
    } ?>

  </div>

  <?php
} 


function generar_popups_actividades(){ 

  $rutaImagenes ='img/actividades/';
  $actividades = get_actividades();


  
  foreach ($actividades as $key => $act) { ?>

    
  <div class="portfolio-modal modal fade" id="<?php echo "cartel-actvididades-{$act['id']}";?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $act['title'];?></h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-dice"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>

                <!-- Portfolio Modal - Text -->
                <p class="text-justify">
                  <?php 
                  echo $act['content'];?>
                </p>
                <p class="mb-5">
                  <span class="h3 span-lead"><b>¡AQUÍ NADIE SE QUEDA SIN JUGAR!</b></span>
                </p>

                <!-- Portfolio Modal - Image -->
                <?php 
                $imagenCartel = $rutaImagenes . $act['cartel'];
                $imagenAlt = $rutaImagenes . $act['alt_cartel']; ?>                

                <img class="img-fluid rounded mb-5" src="<?php echo $imagenCartel;?>" alt="<?php echo $imagenAlt;?>" >
                
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Cerrar Ventana
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  }

}




function get_actividades(){

  
  $actividades = array();

  $actividades[] = array('id' => 'mar23'
                      , 'title' => 'MARZO 2023'
                      , 'content' => ''
                      , 'cartel' => 'cartel-actividades-marzo-2023.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Marzo de 2023'
                        );

  $actividades[] = array('id' => 'torneohq23'
                      , 'title' => 'I TORNEO HEROQUEST 2023'
                      , 'content' => ''
                      , 'cartel' => 'cartel-i-torneo-heroquest-jueganess-febrero-2023.png'
                      , 'alt_cartel' => 'Cartel del I Torneo de HeroQuest para Febrero y Marzo de 2023'
                        );

  $actividades[] = array('id' => 'feb23'
                      , 'title' => 'FEBRERO 2023'
                      , 'content' => 'Aquí de nuevo con la programación para este mes, que viene cargadito<br>
                      Este primer finde de febrero seguimos con nuestros "Aprende a jugar...", Por un lado, el juego de escaramuzas de Batman miniature game y por 
                      el juego de cartas de Rabbitz & Robots, <b>defiende tu huerto de terribles hordas de conejos zombies mutantes.</b>
                      La semana del carnaval no podemos dejar pasar la oportunidad de hacer un concurso de disfraces y no pueden faltar nuestras sesiones de juegos rápidos.<br>
                      El sábado 18, <b>No solo D&D day</b>, ven a jugar al rol con nosotros, hay mundo más allá de Dragones y mazmorras y 
                      arrancamos un <b>apasionante torneo de HeroQuest</b> y el domingo, segunda edición 
                      para aprender a jugar a  BloodBowl<br>
                      Terminamos el mes con un día dedicado al señor de los anillos, y reservamos el domingo en el CC Saramago a jugar en familia.<br>
                      Además siempre tenemos mesas abiertas y muchos más juegos disponibles.<br>    '
                      , 'cartel' => 'cartel-actividades-febrero-2023.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Febrero de 2023'
                        );

  $actividades[] = array('id' => 'ene23'
                      , 'title' => 'ENERO 2023'
                      , 'content' => '<h3 class="mb-5">¡¡¡ FELIZ AÑO NUEVO!!!</h3>
                      <p class="text-justify">De vuelta del parón navideño ya estamos listos para seguir jugando y probar los regalos
                        que no has traído los sus majestades por ser buenos ( a los caóticos neutrales les ha caído un parchís) <br>
                        Este sábado vamos a darle a los wargames, con partidas introductorias al Killteam y el domingo en el Centro Cívico del Saramago, Comander.<br>
                        Para la siguiente semana tenemos un torneo abierto de Bloodbowl y más "aprende a jugar", ¿no sabes? no te preocupes, 
                        nosotros te enseñamos.<br>
                        Terminamos el mes con un taller de pinturas, para que te traigas tu minis y pases un rato divertido pintando y 
                        que  la marea gris vaya desapareciendo de tus cajones y tome color sobre la mesa de juego.<br>
                        Además siempre tenemos mesas abiertas y muchos más juegos disponibles.<br>                  
                      </p>'
                      , 'cartel' => 'cartel-actividades-enero-2023.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Enero de 2023'
                        );                        

  $actividades[] = array('id' => 'fikividad22'
                      , 'title' => 'FRIKIVIDAD 2022'
                      , 'content' => 'Ven a celebrar la Navidad con nosotros, muchas partidas introductorias para que conozcas
                      nuevos juegos, Once Pice TCG, Commander o Fábulas de Peluche<br>
                      No podía faltar una partida de rol, aventureros en el nuevo mundo, y por supuesto, muchos jugos rápidos y para 
                      toda la familia, ¿has oÍdo un dómino gigante y <b>SORTEOS</b>? puede ser, pásate y lo averiguas ;-).<br>
                      Además siempre tenemos mesas abiertas y muchos más juegos disponibles.<br>     '
                      , 'cartel' => 'cartel-actividades-frikividad-2022.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para celebrar la frikividad'
                        );
  
  $actividades[] = array('id' => 'dic22'
                      , 'title' => 'DICIEMBRE 2022'
                      , 'content' => 'Para diciembre tenemos muchas actividades programadas para sábados y domingos.<br>
                      Empezamos el mes con juegos de roles ocultos, y partidas introductorias a Once Pice TCG.<br>
                      Un día reservado para probar prototipos de juegos, ¿tienes un proto y quieres testearlo?, pues traételo, y más partidas introductorias
                      para conocer nuevos juegos. <br>Y para llegar a las fiestas, tenemos un día especial, <b>Frikinafvidad</b> y el Domingo 18 ven con toda 
                      los tuyos a disfrutar de juegos familiares.<br>
                      Además siempre tenemos mesas abiertas y muchos más juegos disponibles.<br>     '
                      , 'cartel' => 'cartel-actividades-diciembre-2022.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Diciembre de 2022'
                        );

  $actividades[] = array('id' => 'nov22'
                      , 'title' => 'NOVIEMBRE 2022'
                      , 'content' => 'Este mes tenemos partidas introductorias al Dicemasters y Bloodbowl, una tarde reservadada a juegos rápidos y terminamos 
                      el mes con Mutan Year Zone.<br>
                      Además siempre tenemos mesas abiertas y muchos más juegos disponibles<br> '
                      , 'cartel' => 'cartel-actividades-noviembre-2022.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Noviembre de 2022'
                        );
  return $actividades;

}


?>




