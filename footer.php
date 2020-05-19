
<?php wp_footer(); ?>

<footer class="site-footer">
    <nav class="footer-menu-wide" id="nav">
            <?php
                 wp_nav_menu(array(
                            'theme_location' => 'footerMenuLocation'
                        ));
                    ?>   
       </nav>
</body>
  </footer>
</html>
