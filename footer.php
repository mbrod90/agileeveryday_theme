   <div class="footer-clear"></div>

   <footer class="row no-max pad">
       <!-- <div>
<a href="[full link to your Twitter]">
<img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter1.png" width="35" height="35" />
</a>
<a href="[full link to your LinkedIn]">
<img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin1.png" width="35" height="35" />
</a>
<a href="[full link to your Facebook page]">
<img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook1.png" width="35" height="35" />
</a>
<a href="pinterestaddress">
<img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest1.png" width="35" height="35" />
</a>
</div> -->
<?php
      $footer = array(
        'container' => false,
        'theme_location' => 'footer-menu',
        'menu_class' => 'social-links no-bullet'
        );

      wp_nav_menu( $footer );
      ?>
    <p>Copyright <?php echo date('Y'); ?> Marina Brodskaya</p>
  </footer>

  <?php wp_footer(); ?>
<script type="text/javascript">
var infolinks_pid = 3021248;
var infolinks_wsid = 0;
</script>
<script type="text/javascript" src="http://resources.infolinks.com/js/infolinks_main.js"></script>

  </body>
</html>