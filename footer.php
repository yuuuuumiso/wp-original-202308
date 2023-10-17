








  <div id="footermenu">
    <ul>
      <li class="title">メニュー見出し Left</li>
        <?php
        $footNavLeft = array(
          'container'       => false,
          'theme_location'  => 'footer-navigation',
        );
        wp_nav_menu( $footNavLeft );
        ?>
    </ul>
    <ul>
      <li class="title">メニュー見出し Center</li>
        <?php
        $footNavCenter = array(
          'menu_id'         => 'footer-navi',
          'menu_class'      => 'footer-navi',
          'container'       => false,
          'theme_location'  => 'footer-navi',
        );
        wp_nav_menu( $footNavCenter );
        ?>
    </ul>
    <aside id="foot-widget">
        <?php dynamic_sidebar('footer_widget01'); ?>
    </aside>
  </div>
  <footer>
    <small>Copyright© <a href="index.html">サンプル派遣会社</a> All Rights Reserved.</small>
    <span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
  </footer>

      <div class="head__btn db" id="menubar_hdr">
        <span></span><span></span><span></span>
      </div>

<div class="pagetop" style=""><a href="#"><i class="fas fa-angle-double-up"></i></a></div>

  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview_set.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
  <?php wp_footer();?>
</body>
</html>


