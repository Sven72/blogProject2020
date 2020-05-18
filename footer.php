
<?php wp_footer(); ?>

<footer class="site-footer">
    <nav class="header-menu-wide" id="nav">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu'
                ));
                    ?>   
                    <!-- <a class="open" id="menu-btn"  href="#">&#9776;</a> -->
       </nav>
  <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footerMenuLocation'
                        ));
                    ?>
                   
</body>
  </footer>
</html>
