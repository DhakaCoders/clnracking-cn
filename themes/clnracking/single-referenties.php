<?php 
get_header(); 
$thisID = get_the_ID();
$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/cln-banner-sec.jpg';
?>
<section class="page-banner">
  <div class="page-banner-controller" style="overflow: hidden;">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="page-banner-inr">
              <div class="breadcrumbs-sec">
                <?php cbv_breadcrumbs(); ?>
              </div>
              <h1 class="page-banner-title">Referenties</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->

<?php
  $branding = get_field('branding', $thisID);
  if( $branding ):
    $pservicess = $branding['provided_services'];
?>
<section class="rf-brand-logo-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="rf-brand-logo-wrp">
          <?php 
            if( !empty($branding['reference_logo']) ) echo cbv_get_image_tag($branding['reference_logo']);
             if( !empty($branding['name']) ) printf('<h2 class="rf-brand-logo-title">%s</h2>', $branding['name']);
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php if( !empty($pservicess) ): ?>
<section class="rf-list-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="rf-list-wrp">
          <?php echo $pservicess; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php
  $showhide_intro = get_field('showhide_intro', $thisID);
  if( $showhide_intro ):
    $introt = get_field('introsec', $thisID);
    if($introt):
    $col1 = $introt['kolom_1'];
    $col2 = $introt['kolom_2'];
