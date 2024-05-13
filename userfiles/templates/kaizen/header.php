<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" <?php print lang_attributes(); ?>>

<head>

  <title>{content_meta_title}</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta property="og:title" content="{content_meta_title}" />
  <meta name="keywords" content="{content_meta_keywords}" />
  <meta name="description" content="{content_meta_description}" />
  <meta property="og:type" content="{og_type}" />
  <meta property="og:url" content="{content_url}" />
  <meta property="og:image" content="{content_image}" />
  <meta property="og:description" content="{og_description}" />
  <meta property="og:site_name" content="{og_site_name}" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&amp;display=swap" as="style" onload="this.onload = null; this.rel = 'stylesheet';" />
  <link rel="stylesheet" href="<?php print template_url(); ?>/assets/css/style.css" />
  <link rel="stylesheet" href="<?php print template_url(); ?>/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php print template_url(); ?>/assets/css/owl.theme.default.min.css">
  <script>
    mw.require('icon_selector.js');
    mw.lib.require('bootstrap5js');
    mw.lib.require('bootstrap_select');

    mw.iconLoader().addIconSet('materialDesignIcons')
      .addIconSet('fontAwesome')
      .addIconSet('iconsMindLine')
      .addIconSet('iconsMindSolid')
      .addIconSet('mwIcons')
      .addIconSet('materialIcons');
  </script>

  <script>
    $(document).ready(function() {
      $('.selectpicker').selectpicker();
    });
  </script>

  <?php print get_template_stylesheet(); ?>



  <?php include('template_settings.php'); ?>
  <script src="<?php print template_url(); ?>assets/js/owl.carousel.min.js"></script>
</head>