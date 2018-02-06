</div><!-- end content -->

<footer role="contentinfo">

    <div id="footer-content" class="center-div">
        <ul class="footer-links">
          <li> <a href="https://facartes.uniandes.edu.co" target="_blank" >Facultad de Artes y Humanidades</a> </li>
          <li> <a href="https://arte.uniandes.edu.co" target="_blank" >Departamento de Arte </a> </li>
          <li> <a href="https://registro.uniandes.edu.co/" target="_blank" >Admisiones y registro</a> </li>
          <li> <a href="https://eventos.uniandes.edu.co/" target="_blank" > Agenda </a> </li>
          <li> <a href="https://apoyofinanciero.uniandes.edu.co/index.php/es/" target="_blank" >Apoyo Financiero </a> </li>
          <li> <a href="https://biblioteca.uniandes.edu.co/index.php?lang=es" target="_blank" > Biblioteca </a> </li>
          <li> <a href="http://correo.uniandes.edu.co/" target="_blank" > Correo </a> </li>
          <li> <a href="https://secretariageneral.uniandes.edu.co/index.php/es/"  target="_blank" > Normas </a> </li>
          <li> <a href="https://uniandes.edu.co/egresado" target="_blank" > Egresados </a> </li>
          <li> <a href="https://planeacion.uniandes.edu.co/" target="_blank" > Planeación </a> </li>
          <li> <a href="https://sicuaplus.uniandes.edu.co/webapps/login/" target="_blank" > SICUA </a></li>
        </ul>
        <!--
        <ul class="footer-social">
          <li><i class="fa fa-facebook"></i></li>
        </ul>
        -->

        <ul class="footer-legal">
          <li>Universidad de los Andes | Vigilada MinEducación</li>
          <li> Reconocimiento como Universidad: Decreto 1297 del 30 de mayo de 1964. </li>
          <li> Reconocimiento personería jurídica: Resolución 28 del 23 de febrero de 1949 MinJusticia </li>
        </ul>

        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
        <?php endif; ?>

        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>

        <p id="powered_by"><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
        <p class="to_top" >
          <a href="#top-nav">Back to top</a>
        </p>

    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.skipNav();
    });
</script>

</body>

</html>
