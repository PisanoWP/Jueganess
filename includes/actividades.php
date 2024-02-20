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
              $imagenAlt = $act['alt_cartel']; ?>
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
                $imagenAlt = $act['alt_cartel']; ?>                

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

  /*$actividades[] = array('id' => 'ii-torneo-heroquest'
                      , 'title' => 'II TORNEO HEROQUEST'
                      , 'content' => ''
                      , 'cartel' => 'cartel-ii-torneo-heroquest-febrero-2024.jpg'
                      , 'alt_cartel' => 'Cartel II Torneo Heroquest'
                        );*/


  $actividades[] = array('id' => 'rootacademy'
                      , 'title' => 'ROOT ACADEMY'
                      , 'content' => '<p><b>¡Aprende a jugar al juego de mesa Root en Jueganess!</b></p>'
                                   . '<p>Nos reunimos un domingo de cada mes para aprender y mejorar en este juego tan asimétrico y lleno de estrategia. La actividad es abierta a todo el mundo, 100% gratuita y apta para todos los niveles.<br> No buscamos crear un entorno competitivo sino divertirnos e ir mejorando entre todos.</p>'
                                  . '<p>El único requisito indispensable es apuntarse en el canal de Telegram de la asociación para poder saber cuantos seremos, llevar copias del juego y demás.</p>'
                      , 'cartel' => 'root-academy-2024.jpg'
                      , 'alt_cartel' => 'Cartel Root Academy'
                        );
                        
  $actividades[] = array('id' => 'dic23familila'
                      , 'title' => 'JUEGA EN FAMILIA'
                      , 'content' => ''
                      , 'cartel' => 'cartel-juegos-en-familia-diciembre-2023.jpg'
                      , 'alt_cartel' => 'Cartel de juegos en familia'
                        );


  $actividades[] = array('id' => 'dic23taller'
                      , 'title' => 'TALLER DE TÉCNICAS NARRATIVAS Y DE IMPROVISACIÓN PARA ROL'
                      , 'content' => ''
                      , 'cartel' => 'cartel-improvisacion-diciembre-2023.jpg'
                      , 'alt_cartel' => 'Cartel de técnicas narrativas y de improvisación'
                        );

  $actividades[] = array('id' => 'nov23'
                      , 'title' => 'JUEGOS RÁPIDOS Y FÁCILES'
                      , 'content' => ''
                      , 'cartel' => 'cartel-juegos-rapidos-noviembre-2023.jpg'
                      , 'alt_cartel' => 'Cartel de juegos rápidos y fáciles'
                        );

  $actividades[] = array('id' => 'torneomansiones23'
                      , 'title' => 'I TORNEO MANSIONES DE LA LOCURA 2023'
                      , 'content' => ''
                      , 'cartel' => 'cartel-torneo-mansiones-2023.jpg'
                      , 'alt_cartel' => 'Cartel del I Torneo de Mansiones de la Locura 2023'
                        );


  $actividades[] = array('id' => 'jul23'
                      , 'title' => 'JULIO 2023'
                      , 'content' => ''
                      , 'cartel' => 'cartel-actividades-julio-2023.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Julio de 2023'
                        );

  $actividades[] = array('id' => 'jun23'
                      , 'title' => 'JUNIO 2023'
                      , 'content' => ''
                      , 'cartel' => 'cartel-actividades-junio-2023.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Junio de 2023'
                        );
                        
  $actividades['jornada2023'] = array('id' => 'jor23'
                        , 'title' => 'II JORNADAS JUEGANESS 2023'
                        , 'content' => ' <div class="d-flex align-items-center"><a href="jornadas-jueganess-2023.php" class="btn btn-primary btn-lg" target="_blank">
                        <i class="fa-solid fa-dice-d6"></i>
                          <i class="fa-solid fa-dice-d20"></i><br>
                          II JORNADAS JUEGANESS<br>
                          <i class="fas fa-dice"></i>
                          
                        </a></div>'
                        , 'cartel' => 'cartel-ii-jornadas-juegannes-2023.jpg'
                        , 'alt_cartel' => 'Cartel de las II jornadas de Jueganess de 2023'
                          );
                          


  $actividades[] = array('id' => 'mar23'
                      , 'title' => 'MARZO 2023'
                      , 'content' => ''
                      , 'cartel' => 'cartel-actividades-marzo-2023.jpg'
                      , 'alt_cartel' => 'Cartel de las actividades programadas para Marzo de 2023'
                        );

  return $actividades;

} ?>

