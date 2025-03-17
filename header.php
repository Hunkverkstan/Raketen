<!DOCTYPE html>
<html lang="sv">
<head>
    
<!-- Meta -->
<meta charset="utf-8">
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta name="twitter:card" content="summary" />
<meta name="author" content="Hunkverkstan">

<meta property="og:title" content="<?php echo get_bloginfo('name'); ?>">
<meta name="description" content="<?php the_field('website_description', 'option'); ?>">
<meta name="og:description" content="<?php the_field('website_description', 'option'); ?>">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/rekraketer_og.jpg" />
<meta name="twitter:title" content="<?php echo get_bloginfo('name'); ?>" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">


<!-- Mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#37dd7f">
<meta name="msapplication-TileColor" content="#37dd7f">
<meta name="theme-color" content="#37dd7f">

<!-- Header & Nav-->
<?php wp_head();?>
    
<div id="body-inner">

<svg id="svg1" data-name="svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 136.66 146.49"><defs></defs><path class="svg1" d="M144.2,54.3c15.2,16.6,31.1,31.2,33.9,48.5s-7.4,37.5-22.6,49.1-35.3,14.5-53.3,12.3-33.7-9.5-44.3-21.1-16-27.3-16-43.1,5.3-31.7,15.8-48.3,26.5-34,41.6-33.3S129.1,37.7,144.2,54.3Z" transform="translate(-41.9 -18.38)"/></svg>

<svg id="svg2" data-name="svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 136.66 146.49"><defs></defs><path class="svg2" d="M144.2,54.3c15.2,16.6,31.1,31.2,33.9,48.5s-7.4,37.5-22.6,49.1-35.3,14.5-53.3,12.3-33.7-9.5-44.3-21.1-16-27.3-16-43.1,5.3-31.7,15.8-48.3,26.5-34,41.6-33.3S129.1,37.7,144.2,54.3Z" transform="translate(-41.9 -18.38)"/></svg>

<?php if (is_404()): ?>
<?php else: ?>

<div id="nav-header">

<div id="nav-logo"></div>

  <label class="switch">
    <input type="checkbox" onclick="darkLight()" id="checkBox" >
    <span class="slider"></span>
  </label>
</div>

<div class="container">
<?php endif; ?>

</head>
<body>

