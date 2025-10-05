<div class="segment-block text1 bg1 marg-medium"><h3>Yearly stats</h3></div>
<div class="flex marg-large">


<div class="history-container bg3">
  <h3 class="text2 marg-small"><span class="primary">•</span> Stats for <?php echo date('Y'); ?><span class="history-current bg1 text2"><i class="primary marg-right" data-feather="activity"></i> Ongoing!</span></h3>
  <hr>
  <div class="history-roi"><h3 class="text2">ROI<span class="history-separator secondary">•</span><span class="history-number text1"><?php echo do_shortcode('[get_sheet_value location="Nuvarande!D4"]'); ?></span></h3></div>
  <div class="history-wallet"><h3 class="text2">Result<span class="history-separator fourth">•</span><span class="history-number text1"><?php echo do_shortcode('[get_sheet_value location="Nuvarande!E4"]'); ?></span></h3></div>
  <div class="history-games"><h3 class="text2">Bets<span class="history-separator third">•</span><span class="history-number text1"><?php echo do_shortcode('[get_sheet_value location="Nuvarande!F4"]'); ?> st</span></h3></div>
  <div class="history-wins"><h3 class="text2">Wins<span class="history-separator primary">•</span><span class="history-number text1"><?php echo do_shortcode('[get_sheet_value location="Nuvarande!G4"]'); ?></span></h3></div>
</div>


<?php if( have_rows('content_year_info') ): ?>
<?php while( have_rows('content_year_info') ): the_row(); ?>

<div class="history-container bg3">
  <h3 class="text2"><span class="primary">•</span> Stats for <?php the_sub_field('content_year_info_YEAR'); ?><div class="float-right"><div class="year-stats-box"><span class="year-stats text4">Show</span> <span class="stats-plus text4"><i data-feather="plus-circle"></i></span><span class="stats-minus text4"><i data-feather="minus-circle"></i></span></div></div></h3>
  <div class="year-stats-info">
    <hr class="marg-up-small">
    <div class="history-roi"><h3 class="text2">ROI<span class="history-separator secondary">•</span><span class="history-number text1"><?php the_sub_field('content_year_info_ROI'); ?>%</span></h3></div>
    <div class="history-wallet"><h3 class="text2">Result<span class="history-separator fourth">•</span><span class="history-number text1"><?php the_sub_field('content_year_info_WALLET'); ?>u</span></h3></div>
    <div class="history-games"><h3 class="text2">Bets<span class="history-separator third">•</span><span class="history-number text1"><?php the_sub_field('content_year_info_BETS'); ?> st</span></h3></div>
    <div class="history-wins"><h3 class="text2">Wins<span class="history-separator primary">•</span><span class="history-number text1"><?php the_sub_field('content_year_info_WINS'); ?>%</span></h3></div>
  </div>
</div>

<?php endwhile; ?>
<?php endif; ?>

</div>