<?php
function mostrar_jornadas(){

$rutaImagenes ='img/actividades/';
$actividades = get_jornadas();

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
            $imagenAlt = $act['alt_cartel']; ?>
            <img class="img-fluid" src="<?php echo $imagenCartel;?>" alt="<?php echo $imagenAlt;?>" >
          </div>
                      
        </div>
      </div>

  <?php 
  } ?>

</div>

<?php
}  


function get_jornadas(){
  
  $actividades = array();


  $actividades['jornada2024'] = array('id' => 'jor24'
                                    , 'title' => 'III JORNADAS JUEGANESS 2024'
                                    , 'content' => ' <div class="d-flex align-items-center"><a href="jornadas-jueganess-2024.php" class="btn btn-primary btn-lg" target="_blank">
                                      <i class="fa-solid fa-dice-d6"></i>
                                      <i class="fa-solid fa-dice-d20"></i><br>
                                      III JORNADAS JUEGANESS<br>
                                      <i class="fas fa-dice"></i>                          
                                      </a></div>'
                                    , 'cartel' => 'cartel-iii-jornadas-juegannes-2024.jpg'
                                    , 'alt_cartel' => 'Cartel de las IiI jornadas de Jueganess de 2024'
                                      );
                      
  $actividades['jornada2023'] = array('id' => 'jor23'
                                    , 'title' => 'II JORNADAS JUEGANESS 2023'
                                    , 'content' => ' <div class="d-flex align-items-center"><a href="jornadas-jueganess-2023.php" class="btn btn-primary btn-lg" target="_blank">
                                    <i class="fa-solid fa-dice-d6"></i>
                                      <i class="fa-solid fa-dice-d20"></i><br>
                                      II JORNADAS JUEGANESS<br>
                                      <i class="fas fa-dice"></i>
                                      
                                    </a></div>'
                                    , 'cartel' => 'cartel-ii-jornadas-juegannes-2023.jpg'
                                    , 'alt_cartel' => 'Cartel de las II jornadas de Jueganess de 2023'
                                      );

  return $actividades;

} ?>


<?php 
  function mostrar_partidas(){
?>  
  <div>
  <p class="lead text-white">
      <span style="font-weight: bold;">La inscripción a las partidas de rol se hará de forma presencial el mismo día del evento, en orden de llegada.</span>
  </p>
  </div>

  <!-- MAÑANA -->
  <div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">        
        <i class="fa-solid fa-dice-d6"></i>
        &nbsp;
        <span class="text-center text-uppercase text-white mb-0">Mañana</span>
        &nbsp;
        <i class="fa-solid fa-dice-d6"></i>
      </div>  
    <div class="divider-custom-line"></div>        
  </div>


  <div class="d-flex flex-column  flex-lg-row flex-xl-row ">
    <p class="mx-auto lead text-uppercase text-white mb-0">Próximamente se listarán las partidas de rol disponibles.</p>
    <!--
    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
        <h5 class="card-title">Título de la partida</h5>
        <p class="card-text">
          <ul>
            <li><b>Máster:</b> - </li>
            <li><b>Número de jugadores:</b> - </li>
            <li><b>Sistema:</b> - </li>
            <li><b>Edad recomendada:</b> - </li>
            <li><b>Sinopsis:</b> </li>
          </ul>            
        </p>
      </div>
    </div>

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
        <h5 class="card-title">Título de la partida</h5>
        <p class="card-text">
          <ul>
            <li><b>Máster:</b> - </li>
            <li><b>Número de jugadores:</b> - </li>
            <li><b>Sistema:</b> - </li>
            <li><b>Edad recomendada:</b> - </li>
            <li><b>Sinopsis:</b> </li>
          </ul>            
        </p>
      </div>
    </div>
    -->
  
  </div>  
  


  <!-- TARDE -->
  <div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">        
        <i class="fa-solid fa-dice-d20"></i>
        &nbsp;
        <span class="text-center text-uppercase text-white mb-0">Tarde</span>
        &nbsp;
        <i class="fa-solid fa-dice-d20"></i>
      </div>  
    <div class="divider-custom-line"></div>
  </div>

  <div class="d-flex flex-column  flex-lg-row flex-xl-row ">
    <p class="mx-auto lead text-uppercase text-white mb-0">Próximamente se listarán las partidas de rol disponibles.</p>
    
    <!--
    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
        <h5 class="card-title">Título de la partida</h5>
        <p class="card-text">
          <ul>
            <li><b>Máster:</b> - </li>
            <li><b>Número de jugadores:</b> - </li>
            <li><b>Sistema:</b> - </li>
            <li><b>Edad recomendada:</b> - </li>
            <li><b>Sinopsis:</b> </li>
          </ul>            
        </p>
      </div>
    </div>

    <div class="card bg-light mb-3 card-width card-lg-width card-xl-width" >
      <div class="card-body">
        <h5 class="card-title">Título de la partida</h5>
        <p class="card-text">
          <ul>
            <li><b>Máster:</b> - </li>
            <li><b>Número de jugadores:</b> - </li>
            <li><b>Sistema:</b> - </li>
            <li><b>Edad recomendada:</b> - </li>
            <li><b>Sinopsis:</b> </li>
          </ul>            
        </p>
      </div>
    </div>
    -->
  
  </div>  




<?php
} 


