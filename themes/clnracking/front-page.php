<?php get_header(); ?>
<?php  
  $hslides = get_field('slider', HOMEID);
  if($hslides):
?>
<section class="home-slider-bnr">
  <div class="main-slider mainSlider" id="mainSlider">
    <?php
      foreach( $hslides as $hslide ): 
      $slideposter = !empty($hslide['afbeelding'])? cbv_get_image_src($hslide['afbeelding']): '';
    ?>
    <div class="main-slide-item" style="background: url('<?php echo $slideposter; ?>');">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="main-slide-item-des">
              <?php
                if( !empty($hslide['sub_titel']) ) printf('<span class="main-slide-item-des-title-1">%s</span>', $hslide['sub_titel']);
                if( !empty($hslide['titel']) ) printf('<strong class="main-slide-item-des-title-2">%s</strong>', $hslide['titel']);
                if( !empty($hslide['beschrijving']) ) echo wpautop( $hslide['beschrijving'] );
              ?>
              <div class="main-slide-title-btn">
                <div>
                  <?php if( !empty($hslide['in_de_kijker_titel']) ) printf('<span>%s</span>', $hslide['in_de_kijker_titel']);

                  $knop = $hslide['in_de_kijker_knop'];
                  if( is_array( $knop ) &&  !empty( $knop['url'] ) ){
                      printf('<a href="%s" target="%s">%s<i>
                      <svg class="btn-rgt-arrow-icon-svg" width="18" height="16" viewBox="0 0 18 16" fill="#ffffff">
                        <use xlink:href="#btn-rgt-arrow-icon-svg"></use>
                      </svg> 
                    </i></a>', $knop['url'], $knop['target'], $knop['title']); 
                  }
                  ?>
                </div>
              </div>
              <div class="main-slide-btns">
                <?php 
                  $knop1 = $hslide['knop_1'];
                  $knop2 = $hslide['knop_2'];
                  if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
                      printf('<div class="main-slide-btn-1"><a href="%s" target="%s">%s</a></div>', $knop1['url'], $knop1['target'], $knop1['title']); 
                  }
                  if( is_array( $knop2 ) &&  !empty( $knop2['url'] ) ){
                      printf('<div class="main-slide-btn-2"><a href="%s" target="%s">%s</a></div>', $knop2['url'], $knop2['target'], $knop2['title']); 
                  } 
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>   
</section>
<?php endif; ?>
<?php
  $showhide_usps = get_field('showhide_usps', HOMEID);
  if( $showhide_usps ):
    $usps = get_field('usps', HOMEID);
?>
<section class="star-section-wrap">
  <div class="container-lg">
      <div class="row">
        <div class="col-md-12">
          <?php if( $usps ): ?>
          <div class="star-section-grds">
            <div class="star-section-grds-row starSecGrdsRowSlider" id="starSecGrdsRowSlider">
              <?php foreach( $usps as $usp ): ?>
              <div class="star-sec-grd-col">
                <div class="star-sec-grd-item mHc">
                  <?php 
                  if( !empty($usp['icon'])){
                  ?>
                  <i>
                    <?php echo cbv_get_image_tag($usp['icon']); ?>
                  </i>
                  <?php } ?>
                <?php 
                  if( !empty($usp['titel']) ) printf('<strong class="star-sec-title">%s</strong>', $usp['titel']);
                  if( !empty($usp['beschrijving']) ) echo wpautop( $usp['beschrijving'] );
                ?>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>

<?php
  $showhide_intro = get_field('showhide_intro', HOMEID);
  if( $showhide_intro ):
    $introh = get_field('intro', HOMEID);
    $introcon = $introh['content'];
