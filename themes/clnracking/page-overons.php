<?php 
/*
  Template Name: Overons
*/
get_header();
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>
<section class="cr-mission-two-grid-sec-wrp">
  <div class="container">
    <?php
      $showhideintro = get_field('showhideintro', $thisID);
      if( $showhideintro ):
        $introsec = get_field('introsec', $thisID);
        $introdes = $introsec['beschrijving'];
    ?>
    <div class="row">
      <div class="col-md-12">
        <div class="cr-mission-two-grid-wrp clearfix">
          <div class="cr-mission-two-grid-img-rgt order-2">
            <?php if(!empty($introsec['afbeelding'])):
            $deshoversrc = cbv_get_image_src($introsec['afbeelding'], 'overonsintro'); ?>
            <div class="cr-mission-two-grid-img" style="background: url(<?php echo $deshoversrc; ?>);"></div>
            <?php endif; ?>
          </div>
          <div class="cr-mission-two-grid-lft order-1">
            <div class="mission-statement-sec-des">
              <h2 class="mssd-title-parent">
                <?php 
                if( !empty($introsec['subtitel']) ) printf('<span class="mssd-title-1">%s</span>', $introsec['subtitel']);
                if( !empty($introsec['titel']) ) printf('<strong class="mssd-title-2">%s</strong>', $introsec['titel']);
                ?>
              </h2>
              <?php if( !empty($introdes) ): ?>
              <ul class="reset-list">
                <?php foreach( $introdes as $introde ): ?>
                <li>
                  <div>
                  <?php 
                  if( !empty($introde['titel']) ) printf('<strong>%s</strong>', $introde['titel']);
                  if( !empty($introde['beschrijving']) ) echo wpautop( $introde['beschrijving'] );
                  ?>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php
      $showhiderating = get_field('showhiderating', $thisID);
      if( $showhiderating ):
        $ratings = get_field('ratings', $thisID);
    ?>
    <div class="row">
      <div class="col-sm-12">
        <?php if( $ratings ): ?>
        <div class="cr-service-wrp clearfix">
          <?php foreach( $ratings as $rating ): ?>
          <div class="cr-service-item  mHc">
            <div class="cr-service-dsc">
              <i>
                <svg class="star-white-icon-svg" width="45" height="45" viewBox="0 0 45 45" fill="#ffffff">
                  <use xlink:href="#star-white-icon-svg"></use>
                </svg> 
                </i>
              <?php 
                if( !empty($rating['titel']) ) printf('<h5 class="cr-service-dsc-title">%s</h5>', $rating['titel']);
                if( !empty($rating['beschrijving']) ) echo wpautop( $rating['beschrijving'] );
              ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>
    <?php
      $showhideintro2 = get_field('showhideintro2', $thisID);
      if( $showhideintro2 ):
        $introt = get_field('intro2', $thisID);
        $inleft = $introt['lefts'];
        $inright = $introt['rights'];
    ?>
    <div class="row">
      <div class="col-sm-12">
        <div class="cr-fancy-slider-wrp clearfix">
          <div class="cr-fancy-slider-img">

            <div class="cr-fancy-slider">
              <?php 
                $galerij = $inleft['galerij'];
                $vposter = $inleft['video_poster'];
                $vurl = $inleft['video_url'];
                if( !empty($vposter) ):   
              ?>
              <div class="cr-fancy-slide-item">
                <div class="cr-fancy-slide-item-img">
                  <?php if( !empty($vurl) ): ?>
                  <a data-fancybox href="<?php echo $vurl; ?>">
                    <?php echo cbv_get_image_tag($vposter, 'gallery'); ?>
                    <span>
                      <i>
                        <svg class="play-icon-white-svg" width="65" height="65" viewBox="0 0 65 65" fill="#ffffff">
                          <use xlink:href="#play-icon-white-svg"></use>
                        </svg> 
                      </i>
                    </span>
                    <em>
                      <svg class="vdo-capter-icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="#ffffff">
                        <use xlink:href="#vdo-capter-icon-svg"></use>
                      </svg>
                    </em>
                    </a>
                    <?php else: ?>
                      <?php echo cbv_get_image_tag($vposter, 'gallery'); ?>
                    <?php endif; ?>
                </div>
              </div>
              <?php endif; ?>
            </div>
            <div class="cr-fancy-slider-pagi clearfix">
              <?php if( $galerij ): ?>
              <?php foreach( $galerij as $galeri ): ?>
              <div class="cr-fancy-slide-pagi-item">
                <div class="cr-fancy-slide-pagi-item-img">
                  <?php echo cbv_get_image_tag($galeri['id'], 'galleryThumb'); ?>
                </div>
              </div>
               <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="cr-fancy-dsc-rgt">
            <div class="cr-fancy-dsc">
            <?php
              if( !empty($inright['titel']) ) printf('<h2 class="cr-fancy-title">%s</h2>', $inright['titel']);
              if( !empty($inright['subtitel']) ) printf('<span>%s</span>', $inright['subtitel']);
              if( !empty($inright['beschrijving']) ) echo wpautop( $inright['beschrijving'] );
              $knop1 = $inright['knop'];
              if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
                  printf('<a class="cr-fancy-dsc-btn" href="%s" target="%s">%s</a>', $knop1['url'], $knop1['target'], $knop1['title']); 
              }
            ?> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>    
