	<footer class="clearfix">
		<div class="container">
			<nav class="navbar">
            <?php 
                $args = array(
                    'theme_location'  => 'main-menu',
                    'container'       => 'div',
                    'container_class' => 'navbar-inner',
                    'menu_class'      => 'nav navbar-nav',
                    'menu_id'         => '',
                    'echo'            => true,
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );

                wp_nav_menu( $args );
            ?>
            </nav>
		    <p id="copyright">
		    	Copyright <?php echo date('Y'); ?> &copy; <strong><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></strong>. All Rights Reserved.</strong>
		    </p>
		</div>
    </footer><!-- End footer -->
</div><!-- End wrapper -->
 
</body>
</html>