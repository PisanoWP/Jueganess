<?php 
include_once 'includes/jueganess.php'; 
include_once 'includes/actividades.php'; 
?>

<?php
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
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="#">II Jornadas</a>
          </li>
                    

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#horario">Horario</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#inscripciones">Inscripciones</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#partidas">Partidas</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contacto">Contacto</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <?php 
      // La actividad destacada, por defecto, SIEMPRE será la última que se cree
      // la questa en la posición 0
      $rutaImagenes ='img/actividades/';
      $actividades = get_actividades(); 
      $act = $actividades['jornada2023'];
      
      
      $act = array('id' => 'jor23'
      , 'title' => 'II JORNADAS JUEGANESS 2023'
      , 'content' => 'LAS INSCRIPCIONES SE ABRIRÁN PRÓXIMAMENTE'
      , 'cartel' => 'cartel-ii-jornadas-juegannes-2023.jpg'
      , 'alt_cartel' => 'Cartel de las II jornadas de Jueganess de 2023'
        );
      
      ?>

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

  <!-- II Jornadas -->
  <section class="page-section mb-0" id="ii_jornadas">
    <div class="container">

      <!-- About Section Heading -->
      
      <h2 class="page-section-heading text-center text-uppercase text-secondary">Jornadas Jueganess II</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-dice"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      

      <div class="row">
        <div class="col-md-12 ml-auto">
          <h3>El centro José Saramago será la sede de este evento lleno de actividades lúdicas el próximo 20 de mayo</h3>          
        </div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-md-12 ml-auto">          
          <p class="lead" >
            El próximo <span style="font-weight: bold;">20 de mayo</span> tendrán lugar las <span style="font-weight: bold;">Jornadas Jueganess II</span>, organizadas por la Asociación Jueganess, que traerán a nuestra ciudad lo mejor del ocio alternativo. El lugar de esta celebración es el emblemático centro cívico José Saramago, espacio que se llenará de actividades lúdicas para niños, jóvenes y adultos. 
          </p>
          <p class="lead" >
            La apertura de puertas está prevista a las 9:30 y, desde ese primer momento, los visitantes podrán disfrutar de demostraciones y partidas de rol, juegos de mesa, rol en vivo, Torneo de Blood Bowl 7 y más actividades aún por confirmar. El horario estimado es de 9:30 a 21:00, con una pausa para comer entre las 14:00 y las 16:00. 
          </p>
          <p class="lead" >
            Colaboran entidades y empresas locales como son <i>DeJovenes</i>, el Ayuntamiento de Leganés y la tienda <i>El Señor Miyagi</i>, entre otras. También participan asociaciones y empresas de todo Madrid como <i>Generación X Getafe</i>, </i>Asociación eter</i> y <i>Madrid By Night</i>.
          </p>
          <p class="lead" >
            Otros importantes colaboradores son empresas y editoriales relacionadas con los juegos de rol y juegos de mesa. Entre ellas, nombres tan conocidos dentro del mundo lúdico como son: <span style="font-weight: bold;">Nosolorol, Falomir Juegos, Con pluma y píxel, Suseya Ediciones, El Refugio de Ryhope, Rocket Lemon Games, HT Publisher, Draco Ideas, Eclipse Editorial, GDM…</span>
          </p>
          <p class="lead" >También contaremos con <a href="https://www.instagram.com/bambinomonkey/" target="_blank" rel="nofollow" >Bambinomonkey</a>, publicista e ilustrador, que estara firmando <span style="font-weight: bold;">Rabbitz & Robots </span> de 12:00 a 13:00 y de 18:00 a 19:00.</p>

          <p class="lead" >Contaremos con otras ilustradoras de Leganés y alrededores como Patcas Ilustration y LidiaMG.</p>          

          <!--
          <p class="lead" >La gente de <a href="https://dracoideas.com/editorial/ven-a-jugar-con-nosotros-a-jueganess/">Dracoideas</a> también estarán presentando sus últimas novedades y probando algunos de sus juegos durante todo el día, 
          no pierdas la oportunidad de probar <i>Saladin</i>, <i>Furia en Midway</i>, <i>ONUS! Traianus</i> o <i>SCOPE U-boot</i>. </p>          -->

          <p class="lead" > Tendremos a Eduardo, autor de Ratland, probando con vosotros la nueva expansión. ¡Nuevas aventuras para las ratas más gamberras!, y traéte tu copia para que te la lleves firmada.</p>          

          

        </div>

      
        
        
      </div>

      
    </div>
  </section>

  
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
      Las Jornadas Jueganess II se celebrarán el 20 de mayo de 2023. Horario: 9:30 a 21:00h.
      </h3>
      

      <p class="lead text-white mt-3">
      <u><span style="font-weight: bold;">Ludoteca.</span> 9:30-20:30:</u><br> La Asociación Jueganess ha ido adquiriendo una completa ludoteca llena de juegos para todos los públicos. Durante el evento, los asistentes podrán disfrutar probando y jugando a juegos tan diferentes como Ciudadelas, Juego de Tronos: La Mano del Rey, Black Stories…
      </p>
      <p class="lead text-white">
      <u><span style="font-weight: bold;">Mesa de Prototipos.</span> 9:30-20:30:</u><br>  Los visitantes a estas jornadas podrán conocer y disfrutar prototipos de juegos que aún no están en venta y descubrir el futuro del mercado de la mano de la asociación LUDO.
      </p>
      <p class="lead text-white">
      <u><span style="font-weight: bold;">Partidas de rol.</span> 9:30-20:30:</u><br>  Para los fanáticos de las aventuras narrativas, se han organizado más de veinte partidas, divididas en turnos de mañana y tarde. Los asistentes se podrán apuntar a partidas de Savage World, Pathfinder, Blades in the Dark… <br>
      <a href="#partidas">Abriremos inscripciones</a> para todos aquellos que quieran participar . 
      </p>
      <p class="lead text-white">
      <u><span style="font-weight: bold;">Torneo ( 10:00-14:00 ) y Demostración  (Por la tarde) de Blood Bowl 7.</span>:</u> <br>  Los que buscan juegos de estrategia en tablero, también están de enhorabuena, pues habrá demostraciones de Blood Bowl 7 para quién quiera aprender. También se celebrará un Torneo para los que dispongan de su propio equipo y tengan ganas de ganar suculentos premios
      </P>
      <p class="lead text-white">
      <u><span style="font-weight: bold;">Ceremonia de clausura.</span>20:15: </u><br>  Las Jornadas Jueganes II se despedirán por todo lo alto con un acto de despedida, llena de sorteos y regalos para los participantes y colaboradores. 
      </P>
  

     
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

                $colaboradores = get_colaboradores(); 


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

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Ven a Conocernos</h4>
          <p class="lead mb-0 text-justify"><b>CC Rigobeta Menchú</b>
            <br>Av. Rey Juan Carlos I, 100. Leganés
            <br>Sábados 10:00 a 14:00 y 16:00 a 21:00
          </p>
          <hr style="border: 1px solid white;">
          <p class="lead mb-0 text-justify"><b>CC José Saramago</b>
            <br>Av. Mar Mediterráneo, 24. Leganés
            <br>Domingos 10:00 a 14:00
          </p>

        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Más Información</h4>
          
          
          <div class="text-justify">
          <!--
          <a class="btn btn-outline-light btn-social mx-1 mb-1" href="#">
            <i class="fa-brands fa-whatsapp"></i> 
          </a>
          670 05 28 70 / 692 82 72 06
          <br> -->
          <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://telegram.me/comunidadjueganess" target="_blank">
            <i class="fa-brands fa-telegram"></i>
          </a>
          @comunidadjueganess
          <br>

          <a class="btn btn-outline-light btn-social mx-1  mb-1" href="mailto:info@jueganess.org" target="_blank">
            <i class="fa-solid fa-envelope"></i>
          </a>
          info@jueganess.org
          <br>

          <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://www.instagram.com/jueganess" target="_blank">
            <i class="fa-brands fa-instagram"></i>
          </a>
          @jueganess
          <br>
          <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://twitter.com/AJueganess" target="_blank">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          @ajueganess
          <br>

          <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://discord.gg/bRGvxYTsTE" target="_blank">
            <i class="fa-brands fa-discord"></i>
          </a>
          @Jueganess
          <br>

          <!--
          <a class="btn btn-outline-light btn-social mx-1  mb-1" href="https://www.facebook.com/AJueganess/" target="_blank">
            <i class="fab fa-fw fa-facebook"></i>
          </a>
          @Ajueganess -->
          
          
          
          
          </div>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Aquí Jugamos Todos</h4>
          <p class="lead mb-0">
            <img style="width: 100%" src="img/tira-dados-jueganess.jpg" alt="Imagen de una banadeja para tirar dados con el logo de jueganess">

          </p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Jueganess 2022</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

    


<?php 
pie(); ?>