</section>
<?php
  $showhideintro_diensten = get_field('showhideintro_diensten', $thisID);
  if( $showhideintro_diensten ):
    $ddiensten = get_field('ddiensten', $thisID);
?>
<section class="cr-diensten-head-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="cr-diensten-head">
          <?php
            if( !empty($ddiensten['titel']) ) printf('<h2 class="cr-diensten-title">%s</h2>', $ddiensten['titel']);
            if( !empty($ddiensten['beschrijving']) ) echo wpautop( $ddiensten['beschrijving'] );
            $knop2 = $ddiensten['knop'];
            if( is_array( $knop2 ) &&  !empty( $knop2['url'] ) ){
                printf('<a href="%s" target="%s">%s</a>', $knop2['url'], $knop2['target'], $knop2['title']); 
            }
          ?> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="cr-blockcode-sec-wrp">
  <div class="container">
    <?php
      $showhideintro_quotes = get_field('showhideintro_quotes', $thisID);
      if( $showhideintro_quotes ):
        $getuigenis = get_field('getuigenis', $thisID);
        $memQuery = new WP_Query(array(
          'post_type' => 'getuigenissen',
          'posts_per_page'=> -1,
          'post__in' => $getuigenis
        ));
        if( $memQuery->have_posts() ):
    ?>
    <div class="row">
      <div class="col-sm-12">
        <div class="cr-blockcode-wrp">
          <div class="crblockcodearrows">
            <span class="leftArrow">
              <i>
                <svg class="left-arrow-iocn-svg" width="30" height="26" viewBox="0 0 30 26" fill="#fff">
                  <use xlink:href="#left-arrow-iocn-svg"></use>
                </svg> 
              </i>
            </span>
            <span class="rightArrow">
              <i>
                <svg class="right-arrow-iocn-svg" width="30" height="26" viewBox="0 0 30 26" fill="#fff">
                  <use xlink:href="#right-arrow-iocn-svg"></use>
                </svg> 
              </i>
            </span>
          </div>
          <div class="cr-blockcode-slider">
            <?php 
              while($memQuery->have_posts()): $memQuery->the_post();
              $tcontent = get_the_content();
              $tname = get_field('naam', get_the_ID());
              $tposit = get_field('positie', get_the_ID()); 
            ?>
            <div class="cr-blockcode-slide-item">
              <div class="cr-blockcode-slide-item-dsc">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/blockcode-icon.svg"></i>
                <blockquote><?php echo $tcontent; ?></blockquote>
                <?php printf('<h5 class="cr-blockcode-title">%s, %s</h5>', $tname, $tposit); ?>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; wp_reset_postdata(); endif; ?>
    <?php
      $showhideintrointro3 = get_field('showhideintrointro3', $thisID);
      if( $showhideintrointro3 ):
        $introsecs3 = get_field('introsec3', $thisID);
    ?>
    <div class="row">
      <div class="col-md-12">
        <?php if( $introsecs3 ): ?>
        <div class="floating-grds">
          <?php 
          $i = 1;
          $addClass = '';
          foreach( $introsecs3 as $introsec3 ): 
          ?>
          <div class="floating-grd-row<?php if($i % 2 != 0){ echo ' floating-grd-row-order-change'; } ?> clearfix">
            <div class="floating-grd-row-fea-img-cntrl mHc">
              <?php if( !empty($introsec3['afbeelding']) ): $gridsrc = cbv_get_image_src($introsec3['afbeelding']); ?>
              <div class="floating-grd-row-fea-img" style="background: url(<?php echo $gridsrc; ?>);"></div>
            <?php endif; ?>
            </div>
            <div class="floating-grd-row-des mHc">
              <?php
                if( !empty($introsec3['titel']) ) printf('<h4 class="floating-grd-row-des-title">%s</h2>', $introsec3['titel']);
                if( !empty($introsec3['beschrijving']) ) echo wpautop( $introsec3['beschrijving'] );
              ?>
            </div>
          </div>
          <?php $i++; endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php
get_footer(); 
?>