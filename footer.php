<!-- Content -->

<?php if (is_404()): ?>
<?php else: ?>

</div>
<div id="footer" class="bg4">
<img class="marg-small" src="<?php echo get_template_directory_uri(); ?>/img/rekraketer_logo_white.png">
<p id="footer-info" class="text2 marg-medium"><?php the_field('website_description', 'option'); ?></p>
<div class="marg-small">

<?php if( have_rows('website_links', 'options') ): ?>
<div class="button-grp">
<?php while( have_rows('website_links', 'options') ): the_row(); ?>
<a class="button bg1 text1" href="<?php the_sub_field('website_links_LINK'); ?>" target="_blank"><?php the_sub_field('website_links_TITLE'); ?></a>    
<?php endwhile; ?>
</div>
<?php endif; ?>

</div>
<div id="version" class="marg-small"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap marg-right primary"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg> Version 2.0</div>
<p class="text2 marg-no">Created by <a href="https://www.hunkverkstan.com" target="_blank">Hunkverkstan</a></p>    
<p class="text2">All rights reserved • <?php
$year = date('Y');
echo $year;
?>
</p>
</div>


<?php endif; ?>

<!-- Sidebar edit bar -->
<?php if( current_user_can('editor') || current_user_can('administrator') ) {  ?> 
<div id="sidebar-edit" class="float">
<a href="<?php echo get_home_url(); ?>/wp-admin"><p class="sidebar-edit-text">Till redigerarläget</p></a>
</div>
<?php } ?>
        
<!-- Footer & Scripts -->
<?php wp_footer(); ?>

</body>
</html>