  <footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-informacion">
        <h3>Sobre <span>GdlWebCamp</span></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam veritatis, libero nihil dolore voluptate blanditiis unde repudiandae quae voluptatum iure non, vitae commodi fugit reprehenderit enim illo, dolor eum? Nostrum?</p>
      </div>
      <div class="ultimos-tweets">
        <h3>últimos <span>tweets</span></h3>
        <ul>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe veniam assumenda, qui recusandae laudantium a @acm. </li>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic fugit ad recusandae quam blanditiis. At explicabo esse voluptas, ea repudiandae sequi. Vero adipisci @officiis tempore neque harum deleniti distinctio repudiandae!</li>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem error temporibus, dolore, blanditiis quibusdam quas natus saepe repellendus sunt ipsum similique repellat @beatae non inventore aut dolor provident necessitatibus.</li>
        </ul>
      </div>
      <div class="menu">
        <h3>Redes <span>Sociales</span></h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
      </div>
    </div>
    <p class="copyright">Todos los Derechos Reservados GDLWEBCAMP 2021 &copy;</p>
    <!-- Begin Mailchimp Signup Form -->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
      /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
        We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style>
      <div style="display:none;">
      <div id="mc_embed_signup">
      <form action="https://gmail.us7.list-manage.com/subscribe/post?u=38db08a207be839a995b53b05&amp;id=998cffe0f2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
        <h2>Suscribete a nuestro Newsletter</h2>
      <div class="indicates-required"><span class="asterisk">*</span> obligatorio</div>
      <div class="mc-field-group">
        <label for="mce-EMAIL">Correo Electronico  <span class="asterisk">*</span>
      </label>
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
      </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_38db08a207be839a995b53b05_998cffe0f2" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
      </form>
      </div>
    </div>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    <!--End mc_embed_signup-->
  </footer>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php","",$archivo);
    if($pagina == 'invitados' || $pagina == 'index'){
      echo  '<script src="js/jquery.colorbox-min.js"></script>';
    }else if($pagina == 'conferencia'){
      echo '<script src="js/lightbox.js"></script>';
    }
  ?>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/38db08a207be839a995b53b05/92c88ce1435ea1c0cbe30ebb9.js");</script>
</body>

</html>