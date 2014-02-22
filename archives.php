<?php
/*
Template Name: archives
*/
?>
<?php get_header() ?>
   <div id="container">
      <div id="content">
         <?php the_post() ?>
         <h2 class="page-title"><?php the_title(); ?></h2>
         <div class="entry-content">
         <?php the_content() ?>
         // 全記事表示
         <?php wp_get_archives("type=postbypost");?>
         </div>
      </div><!-- #content -->
   </div><!-- #container -->
<?php get_sidebar() ?>
<?php get_footer() ?>
