<!-- Content -->

<div class="row">

<?php if( have_rows('content') ): ?>

<?php while ( have_rows('content') ) : the_row();

if( get_row_layout() == 'content_stats' ): ?>
    
<!-- Statistik sedan start -->       
<?php include ('templates/template_stats.php'); ?>

<?php elseif( get_row_layout() == 'content_bets' ): ?>

<!-- Levande spel -->          
<?php include ('templates/template_bets.php'); ?>

<?php elseif( get_row_layout() == 'content_cta' ): ?>

<!-- CTA:s -->          
<?php include ('templates/template_cta.php'); ?>

<?php elseif( get_row_layout() == 'content_year' ): ?>

<!-- Statistik per år -->          
<?php include ('templates/template_years.php'); ?>

<?php endif; endwhile; endif; ?>

</div>