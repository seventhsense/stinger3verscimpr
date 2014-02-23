<?php
/*
Template Name: all archives
 */
?>
<?php get_header(); ?>

<?php the_post() ?>
<?php the_title(); ?>
<?php the_content() ?>
<?php wp_get_archives("type=postbypost"); ?>

<?php get_footer(); ?>
