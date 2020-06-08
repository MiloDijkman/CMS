<!DOCTYPE html>
<html>
<?php language_attributes() ?>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=devide-width, initial-scale=1.0">
  <meta name="author" content="Milo Dijkman">
  <title><?php bloginfo('name') ?></title>
  <?php wp_head(); ?>
</head>
<body>

<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name')?></a></h1>
