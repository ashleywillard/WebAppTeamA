
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
  <?php do_action('get_header'); ?>
  <?php get_template_part('templates/header'); ?>

 	<main class="main <?php echo dw_timeline_main_class(); ?>">

        <?php include dw_timeline_template_path(); ?>
      </main>
  <?php get_template_part('templates/footer'); ?>
</body>
</html>