?>
<section class="mission-statement-sec-wrap">
  <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 order-md-2 mssd-col">
           <?php if(!empty($introh['afbeelding'])):
            $deshoversrc = cbv_get_image_src($introh['afbeelding'], 'overonsintro'); ?>
          <div class="mission-statement-sec-fea-img" style="background: url(<?php echo $deshoversrc; ?>);">
            <?php echo cbv_get_image_tag($introh['afbeelding'], 'overonsintro'); ?>
          </div>
          <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-6 order-md-1 mssd-col">
          <div class="mission-statement-sec-des">
            <h2 class="mssd-title-parent">
              <?php 
                  if( !empty($introh['subtitel']) ) printf('<span class="mssd-title-1">%s</span>', $introh['subtitel']);
                  if( !empty($introh['titel']) ) printf('<strong class="mssd-title-2">%s</strong>', $introh['titel']);
                ?>
            </h2>
            <?php if( !empty($introcon) ): ?>
            <ul class="reset-list">
              <?php foreach( $introcon as $introde ): ?>
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
            <div class="mssd-btn">
              <?php 
                $iknop = $introh['knop'];
                if( is_array( $iknop ) &&  !empty( $iknop['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $iknop['url'], $iknop['target'], $iknop['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>

<?php
  $showhide_partners = get_field('showhide_partners', HOMEID);
  if( $showhide_partners ):
    $partners = get_field('partners', HOMEID);
?>
<section class="warehouse-layout-slider-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if( !empty($partners) ): ?>
          <div class="warehouse-layout-slider" id="warehouseLayoutSlider">
             <?php foreach( $partners as $partner ): ?>
            <div class="warehouseLayoutSlide-item">
              <?php if( !empty($partner['id']) ): ?>
              <span>
                <?php echo cbv_get_image_tag($partner['id']); ?>
              </span>
              <?php endif; ?>
            </div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>
<?php
  $showhide_maga = get_field('showhide_maga', HOMEID);
  if( $showhide_maga ):
    $mlefts = get_field('lefts', HOMEID);
    $mknop = get_field('knop', HOMEID);
?>
<section class="warehouse-layout-sec-con">
  <div class="container">
      <div class="row">
        <div class="col-md-6 wlsd-col">
          <div class="warehouse-layout-sec-con-des">
            <div class="wlsd-hdr">
              <?php 
                if( !empty($mlefts['titel']) ) printf('<h2 class="wlsd-title">%s</h2>', $mlefts['titel']);
                if( !empty($mlefts['subtitel']) ) printf('<p>%s</p>', $mlefts['subtitel']);
              ?>
            </div>
            <?php if( !empty($mlefts['beschrijving']) ) echo wpautop( $mlefts['beschrijving'] ); ?>
            <div class="wlsd-btns">
              <?php 
              $mknop1 = $mlefts['knop_1'];
              $mknop2 = $mlefts['knop_2'];
              if( is_array( $mknop1 ) &&  !empty( $mknop1['url'] ) ){
                  printf('<div class="wlsd-btn-1"><a href="%s" target="%s">%s</a></div>', $mknop1['url'], $mknop1['target'], $mknop1['title']); 
              }
              if( is_array( $mknop2 ) &&  !empty( $mknop2['url'] ) ){
                  printf('<div class="wlsd-btn-2"><a href="%s" target="%s">%s</a></div>', $mknop2['url'], $mknop2['target'], $mknop2['title']); 
              }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-6 wlsd-col">
          <div class="warehouse-layout-sec-con-btns">
            <?php if( !empty($mknop) ) printf('%s', $mknop); ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>
<?php
  $showhide_diensten = get_field('showhide_diensten', HOMEID);
  if( $showhide_diensten ):
    $hdiensten = get_field('diensten', HOMEID);
?>
<section class="hm-services-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-services-sec-hdr">
            <?php 
              if( !empty($hdiensten['titel']) ) printf('<h2 class="hm-services-sec-hdr-title">%s</h2>', $hdiensten['titel']);
              if( !empty($hdiensten['beschrijving']) ) echo wpautop( $hdiensten['beschrijving'] );
            ?>
          </div>
        </div>
        <?php 
        $dQuery = new WP_Query(array(
          'post_type' => 'diensten',
          'posts_per_page'=> 4,
          'orderby' => 'date',
          'order'=> 'desc',

        ));
        if( $dQuery->have_posts() ):
        ?>
        <div class="col-md-12">
          <div class="hm-services-items">
            <div class="hm-services-items-row clearfix">
            <?php 
              while($dQuery->have_posts()): $dQuery->the_post();
                $doverview = get_field('overviesec', get_the_ID());
                $dicon = $doverview['featured_image'];
                $dbeschrijving = $doverview['short_beschrijving'];
              if(!empty( $dicon)){
                $dicontag = cbv_get_image_tag( $dicon );
              }else{
                $dicontag = '';
              }   
            ?>
              <div class="hm-services-item-col">
                <div class="hm-services-item mHc">
                  <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                  <i>
                    <a href="<?php the_permalink(); ?>"><?php echo $dicontag; ?></a>
                  </i>
                  <h3 class="hm-services-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php echo wpautop( $dbeschrijving ); ?>
                  <div class="hm-services-item-more-link">
                    <a href="<?php the_permalink(); ?>">Meer Info</a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
        </div>
        <?php endif; wp_reset_postdata(); ?>
        <div class="col-md-12">
          <div class="hm-services-btns">
            <?php 
              $sknop1 = $hdiensten['knop_1'];
              $sknop2 = $hdiensten['knop_2'];
              if( is_array( $sknop1 ) &&  !empty( $sknop1['url'] ) ){
                  printf('<div class="hm-services-btn-1"><a href="%s" target="%s">%s</a></div>', $sknop1['url'], $sknop1['target'], $sknop1['title']); 
              }
              if( is_array( $sknop2 ) &&  !empty( $sknop2['url'] ) ){
                  printf('<div class="hm-services-btn-2"><a href="%s" target="%s">%s</a></div>', $sknop2['url'], $sknop2['target'], $sknop2['title']); 
              }
              ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>
<?php
  $showhide_referenties = get_field('showhide_referenties', HOMEID);
  if( $showhide_referenties ):
    $hrefer = get_field('referenties', HOMEID);
    $rslider = $hrefer['slider'];
?>
<section class="hm-referenties-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-referenties-sec-hdr">
          <?php 
            if( !empty($hrefer['titel']) ) printf('<h2 class="hm-referenties-sec-hdr-title">%s</h2>', $hrefer['titel']);
            if( !empty($hrefer['beschrijving']) ) echo wpautop( $hrefer['beschrijving'] );
          ?>
        </div>
      </div>
    </div>
  </div>
  <?php if($rslider): ?>
  <div class="block-1510">
    <div class="hm-referenties-sec-con hmReferentiesSecSlider" id="hmReferentiesSecSlider">
      <?php foreach( $rslider as $rslide ): $slide_type = $rslide['slide_type']; ?>
      <?php if($slide_type == 1): 
       $test_text = $rslide['testimonial_tekst'];
        $getuigenis1 = $test_text['testimonial'];
        $memQuery1 = new WP_Query(array(
          'post_type' => 'getuigenissen',
          'posts_per_page'=> 1,
          'post__in' => array($getuigenis1)
        ));
      ?>
      <div class="hm-referenties-sec-con-item">
        <div class="hm-referenties-sec-con-item-inr clearfix">
          <?php if( $memQuery1->have_posts() ): ?>
          <div class="hm-rsci-col mHc">
            <div class="hm-rsci-col-testi">
              <div class="dft-blockquote">
                <?php 
                  while($memQuery1->have_posts()): $memQuery1->the_post();
                  $tcontent = get_the_content();
                  $tname = get_field('naam', get_the_ID());
                  $tposit = get_field('positie', get_the_ID());
                ?>
                <i>
                  <svg class="quote-white-icon-svg" width="70" height="70" viewBox="0 0 70 70" fill="#ffff">
                    <use xlink:href="#quote-white-icon-svg"></use>
                  </svg> 
                </i>
                <blockquote><?php echo $tcontent; ?>
                <?php printf('<span><strong>%s, %s</strong></span>', $tname, $tposit); ?>
                </blockquote>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
          <?php wp_reset_postdata(); endif; ?>
          <div class="hm-rsci-col mHc">
            <div class="hm-rsci-col-des">
              <?php if( !empty($test_text['tekst']) ) echo wpautop($test_text['tekst']); ?>
              <div class="hm-rsci-col-des-btns">
                <?php 
                  $sknop1 = $test_text['knop_1'];
                  if( is_array( $sknop1 ) &&  !empty( $sknop1['url'] ) ){
                      printf('<div class="hm-rsci-col-des-btn-1"><a href="%s" target="%s">%s</a></div>', $sknop1['url'], $sknop1['target'], $sknop1['title']); 
                  }
                  $sknop2 = $test_text['knop_2'];
                  if( is_array( $sknop2 ) &&  !empty( $sknop2['url'] ) ){
                      printf('<div class="hm-rsci-col-des-btn-2"><a href="%s" target="%s">%s</a></div>', $sknop2['url'], $sknop2['target'], $sknop2['title']); 
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif;  ?>
      <?php 
      if($slide_type == 2): 
        $afbtest = $rslide['afbeelding_testimonial'];
        $getuigenis = $afbtest['testimonial'];
        $memQuery = new WP_Query(array(
          'post_type' => 'getuigenissen',
          'posts_per_page'=> 1,
          'post__in' => array($getuigenis)
        ));

      ?>
      <div class="hm-referenties-sec-con-item hm-referenties-sec-con-item-2">
        <div class="hm-referenties-sec-con-item-inr clearfix">
          <div class="hm-rsci-col mHc">
            <?php if( !empty($afbtest['afbeelding']) ): $afbtestsrc = cbv_get_image_src($afbtest['afbeelding'], 'hreferslider'); ?>
            <div class="hm-rsci-col-fea-img" style="background: url(<?php echo $afbtestsrc; ?>);"></div>
            <?php endif; ?>
          </div>
          <?php if( $memQuery->have_posts() ): ?>
          <div class="hm-rsci-col mHc">
            <div class="hm-rsci-col-testi">
              <div class="dft-blockquote">
                <?php 
                  while($memQuery->have_posts()): $memQuery->the_post();
                  $tcontent = get_the_content();
                  $tname = get_field('naam', get_the_ID());
                  $tposit = get_field('positie', get_the_ID());
                ?>
                <i>
                  <svg class="quote-white-icon-svg" width="70" height="70" viewBox="0 0 70 70" fill="#ffff">
                    <use xlink:href="#quote-white-icon-svg"></use>
                  </svg> 
                </i>
                <blockquote><?php echo $tcontent; ?>
                <?php printf('<span><strong>%s, %s</strong></span>', $tname, $tposit); ?>
                </blockquote>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
          <?php wp_reset_postdata(); endif; ?>
        </div>
      </div>
      <?php endif;  ?>
      <?php 
      if($slide_type == 3):
      $imgtext = $rslide['afbeelding_Tekst']; 
      ?>
      <div class="hm-referenties-sec-con-item hm-referenties-sec-con-item-3">
        <div class="hm-referenties-sec-con-item-inr clearfix">
          <div class="hm-rsci-col mHc">
            <?php if( !empty($imgtext['afbeelding']) ): $imtextsrc = cbv_get_image_src($imgtext['afbeelding'], 'hreferslider'); ?>
            <div class="hm-rsci-col-fea-img" style="background: url(<?php echo $imtextsrc; ?>);"></div>
            <?php endif; ?>
          </div>
          <div class="hm-rsci-col mHc">
            <div class="hm-rsci-col-des">
              <?php if( !empty($imgtext['tekst']) ) echo wpautop($imgtext['tekst']); ?>
              <div class="hm-rsci-col-des-btns">
                <?php 
                  $imknop1 = $imgtext['knop_1'];
                  if( is_array( $imknop1 ) &&  !empty( $imknop1['url'] ) ){
                      printf('<div class="hm-rsci-col-des-btn-1"><a href="%s" target="%s">%s</a></div>', $imknop1['url'], $imknop1['target'], $imknop1['title']); 
                  }
                  $imknop2 = $imgtext['knop_2'];
                  if( is_array( $imknop2 ) &&  !empty( $imknop2['url'] ) ){
                      printf('<div class="hm-rsci-col-des-btn-2"><a href="%s" target="%s">%s</a></div>', $imknop2['url'], $imknop2['target'], $imknop2['title']); 
                  }
                ?>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php endif;  ?>
      <?php endforeach; ?>
    </div>
  </div>
  <?php endif; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-referenties-sec-btn">
          <?php 
            $rknop = $hrefer['knop'];
            if( is_array( $rknop ) &&  !empty( $rknop['url'] ) ){
                printf('<a href="%s" target="%s">%s</a>', $rknop['url'], $rknop['target'], $rknop['title']); 
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php
  $showhide_news = get_field('showhide_news', HOMEID);
  if( $showhide_news ):
    $hnews = get_field('news', HOMEID);
?>
<section class="hm-nieuws-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-nieuws-sec-hdr">
          <?php 
            if( !empty($hnews['titel']) ) printf('<h2 class="hm-nieuws-sec-hdr-title">%s</h2>', $hnews['titel']);
            if( !empty($hnews['beschrijving']) ) echo wpautop( $hnews['beschrijving'] );
          ?>
        </div>
      </div>
      <?php 
        $rQuery = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page'=> -1,
          'orderby' => 'date',
          'order'=> 'desc',

        ));
        if( $rQuery->have_posts() ):
      ?>
      <div class="col-md-12">
        <div class="hm-nieuws-sec-grds hm-nieuws-sec-grds-slider" id="hmNieuwsSecGrdsSlider">
        <?php 
          while($rQuery->have_posts()): $rQuery->the_post(); 
          $attach_id = get_post_thumbnail_id(get_the_ID());
          if( !empty($attach_id) )
            $blog_src = cbv_get_image_src($attach_id,'bloggrid');
          else
            $blog_src = THEME_URI .'/assets/images/blogdef.png';
        ?>
          <div class="hm-nieuws-sec-grds-slide">
            <div class="hm-nieuws-sec-grd-item">
              <div class="hm-nieuws-sec-grd-item-fea-img-cntlr">
                <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                <div class="hm-nieuws-sec-grd-item-fea-img" style="background: url(<?php echo $blog_src; ?>);">
                </div>
              </div>
              <div class="hm-nieuws-sec-grd-item-des mHc">
                <div class="hm-nieuws-sec-grd-des-date">
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/calender-gray-icon.svg"></i>
                  <span><?php echo get_the_date('m.d.Y'); ?></span>
                </div>
                <h3 class="hm-nieuws-sec-grd-item-des-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Meer Info</a>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="col-md-12">
        <div class="hm-referenties-sec-btn">
          <?php 
            $nsknop = $hnews['knop'];
            if( is_array( $nsknop ) &&  !empty( $nsknop['url'] ) ){
                printf('<a href="%s" target="%s">%s</a>', $nsknop['url'], $nsknop['target'], $nsknop['title']); 
            }
          ?>
        </div>
      </div>
      <?php endif; wp_reset_postdata(); ?>
    </div>   
  </div> 
</section>
<?php endif; ?>
<?php get_footer(); ?>