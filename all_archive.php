<?php
/*
Template Name: all archives
 */
?>
<?php get_header(); ?>

<?php the_post() ?>
<h2 id="headding09"> <?php the_title(); ?></h2>
<?php the_content() ?>
<div id="search-box">
 <input id="search_query" type="text" name="">
<p>
適当に検索語をいれて絞り込んだらタブキーで移動するとはかどります
</p>
</div>
<ul id="all-archives">
  <?php wp_get_archives("type=postbypost"); ?>
</ul>

  <script type="text/javascript">
    jQuery(function(){
      jQuery('input#search_query').focus()
      jQuery('input#search_query').keyup(function(){
        var keyword = jQuery(this).val();
        jQuery('#all-archives li').each(function(){
          if (jQuery(this).text().match(new RegExp( keyword, 'i'))){
            jQuery(this).show();
          } else {
            jQuery(this).hide();
          }
        });
      });
    });
  </script>
<?php get_footer(); ?>