function get_colaboradores($jornada){
  $colaboradores = array();
  if ('2023'==$jornada):
    $colaboradores[] = array( 'title'=> 'De Jovenes', 'logo' => 'logo-dejovenes.jpg', 'alt_logo' => 'Logo DeJovenes', 'url' =>'https://www.dejovenesleganes.es/', 'class' => false  );
    $colaboradores[] = array( 'title'=> 'HT Publishers','logo' => 'logo-htc-publishers.png', 'alt_logo' => 'Logo HTC Publishers', 'url' =>'https://htpublishers.es/', 'class' => false  );
    $colaboradores[] = array( 'title'=> 'Falomir Juegos','logo' => 'logo-falomir.png', 'alt_logo' => 'Logo Falomir Juegos', 'url' =>'https://falomirjuegos.com', 'class' => false  );
    $colaboradores[] = array( 'title'=> 'Bastión de Mundos','logo' => 'logo-bastion-de-mundos.png', 'alt_logo' => 'Logo Bastión de Mundos', 'url' =>'https://bastiondemundos.es/', 'class' => false  );
    $colaboradores[] = array( 'title'=> 'Eclipse Editorial','logo' => 'logo-eclipse.png', 'alt_logo' => 'Logo Eclipse', 'url' =>'https://eclipseeditorial.com/games', 'class' => false );
    $colaboradores[] = array( 'title'=> 'GDM Games','logo' => 'logo-gdm.png', 'alt_logo' => 'Logo GDM', 'url' =>'https://gdmgames.com/', 'class' => false  );
    $colaboradores[] = array( 'title'=> 'Nosolorol','logo' => 'logo-nosolorol.png', 'alt_logo' => 'Logo NoSolo Rol', 'url' =>'https://www.nosolorol.com', 'class' => false  );
    $colaboradores[] = array( 'title'=> 'Sugar Editorial','logo' => 'logo-sugar.png', 'alt_logo' => 'Logo Sugar editorial', 'url' =>'https://sugaareditorial.com/', 'class' => false  );
    $colaboradores[] = array( 'title'=> 'Madrid By Night','logo' => 'logo-madrid-by-night.jpg', 'alt_logo' => 'Logo Madrid By Night', 'url' =>'http://madridbynight.es/', 'class' => false  );
    $colaboradores[] = array( 'title'=> 'Colmena de Papel','logo' => 'logo-colmena-de-papel.png', 'alt_logo' => 'Logo Colmena de Papel', 'url' =>'https://www.colmenadepapel.com/', 'class' => false );
    $colaboradores[] = array( 'title' => 'Con Pluma y Pixel', 'logo' => 'logo-con-pluma-y-pixel.png', 'alt_logo' => 'Logo Con Pluma y Pixel', 'url' =>'https://conplumaypixel.com/', 'class' => 'flex-fill' );    
    $colaboradores[] = array( 'title'=> 'Generación X - Getafe','logo' => 'logo-gen-x-getafe.png', 'alt_logo' => 'Logo Gen X', 'url' =>'https://www.generacionx.es/', 'class' => false );
    $colaboradores[] = array( 'title'=> 'Big Bang Games', 'logo' => 'logo-big-bang-games.png', 'alt_logo' => 'Logo Big Bang Games', 'url' =>'https://www.thebigbanggames.com/', 'class' => 'flex-fill' );
    $colaboradores[] = array( 'title'=> 'El Señor Miyagi', 'logo' => 'logo-sr-miyagi.jpg', 'alt_logo' => 'Logo Sr Miyagi', 'url' =>'https://www.miyagi.es/es/', 'class' => 'flex-fill' );
    $colaboradores[] = array( 'title'=> 'Holocubierta','logo' => 'logo-holocubierta.jpg', 'alt_logo' => 'Logo Holocubierta', 'url' =>'https://www.holocubierta.com/', 'class' => false );
    $colaboradores[] = array( 'title'=> 'Mercurio','logo' => 'logo-mercurio-distribucion.jpg', 'alt_logo' => 'Logo Mercurio distribuciones', 'url' =>'https://mercurio.com.es/', 'class' => false  );
    $colaboradores[] = array( 'title'=> 'Walhalla ediciones','logo' => 'logo-walhalla-ediciones.png', 'alt_logo' => 'Logo Walhalla Ediciones', 'url' =>'https://walhallaediciones.com/', 'class' => false );
    $colaboradores[] = array( 'title'=> 'El Refugio de Ryhope','logo' => 'logo-el-refugio-de-ryhope.png', 'alt_logo' => 'Logo el refugio de ryhope', 'url' =>'https://www.elrefugioeditorial.com/', 'class' => false );  
    $colaboradores[] = array( 'title'=> 'Draco Ideas','logo' => 'logo-draco-ideas.png', 'alt_logo' => 'Logo Draco Ideas', 'url' =>'https://dracoideas.com/', 'class' => false );  
    $colaboradores[] = array( 'title'=> 'Other Selves','logo' => 'logo-other-selves.png', 'alt_logo' => 'Logo Other Selves', 'url' =>'http://www.other-selves.com/', 'class' => false );
    $colaboradores[] = array( 'title'=> 'Akuma Studio','logo' => 'logo-akuma-studio.jpg', 'alt_logo' => 'Logo Akuma Studio', 'url' =>'https://twitter.com/AkumaRPG', 'class' => false );
    $colaboradores[] = array( 'title'=> 'Rocket Lemon Games','logo' => 'logo-rocket-lemon.png', 'alt_logo' => 'Logo Rocket Lemon', 'url' =>'https://rocketlemongames.com/', 'class' => false );  
    $colaboradores[] = array( 'title'=> 'Asociación Ludo','logo' => 'logo-ludo.png', 'alt_logo' => 'Logo Ludo', 'url' =>'https://asociacionludo.com/', 'class' => false  );  
    $colaboradores[] = array( 'title'=> 'Asociación Éter','logo' => 'logo-eter.png', 'alt_logo' => 'Logo Éter', 'url' =>'https://asociacioneter.org/', 'class' => false );
    $colaboradores[] = array( 'title'=> 'La Mazmorra juegos de rol','logo' => 'logo-mazmorra.png', 'alt_logo' => 'Logo Mazmorra Juegos de rol', 'url' =>'https://lamazmorrajuegosderol.wordpress.com/', 'class' => false );
    $colaboradores[] = array( 'title'=> 'Nordic Baby','logo' => 'logo-nordic-baby.png', 'alt_logo' => 'Logo Noridc Baby', 'url' =>'https://nordicbaby.es', 'class' => false );
    $colaboradores[] = array( 'title'=> 'Jugando por ellos','logo' => 'logo-jugando-por-ellos.png', 'alt_logo' => 'Logo Jugando por Ellos', 'url' =>'http://www.jugandoporellos.es/', 'class' => 'flex-fill' );                        
  
  elseif ('2024'==$jornada):
    $colaboradores[] = array( 'title'=> 'De Jovenes', 'logo' => 'logo-dejovenes.jpg', 'alt_logo' => 'Logo DeJovenes', 'url' =>'https://www.dejovenesleganes.es/', 'class' => false  );
    $colaboradores = array();

  endif;    

  return $colaboradores;                        

}

