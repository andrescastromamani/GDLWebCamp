<?php include_once 'includes/templates/header.php';?>

  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam modi maxime odio dignissimos, cum, laudantium velit numquam sapiente reiciendis, quasi reprehenderit culpa vitae repellat ullam doloremque dolor sunt exercitationem consectetur?</p>
  </section><!--Seccion conferencia-->

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="/img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2>Programa del Evento</h2>
            <nav class="menu-programa">
              <a href="#talleres"><i class="fas fa-code"></i> Talleres</a>
              <a href="#conferencias"><i class="fas fa-comment"></i> Conferencias</a>
              <a href="#seminarios"><i class="fas fa-university"></i> Seminarios</a>
            </nav>
            <div id="talleres" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Html5, Css y JavaScript</h3>
                <p><i class="fas fa-clock"></i> 20 hrs</p>
                <p><i class="fas fa-calendar"></i> 17 de Enero</p>
                <p><i class="fas fa-user"></i> Andrés Castro Mamani</p>
              </div>
              <div class="detalle-evento">
                <h3>Responsive Web Design</h3>
                <p><i class="fas fa-clock"></i> 22 hrs</p>
                <p><i class="fas fa-calendar"></i> 17 de Enero</p>
                <p><i class="fas fa-user"></i> Andrés Castro Mamani</p>
              </div>
              <a href="#" class="button float-rigth"> Ver Todos</a>
            </div>
            <div id="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Como ser Freelancer</h3>
                <p><i class="fas fa-clock"></i> 20 hrs</p>
                <p><i class="fas fa-calendar"></i> 17 de Enero</p>
                <p><i class="fas fa-user"></i> Gregorio Sanchez</p>
              </div>
              <div class="detalle-evento">
                <h3>Tecnologias del Futuro</h3>
                <p><i class="fas fa-clock"></i> 22 hrs</p>
                <p><i class="fas fa-calendar"></i> 17 de Enero</p>
                <p><i class="fas fa-user"></i> Susan Sanchez</p>
              </div>
              <a href="#" class="button float-rigth"> Ver Todos</a>
            </div>
            <div id="seminarios" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Diseño UI/UX para Moviles</h3>
                <p><i class="fas fa-clock"></i> 20 hrs</p>
                <p><i class="fas fa-calendar"></i> 17 de Enero</p>
                <p><i class="fas fa-user"></i> Harol Garcia</p>
              </div>
              <div class="detalle-evento">
                <h3>Aprende a Programar una manaña</h3>
                <p><i class="fas fa-clock"></i> 22 hrs</p>
                <p><i class="fas fa-calendar"></i> 17 de Enero</p>
                <p><i class="fas fa-user"></i> Harol Garcia</p>
              </div>
              <a href="#" class="button float-rigth"> Ver Todos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--Programa del evento-->

  <?php include_once 'includes/templates/invitados.php'; ?>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix" id="resumen-evento">
        <li><p class="numero">0</p> Invitados</li>
        <li><p class="numero">0</p> Talleres</li>
        <li><p class="numero">0</p> Días</li>
        <li><p class="numero">0</p> Conferencias</li>
      </ul>
    </div>
  </div><!--contador-->

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por Dia</h3>
            <p class="numero">$30</p>
            <ul>
              <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
              <li><i class="fas fa-check"></i>Todas las conferencias</li>
              <li><i class="fas fa-check"></i>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Todos los Dias</h3>
            <p class="numero">$50</p>
            <ul>
              <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
              <li><i class="fas fa-check"></i>Todas las conferencias</li>
              <li><i class="fas fa-check"></i>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 Dias</h3>
            <p class="numero">$45</p>
            <ul>
              <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
              <li><i class="fas fa-check"></i>Todas las conferencias</li>
              <li><i class="fas fa-check"></i>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section><!--Seccion de Precios-->

  <div id="map" class="map">

  </div><!--Mapa-->

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, vero odio accusantium animi nulla unde nisi saepe, non ab at exercitationem vitae esse cum sit atque. Alias animi quibusdam quo.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, vero odio accusantium animi nulla unde nisi saepe, non ab at exercitationem vitae esse cum sit atque. Alias animi quibusdam quo.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, vero odio accusantium animi nulla unde nisi saepe, non ab at exercitationem vitae esse cum sit atque. Alias animi quibusdam quo.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
    </div>
  </section><!--Testimoniales-->

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Registrate al newsletter:</p>
      <h3>GdlWebCamp</h3>
      <a href="#" class="button transparente">Registro</a>
    </div>
  </div><!--Seccion Newsletter-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p>dias</li>
        <li><p id="horas" class="numero"></p>horas</li>
        <li><p id="minutos" class="numero"></p>minutos</li>
        <li><p id="segundos" class="numero"></p>segundos</li>
      </ul>
    </div>
  </section><!--Cuenta regresiva-->

<?php include_once 'includes/templates/footer.php';?>

