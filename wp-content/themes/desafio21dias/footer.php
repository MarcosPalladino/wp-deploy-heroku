<?php

/**
 * Tema construido no Desafio21Dias
 *
 * @link http://torneseumprogramador.com.br
 *
 * @package WordPress
 * @subpackage Desafio21Dias
 * @since Desafio21Dias
 */
$url = get_stylesheet_directory_uri();

?>
<!-- Footer-->
<footer class="footer text-center">
  <div class="container">
    <div class="row">
      <!-- Footer Location-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Localização</h4>
        <p class="lead mb-0">
          Brasil
          <br />
          São Paulo, SP
        </p>
      </div>
      <!-- Footer Social Icons-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Redes Sociais</h4>
        <a class="btn btn-outline-light btn-social mx-1" href="" target="_blank"><i
            class="fab fa-fw fa-facebook-f"></i></a>
        <a class="btn btn-outline-light btn-social mx-1" href="" target="_blank"><i
            class="fab fa-fw fa-twitter"></i></a>
        <a class="btn btn-outline-light btn-social mx-1" href="" target="_blank"><i
            class="fab fa-fw fa-linkedin-in"></i></a>
        <a class="btn btn-outline-light btn-social mx-1" href="" target="_blank"><i class="fab fa-github"></i></a>
      </div>
      <!-- Footer About Text-->
      <div class="col-lg-4">
        <h4 class="text-uppercase mb-4">Marcos Palladino</h4>
        <p class="lead mb-0">
          Desenvolvedor Web! Feito por
          <a href="#">Pallas</a>
          .
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
  <div class="container"><small>Copyright © PALLAS DEV 2020</small></div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
  <a class="js-scroll-trigger d-block text-center text-white rounded" href="<?php echo home_url(); ?>/#page-top"><i
      class="fa fa-chevron-up"></i></a>
</div>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="<?php echo $url; ?>/assets/mail/jqBootstrapValidation.js"></script>
<script src="<?php echo $url; ?>/assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="<?php echo $url; ?>/assets/js/scripts.js"></script>

<script>
$(document).ready(function() {
  $("#txtbusca").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tabHabilidades tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  $('#per_page').on('change', function() {
    document.forms['frmper_page'].submit();
  });

  $('#menu-menuprincipal > li > a').addClass('nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger');
});
</script>

</body>

</html>