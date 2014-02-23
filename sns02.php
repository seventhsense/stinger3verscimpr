
<?php if (is_home()) { ?>
<div id="snsbox">
  <div class="sns">
    <ul class="snsb clearfix">
      <li>
                <a class="sns-button twitter" href="https://twitter.com/share?url=<?php echo home_url(); ?>&amp;text=<?php bloginfo('name'); ?>" onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
                        <div class="share-num"><?php countTweetNum( home_url() ); ?></div>
                        <span class="kurage-icon" title="twitter">ツイート</span>
                </a>
     </li>
      <li>
                <a class="sns-button facebook" href="http://www.facebook.com/share.php?u=<?php echo home_url(); ?>" onclick="window.open(this.href, 'window', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
                        <div class="share-num"><?php countFbNum( home_url() ); ?></div>
                        <span class="kurage-icon" title="facebook">いいね！</span>
                </a>
      </li>
      <li> 
                <a class="sns-button hatebu" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo home_url(); ?>&amp;title=<?php bloginfo('name'); ?>" onclick="window.open(this.href, 'window', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
                        <div class="share-num"><?php countHatebuNum( home_url() ); ?></div>
                        <span class="kurage-icon" title="hatenabookmark">はてブ</span>
                </a>
      </li>


    </ul>
  </div>
</div>
<?php } else if (is_page()) { ?>
<?php } else { ?>
<div id="snsbox">
  <div class="sns">
    <ul class="snsb clearfix">
      <li>
                <a class="sns-button twitter" href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>" onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
                        <div class="share-num"><?php countTweetNum( get_permalink() ); ?></div>
                        <span class="kurage-icon" title="twitter">ツイート</span>
                </a>
     </li>
      <li>
                <a class="sns-button facebook" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" onclick="window.open(this.href, 'window', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
                        <div class="share-num"><?php countFbNum( get_permalink() ); ?></div>
                        <span class="kurage-icon" title="facebook">いいね！</span>
                </a>
      </li>
      <li> 
                <a class="sns-button hatebu" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" onclick="window.open(this.href, 'window', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
                        <div class="share-num"><?php countHatebuNum( get_permalink() ); ?></div>
                        <span class="kurage-icon" title="hatenabookmark">はてブ</span>
                </a>
      </li>
    </ul>
  </div>
</div>
<?php } ?>
