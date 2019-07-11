    <footer>
        <?php
            $argc = array(
                'theme_location'=> 'header-menu',
                'container' => 'nav',
                'after' => '<span class="seperator">| </span>'
            );
            wp_nav_menu($argc);
        ?>

        <div class="location">
            <p>2323 Bay Avenue Mountain view, CA 132134234</p>
            <p>Phone Numebr: +8801744938010</p>
        </div>

        <p class="copyright">All rights reserved by Sazzad Bin Ashique <?php echo date('Y'); ?></p>
    </footer>
    
    <?php wp_footer(); ?>
    </body>
</html>