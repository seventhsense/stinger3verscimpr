<div id="side">
  <div class="sidead">
<?php if(is_mobile()) { ?>
<?php } else { ?>
<?php get_template_part('ad');?>
<?php } ?>
  </div>
    <div id="twibox">
      <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
      <?php endif; ?>
    </div>
  </div>
  <!--/kizi--> 
  <!--アドセンス-->
  <div id="ad1">
    <div style="text-align:center;">
      <?php get_template_part('scroll-ad');?>
    </div>
  </div>
</div>
<!-- /#side -->