?>
<section class="rf-tired-dsc-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="rf-tired-dsc-wrp clearfix">
          <div class="rf-tired-dsc-lft">
            <?php if( !empty($col1) ) echo wpautop( $col1 );?>
          </div>
          <div class="rf-tired-dsc-rgt">
            <?php if( !empty($col2) ) echo wpautop( $col2 );?>
            <?php 
            $rknop = $introt['knop'];
            if( is_array( $rknop ) &&  !empty( $rknop['url'] ) ){
                printf('<a href="%s" class="hide-sm" target="%s">%s</a>', $rknop['url'], $rknop['target'], $rknop['title']); 
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; endif; ?>
<section class="cr-leg-sec-wrp">
  <div class="container">
  <?php
    $showhidetekst = get_field('showhidetekst', $thisID);
    if( $showhidetekst ):
      $atekstsec = get_field('atekstsec', $thisID);
  ?>
    <div class="row">
      <div class="col-sm-12">
        <div class="rf-two-part-wrp clearfix">
          <?php if( !empty($atekstsec['afbeelding']) ): 
            $tbgsrc = cbv_get_image_src($atekstsec['afbeelding'], 'quotebg');
          ?>
          <div class="rf-two-part-lft mHc">
            <div class="rf-two-part-lft-img" style="background:url(<?php echo $tbgsrc; ?>);"></div>
          </div>
          <?php endif; ?>
          <div class="rf-two-part-rgt mHc">
            <?php 
              $fc_quote = $atekstsec['select_testimonial'];
              $count = (@count($fc_quote) > 1)? count($fc_quote): 1;
              $tQuery = new WP_Query(array(
                'post_type' => 'getuigenissen',
                'posts_per_page'=> $count,
                'post__in' => $fc_quote
              ));
              if( $tQuery->have_posts() ):
                while($tQuery->have_posts()): $tQuery->the_post();
                  $tcontent = get_the_content();
                  $tname = get_field('naam', get_the_ID());
                  $tposit = get_field('positie', get_the_ID());
            ?>
            <div class="cr-blockcode-slide-item-dsc">
              <i>
                <svg class="blockquote-icon-svg" width="70" height="70" viewBox="0 0 70 70" fill="#fff">
                  <use xlink:href="#blockquote-icon-svg"></use>
                </svg> 
              </i>
              <?php if( !empty($tcontent) ) printf('<blockquote>%s</blockquote>', $tcontent); ?>
              <?php printf('<h5 class="cr-blockcode-title">%s, %s</h5>', $tname, $tposit); ?>
            </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php
  $showhidegalerij = get_field('showhidegalerij', $thisID);
  if( $showhidegalerij ):
    $introt = get_field('galerijsec', $thisID);
    if($introt):
    $inleft = $introt['lefts'];
    $inright = $introt['rights'];
?>
    <div class="row">
      <div class="col-sm-12">
        <div class="cr-fancy-slider-wrp clearfix">
          <div class="cr-fancy-slider-img order-2">
            <div class="cr-fancy-slider">
              <?php 
                $galerij = $inright['galerij'];
                $vposter = $inright['video_poster'];
                $vurl = $inright['video_url'];
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
              <?php if( $galerij ): ?>
              <?php foreach( $galerij as $galeri ): ?>
              <div class="cr-fancy-slide-item">
                <div class="cr-fancy-slide-item-img">
                  <?php echo cbv_get_image_tag($galeri['id'], 'gallery'); ?>
                </div>
              </div>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <div class="cr-fancy-slider-pagi">
              <?php if( !empty($vposter) ): ?>
              <div class="cr-fancy-slide-pagi-item">
                <div class="cr-fancy-slide-pagi-item-img">
                  <?php echo cbv_get_image_tag($vposter, 'galleryThumb'); ?>
                </div>
              </div>
              <?php endif; ?>
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
          <div class="cr-fancy-dsc-rgt order-1">
            <div class="cr-fancy-dsc">
            <?php
              if( !empty($inleft['titel']) ) printf('<h2 class="cr-fancy-title">%s</h2>', $inleft['titel']);
              if( !empty($inleft['beschrijving']) ) echo wpautop( $inleft['beschrijving'] );
            ?> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
  </div>
</section>

<?php
  $showhidecta = get_field('showhidecta', $thisID);
  if( $showhidecta ):
    $ctasec = get_field('ctasec', $thisID);
    if( $ctasec ):
      $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
      $show_telefoon = get_field('telephone', 'options');
      $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
?>
<section class="cr-rf-service-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="ftr-top-dsc-wrp">
          <div class="ftr-top-dsc">
            <?php
              if( !empty($ctasec['titel']) ) printf('<h2 class="ftr-top-dsc-title">%s</h2>', $ctasec['titel']);
              if( !empty($ctasec['beschrijving']) ) echo wpautop( $ctasec['beschrijving'] );
              $cknop = $ctasec['knop'];
              if( is_array( $cknop ) &&  !empty( $cknop['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $cknop['url'], $cknop['target'], $cknop['title']); 
              }
            ?> 
            <?php if( !empty($show_telefoon) ): ?>
            <a href="tel:<?php echo $telefoon; ?>">
              <?php echo $show_telefoon; ?>
              <i>
                <svg class="ftr-telephone-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#C01718">
                  <use xlink:href="#ftr-telephone-icon-svg"></use>
                </svg> 
              </i>
            </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; endif; ?>
<section class="rf-services-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-services-sec-hdr">
            <h2 class="hm-services-sec-hdr-title">Gebruikte diensten en producten</h2>
            <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.  A in consectetur convallis ut aliquam etiam odio.</p>
          </div>
        </div>
        <?php 
          $used_diensten = get_field('used_diensten', $thisID);
          if( !empty($used_diensten) )
            $used_diensten = $used_diensten;
          else
            $used_diensten = array();
          
          $dQuery = new WP_Query(array(
            'post_type' => 'diensten',
            'posts_per_page'=> 2,
            'orderby' => 'date',
            'order'=> 'desc',
            'post__in' => $used_diensten

          ));
        ?>
        <div class="col-md-12">
          <div class="rf-services-items clearfix">
            <div class="rf-services-lft">
              <?php if( $dQuery->have_posts() ): ?>
              <ul class="reset-list clearfix">
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
                <li>
                  <div class="rf-services-item clearfix mHc">
                    <i>
                      <a href="<?php the_permalink(); ?>">
                        <?php echo $dicontag; ?>
                      </a>
                    </i>
                    <h3 class="hm-services-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="hide-sm"><?php echo $dbeschrijving; ?></p>
                    <a class="hide-sm" href="<?php the_permalink(); ?>">Meer Info</a>
                  </div>
                </li>
                <?php endwhile; ?>
              </ul>
              <?php endif; wp_reset_postdata(); ?>
            </div>
            <?php 
              $dlinks = get_field('used_producten_links', $thisID);
              $dknop1 = $dlinks['knop_1'];
              $dknop2 = $dlinks['knop_2'];
            ?>
            <div class="rf-services-rgt clearfix">
              <div class="rf-warehouse-layout-btns mHc">
                <ul class="reset-list">
                  <?php if( is_array( $dknop1 ) &&  !empty( $dknop1['url'] ) ){ ?>
                  <li>
                  <?php printf('<a href="%s" target="%s">%s<i>
                      <svg class="btn-rgt-arrow-sm-white-icon-svg" width="10" height="14" viewBox="0 0 10 14" fill="#ffffff">
                        <use xlink:href="#btn-rgt-arrow-sm-white-icon-svg"></use>
                      </svg> 
                    </i></a>', $dknop1['url'], $dknop1['target'], $dknop1['title']); ?>
                  </li>
                  <?php } ?>
                  <?php if( is_array( $dknop2 ) &&  !empty( $dknop2['url'] ) ){ ?>
                  <li>
                    <?php printf('<a href="%s" target="%s">%s<i>
                        <svg class="btn-rgt-arrow-sm-white-icon-svg" width="10" height="14" viewBox="0 0 10 14" fill="#ffffff">
                          <use xlink:href="#btn-rgt-arrow-sm-white-icon-svg"></use>
                        </svg> 
                      </i></a>', $dknop2['url'], $dknop2['target'], $dknop2['title']); ?>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php 
$rQuery = new WP_Query(array(
  'post_type' => 'referenties',
  'posts_per_page'=> 3,
  'orderby' => 'date',
  'order'=> 'desc',

));
if( $rQuery->have_posts() ):
?>
<section class="cln-leg-grid-sec cln-dd-grid-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="cln-leg-grid-head">
          <h2 class="cln-leg-grid-head-title">Bekijk meer referenties</h2>
          <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.  A in consectetur convallis ut aliquam etiam odio.</p>
        </div>
        <div class="cln-rv-grid-sec-inr">
          <ul class="clearfix">
            <?php 
            while($rQuery->have_posts()): $rQuery->the_post();
              $roverview = get_field('overviesec', get_the_ID());
              $ricon = $roverview['featured_image'];
              $rbeschrijving = $roverview['beschrijving'];
            if(!empty( $ricon)){
              $ricontag = cbv_get_image_tag( $ricon );
              $riconsrc = cbv_get_image_src( $ricon );
            }else{
              $ricontag = '';
            }   
            ?>
            <li class="refGridItem">
              <div class="cln-rv-grid-item">
                <div class="cln-rv-grid-item-img-ctlr">
                  <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                  <div class="cln-rv-grid-item-img" style="background: url('<?php echo $riconsrc; ?>');">
                    
                  </div>
                </div>
                <div class="cln-rv-grid-item-des mHc">
                  <h3 class="cln-rv-grid-item-des-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php echo wpautop( $rbeschrijving ); ?>
                  <a href="<?php the_permalink(); ?>">Lees meer</a>
                </div>
              </div>
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div> 
    </div>
  </div>
</section>
<?php endif; wp_reset_postdata(); ?>
<?php get_footer(); ?>