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
              <h1 class="page-banner-title">Diensten</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->

<?php
  $doverviesec = get_field('overviesec', $thisID);
  if( $doverviesec ):
    $dicon = $doverviesec['featured_image'];
    $dbeschrijving = $doverviesec['beschrijving'];
?>
<section class="cr-dd-head-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="cr-dd-head-wrp">
          <?php 
            if( !empty($dicon) ) echo cbv_get_image_tag($dicon);
          ?>
          <?php
            if( !empty(get_the_title()) ) printf('<h2 class="cr-dd-head-title">%s</h2>', get_the_title());
            if( !empty($dbeschrijving) ) echo wpautop( $dbeschrijving );
            $dknop = $doverviesec['knop'];
            if( is_array( $dknop ) &&  !empty( $dknop['url'] ) ){
                printf('<a href="%s" target="%s">%s</a>', $dknop['url'], $dknop['target'], $dknop['title']); 
            }
          ?> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php
  $showhidintro = get_field('showhidintro', $thisID);
  if( $showhidintro ):
    $introt = get_field('galerijsec', $thisID);
    if($introt):
    $inleft = $introt['lefts'];
    $inright = $introt['rights'];
?>
<section class="cr-leg-sec-wrp cr-dd-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="cr-fancy-slider-wrp clearfix">
          <div class="cr-fancy-dsc-rgt order-1">
            <div class="cr-fancy-dsc">
              <?php
              if( !empty($inleft['titel']) ) printf('<h2 class="cr-fancy-title">%s</h2>', $inleft['titel']);
              if( !empty($inleft['subtitel']) ) printf('<span>%s</span>', $inleft['subtitel']);
              if( !empty($inleft['beschrijving']) ) echo wpautop( $inleft['beschrijving'] );
            ?> 
            </div>
          </div>
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
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; endif; ?>
<section class="cr-dd-back-step-sec-wrp">
  <div class="container">
    <?php
      $showhideproces = get_field('showhideproces', $thisID);
      if( $showhideproces ):
        $processec = get_field('processec', $thisID);

        $steps = $processec['steps'];

    ?>
    <div class="row">
      <div class="col-sm-12">
        <div class="cr-dd-back-step-wrp">
  
          <?php if( !empty($processec['titel']) ) printf('<h2 class="cr-dd-back-step-title">%s</h2>', $processec['titel']); ?>
          <?php 
          if($steps){ 
            $i = 0;
            foreach( $steps as $step ){
              $stepIndex[$i] = $step['step_title'];
              $i++;
            }
          ?>
          <div class="cr-dd-back-step-inr clearfix">
            <?php if( isset($stepIndex[0]) && !empty($stepIndex[0]) ): ?>
            <div class="cr-dd-back-step-btn">
              <a href="#">
                <?php printf('%s', $stepIndex[0]); ?>
                <i class="hide-md">
                  <svg class="cr-dd-arrow-icon-svg" width="12" height="10" viewBox="0 0 12 10" fill="#464646">
                    <use xlink:href="#cr-dd-arrow-icon-svg"></use>
                  </svg> 
                </i>
                <i class="show-md">
                  <svg class="cr-dd-arrows-rgt-xs-svg" width="12" height="10" viewBox="0 0 10 12" fill="#464646">
                    <use xlink:href="#cr-dd-arrows-rgt-xs-svg"></use>
                  </svg> 
                </i>

              </a>
            </div>
            <?php endif; ?>
            <div class="cr-dd-back-step-list">
              <ul class="reset-list hide-md">
                <?php if( isset($stepIndex[1]) && !empty($stepIndex[1]) ): ?>
                <li>
                  <a href="#">
                  <?php printf('%s', $stepIndex[1]); ?>
                  <i>
                    <svg class="cr-dd-arrow-icon-svg" width="12" height="10" viewBox="0 0 12 10" fill="#464646">
                      <use xlink:href="#cr-dd-arrow-icon-svg"></use>
                    </svg> 
                  </i>
                </a></li>
                <?php endif; ?>
                <?php if( isset($stepIndex[2]) && !empty($stepIndex[2]) ): ?>
                <li><a href="#">
                  <?php printf('%s', $stepIndex[2]); ?>
                  <i>
                    <svg class="cr-dd-arrow-icon-svg" width="12" height="10" viewBox="0 0 12 10" fill="#464646">
                      <use xlink:href="#cr-dd-arrow-icon-svg"></use>
                    </svg> 
                  </i>
                </a></li>
                <?php endif; ?>
                <?php if( isset($stepIndex[3]) && !empty($stepIndex[3]) ): ?>
                <li><a href="#">
                  <?php printf('%s', $stepIndex[3]); ?>
                  <i>
                    <svg class="cr-dd-arrow-icon-svg" width="12" height="10" viewBox="0 0 12 10" fill="#464646">
                      <use xlink:href="#cr-dd-arrow-icon-svg"></use>
                    </svg> 
                  </i>
                </a></li>
                <?php endif; ?>
              </ul>
              <ul class="reset-list show-md">
                <?php if( isset($stepIndex[1]) && !empty($stepIndex[1]) ): ?>
                <li>
                  <a href="#">
                  <?php printf('%s', $stepIndex[1]); ?>
                  <i class="show-md">
                    <svg class="cr-dd-arrows-rgt-xs-svg" width="12" height="10" viewBox="0 0 10 12" fill="#464646">
                      <use xlink:href="#cr-dd-arrows-rgt-xs-svg"></use>
                    </svg> 
                  </i>
                </a></li>
                <?php endif; ?>
                <?php if( isset($stepIndex[2]) && !empty($stepIndex[2]) ): ?>
                <li><a href="#">
                  <?php printf('%s', $stepIndex[2]); ?>
                  <i class="show-md">
                    <svg class="cr-dd-arrows-rgt-xs-svg" width="12" height="10" viewBox="0 0 10 12" fill="#464646">
                      <use xlink:href="#cr-dd-arrows-rgt-xs-svg"></use>
                    </svg> 
                  </i>
                </a></li>
                <?php endif; ?>
                <?php if( isset($stepIndex[3]) && !empty($stepIndex[3]) ): ?>
                <li><a href="#">
                 <?php printf('%s', $stepIndex[3]); ?>
                  <i class="show-md">
                    <svg class="cr-dd-arrows-rgt-xs-svg" width="12" height="10" viewBox="0 0 10 12" fill="#464646">
                      <use xlink:href="#cr-dd-arrows-rgt-xs-svg"></use>
                    </svg> 
                  </i>
                </a></li>
                <?php endif; ?>
              </ul>
            </div>
            <?php if( isset($stepIndex[4]) && !empty($stepIndex[4]) ): ?>
            <div class="cr-dd-back-step-rgt">
              <span>
                <i>
                  <svg class="cr-dd-back-start-icon-svg" width="36" height="36" viewBox="0 0 36 36" fill="#464646">
                    <use xlink:href="#cr-dd-back-start-icon-svg"></use>
                  </svg> 
                </i>
                <?php printf('%s', $stepIndex[4]); ?>
              </span>
            </div>
          </div>
          <?php endif; ?>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php
      $showhidintro2 = get_field('showhidintro2', $thisID);
      if( $showhidintro2 ):
        $intro2 = get_field('intro2', $thisID);

        $leftsed = $intro2['lefts'];
        $righted = $intro2['rights_editor'];
    ?>
    <div class="cr-dd-two-part-dsc-wrp clearfix">
      <?php if($leftsed): ?>
      <div class="cr-dd-two-part-dsc-lft">
        <?php 
        if( !empty($leftsed['titel']) ) printf('<h2 class="cr-dd-two-part-dsc-title">%s</h2>', $leftsed['titel']);
        if( !empty($leftsed['beschrijving']) ) echo wpautop( $leftsed['beschrijving'] );
        ?>
      </div>
      <?php endif; ?>
      <?php if($righted): ?>
      <div class="cr-dd-two-part-dsc-rgt">
        <div class="cr-dd-two-part-dsc-list">
          <?php 
            if( !empty($righted) ) echo wpautop( $righted );
          ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
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
          <h2 class="cln-leg-grid-head-title">Gerelateerde Referenties</h2>
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
              $ricontag = cbv_get_image_tag( $ricon, 'refergrid' );
            }else{
              $ricontag = '';
            }   
            ?>
            <li>
              <div class="cln-rv-grid-item">
                <div class="cln-rv-grid-item-img">
                  <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                  <?php echo $ricontag; ?>
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