    <footer class="main-footer">

      <?php //$defaults=array('theme_location'=>'footer_menu','menu_class'=>'nav-footer'); wp_nav_menu($defaults);?>

      <div class="main-footer__searchform"><?php get_search_form(); ?></div>

        <div class="main-footer__brand">

            <img src="<?php echo get_bloginfo('template_directory');?>/assets/img/logo_footer.svg" alt="logo">

            <!-- <h4 class="main-footer__brand__name">
            <?php //bloginfo('name'); ?>
            </h4> -->
            
            <div class="main-footer__credits">
          
                <aside rel="author"> 
                    <small>
                    <i class="icon-logo-mazizo"></i> <?php bloginfo('name'); ?> <?php echo date('Y'); ?>
                    </small>
                    <?php edit_post_link('&oplus; Editar ') ?>&sdot;
                    <?php wp_loginout(); ?>
                </aside>

            </div> 

        </div>

        <ul class="main-footer__list">

          <li><a href="https://twitter.com/nanosigegants" target="_blank" class="icon-twitter"></a>
          </li>
          <li><a href="https://www.facebook.com/pages/COLLA-DE-NANOS-I-GEGANTS-DE-VINARÒS/183606558388590" target="_blank" class="icon-facebook"></a>
          </li>
          <li><a href="https://www.flickr.com/photos/74835237@N02/" target="_blank" class="icon-flickr"></a>
          </li>
          <li><a href="https://www.youtube.com/user/nanosigegantsvinaros" target="_blank" class="icon-youtube"></a>
          </li>

        </ul>

    </footer>

    <?php wp_footer(); ?>

</body>
</html>