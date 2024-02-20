<?php 
include_once 'includes/jueganess.php'; 
include_once 'includes/actividades.php'; 
?>

<?php
$jornadas_activas = true; 
cabecera(); ?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Jueganess</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
                 
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="#">III Jornadas</a>
          </li>
                    
          <?php 
          if ($jornadas_activas): ?>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#horario">Horario</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#inscripciones">Inscripciones</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#partidas">Partidas</a>
          </li>

          <?php
          endif; ?>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contacto">Contacto</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <?php 
    $rutaImagenes ='img/actividades/';
    $actividades = get_actividades(); 
    $act = $actividades['jornada2024'];      
    
    $act = array( 'id'         => 'jor24'
                , 'title'      => 'III JORNADAS JUEGANESS 2023'
                , 'content'    => 'LAS INSCRIPCIONES SE ABRIRÁN PRÓXIMAMENTE'
                , 'cartel'     => 'cartel-iii-jornadas-juegannes-2024.jpg'
                , 'alt_cartel' => 'Cartel de las III jornadas de Jueganess de 2024'
      ); ?>

  <header class="masthead bg-primary text-white text-center">
    
    <div class="container d-flex align-items-center flex-column-reverse flex-sm-column-reverse flex-md-column-reverse flex-lg-row flex-lg-row">
    
      <div class="container d-flex align-items-center flex-column">
        
        <?php 
        $imagenCartel = $rutaImagenes . $act['cartel'];
        $imagenAlt =  $act['alt_cartel']; ?>
        

        <img class="img-fluid mb-5" src="<?php echo $imagenCartel;?>" alt="<?php echo $imagenAlt;?>" >

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">          
            <i class="fa-solid fa-dice-d6"></i>
            <i class="fa-solid fa-dice-d20"></i>
          </div>
          <div class="divider-custom-line"></div>
        </div>

        <!-- Masthead Subheading -->
        <p class="masthead-subheading font-weight-light mb-0">Asociación Cultural de Leganés</p>

      </div>
    </div>
  </header>

   
  <?php 
  if ($jornadas_activas): ?>
  <!-- Horario Section -->
  <section class="page-section portfolio bg-primary " id="horario">
    <div class="container">

      <!-- Partidas Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white mb-0">ACTIVIDADES Y HORARIO</h2>

      

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-dice"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <h3 class="lead text-white">        
      Las Jornadas Jueganess III se celebrarán el 25 de mayo de 2024. Horario: 9:30 a 21:00h.
      </h3>
      

      <p class="mx-auto text-center lead text-uppercase text-white mt-3">
        Próximamente más información sobre las actividades programadas ...
      </p>

    </div>
  </section>


  <!-- Inscripciones Section -->
  <section class="page-section mb-0" id="inscripciones">
    <div class="container">

      <!-- About Section Heading -->
      
      <h2 class="page-section-heading text-center text-uppercase text-secondary">INSCRIPCIONES</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-dice"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      


      <!-- About Section Content -->
      <div class="row">
        <?php 
        $inscripciones_abiertas = false;
        if ($inscripciones_abiertas){ ?>
        <div class="col-lg-6 ml-auto d-flex align-items-center">
          <p class="lead" >
          ¡¡¡¡ Ya se ha abierto el plazo de inscripciones!!!
          </p>          
        </div>    
        <div class="col-lg-6 ml-auto d-flex align-items-center">
          <a href="https://forms.gle/P1rv3jadpj4stNyB8" class="btn btn-primary btn-lg" target="_blank">
          <i class="fa-solid fa-dice-d6"></i>
            <i class="fa-solid fa-dice-d20"></i><br>
            RELLENA EL FORMULARIO DE INSCRIPCIÓN<br>
            <i class="fas fa-dice"></i>            
          </a>        
        </div>        

        <?php 
        }else { ?>
          <div class="col-lg-12 ml-auto d-flex align-items-center">
            <p class="mx-auto text-center lead text-uppercase  mt-3">
            Próximamente se abrirá el plazo de inscripciones
            </p>          
          </div>    
          

        <?php   
        } ?>
      </div>

      
    </div>
  </section>



  <!-- Partidas Section -->
  <section class="page-section portfolio bg-primary " id="partidas">
    <div class="container">

      <!-- Partidas Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Partidas</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-dice"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

  
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <p class="lead text-white">
  
          <?php
          if (function_exists('mostrar_partidas')){
            mostrar_partidas(); 
          } ?>      
            
          </p>
  
        </div>
      </div>
    </div>
  </section>


  <!-- Ubicación Section -->
  <section class="page-section" id="ven-a-vernos">
    <div class="container">

      <!-- Ubicación Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">¿Dónde?</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-dice"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Ubicación Section Content -->
      <div class="row">
        

        <div class="col-lg-12 mx-auto">

          <h3 id="ccsaramago">Centro Cívico José Saramago</h3>
            <p class="lead">
            <span class="span-lead">Sábado 20 de Mayo de 9:30 a 20:30</span> en el Centro Cívico José Saramago de Leganés, Av. Mar Mediterráneo, 24, 28918 Leganés, Madrid.
            En el barrio de San Nicasio, cerca de la parada de metro de San Nicasio.
            </p>
            <a class="enlace-mapa" href="https://goo.gl/maps/uRTcjW1gVczFRCtY7" target="_blank" title="Ver Mapa">
              <img class="img-fluid" src="img/ubicacion/mapa-ubicacion-cc-jose-saramago-min.png" alt="Mapa Ubicación CC José Saramago">
            </a>                        
                              
        </div>
      </div>

    </div>
  </section>

  <?php
  endif; ?>


    <!-- Colaboradores -->
  <section class="page-section bg-primary" id="colaboradores">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Colaboradores</h2>

      <!-- Icon Divider -->
     <div class="divider-custom divider-light">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i class="fas fa-dice"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>

      <!-- Colaboradres Section Form -->
      <div class="row">        
        <div class="col-lg-12 mx-auto  text-white">
          <div class="d-flex align-items-center flex-wrap bg-primary p-3" >
            <style>
                .logos-colaboradores {
                  width: 100px;
                  object-fit: contain;
                  margin:  5px;
                }
              </style>

              <?php
              if (function_exists('get_colaboradores')){

                $colaboradores = get_colaboradores('2024'); 


                foreach ($colaboradores as $key => $colaborador) {
                  $title = $colaborador['title'];
                  $src = "img/colaboradores/{$colaborador['logo']}";
                  $alt = $colaborador['alt_logo'];
                  $url = $colaborador['url'];
                  $class = $colaborador['class'];
                  
                  ?>
                  <a href="<?php echo $url;?>" target="_blank" title="<?php echo $title;?>" rel="nofollow">
                    <img src="<?php echo $src; ?>" class="rounded bg-primary logos-colaboradores <?php echo $class; ?>" alt="<?php echo $alt; ?>">
                  </a>

                <?php 
                  
                }
              } ?>      

          

            
          </div>

        </div>
      </div>

    </div>
  </section> 


  <!-- Contact Section -->
  <section class="page-section " id="contacto">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Formas de Contacto</h2>

      <!-- Icon Divider -->
     <div class="divider-custom divider-secondary ">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i class="fas fa-dice"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>

      <!-- Contact Section Form -->
      <div class="row">        
        <div class="col-lg-10 mx-auto">
          <p class="lead">Aquí tienes nuestras redes sociales donde puedes seguirnos y pedir más información, pero lo mejor es que te pases 
          a conocernos y echar unas partidas ... recuerda, <span style="font-weight: bold;font-size:1.5em;">¡aquí jugamos todos!</span></p>
          <div class="row bg-white p-3" >
            <div class="col-lg-4 mx-auto ">

              <a class="btn btn-outline-secondary btn-social mx-1 mb-1" href="https://telegram.me/comunidadjueganess" target="_blank">
                <i class="fa-brands fa-telegram"></i>
              </a>
              @comunidadjueganess
              <br>

              <a class="btn btn-outline-secondary btn-social mx-1  mb-1" href="mailto:info@jueganess.org" target="_blank">
                <i class="fa-solid fa-envelope"></i>
              </a>
              info@jueganess.org
              <br>

              <a class="btn btn-outline-secondary btn-social mx-1  mb-1" href="https://www.instagram.com/jueganess" target="_blank">
                <i class="fa-brands fa-instagram"></i>
              </a>
              @jueganess
              <br>
            </div>
            <div class="col-lg-4 mx-auto ">
              <a class="btn btn-outline-secondary btn-social mx-1  mb-1" href="https://twitter.com/AJueganess" target="_blank">
                <i class="fab fa-fw fa-twitter"></i>
              </a>
              @ajueganess
              <br>

              <a class="btn btn-outline-secondary btn-social mx-1  mb-1" href="https://discord.gg/bRGvxYTsTE" target="_blank">
                <i class="fa-brands fa-discord"></i>
              </a>
              @Jueganess
              <br>

              <!--
              <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://www.facebook.com/AJueganess/" target="_blank">
                <i class="fab fa-fw fa-facebook"></i>
              </a>
              @Ajueganess-->
            </div>

        </div>
      </div>

    </div>
  </section> 

  <?php 
  pie(); ?>

<?php 
scripts(); ?>