<?php 
get_header(); 
$thisID = get_the_ID();
?>
<section class="page-banner">
  <div class="page-banner-controller" style="overflow: hidden;">
    <div class="page-banner-bg" style="background-image:url(<?php echo THEME_URI; ?>/assets/images/cln-banner-sec.jpg);">
    </div>
    <div class="page-banner-des">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="page-banner-inr">
              <div class="breadcrumbs-sec">
                <ul class="reset-list">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Binnenpagina</a></li>
                  <li><a href="#">Binnenpagina</a></li>
                </ul>
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
              $tQuery = new WP_Query(array(
                'post_type' => 'getuigenissen',
                'posts_per_page'=> count($fc_quote),
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
        <div class="col-md-12">
          <div class="rf-services-items clearfix">
            <div class="rf-services-lft">
              <ul class="reset-list clearfix">
                <li>
                  <div class="rf-services-item clearfix mHc">
                    <i>
                      <a href="#">
                        <img src="<?php echo THEME_URI; ?>/assets/images/hm-services-item-icon-01.svg">
                      </a>
                    </i>
                    <h3 class="hm-services-item-title"><a href="#">Advies</a></h3>
                    <p class="hide-sm">Condimentum mi at malesuada commodo. Neque ultricies lobortis aenean.</p>
                    <a class="hide-sm" href="#">Meer Info</a>
                  </div>
                </li>
                <li>
                  <div class="rf-services-item clearfix mHc">
                    <i>
                      <a href="#">
                        <img src="<?php echo THEME_URI; ?>/assets/images/hm-services-item-icon-02.svg">
                      </a>
                    </i>
                    <h3 class="hm-services-item-title"><a href="#">Inspectie</a></h3>
                    <p class="hide-sm">Sapien ultrices ipsum, lacinia eu consequat, at laoreet. Dictum sed amet, semper orci.</p>
                    <a class="hide-sm" href="#">Meer Info</a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="rf-services-rgt clearfix">
              <div class="rf-warehouse-layout-btns mHc">
                <ul class="reset-list">
                  <li>
                    <a href="#">
                    Palletstellingen
                    <i>
                      <svg class="btn-rgt-arrow-sm-white-icon-svg" width="10" height="14" viewBox="0 0 10 14" fill="#ffffff">
                        <use xlink:href="#btn-rgt-arrow-sm-white-icon-svg"></use>
                      </svg> 
                    </i>
                  </a>
                  </li>
                  <li>
                    <a href="#">
                      Magazijnrekken
                      <i>
                        <svg class="btn-rgt-arrow-sm-white-icon-svg" width="10" height="14" viewBox="0 0 10 14" fill="#ffffff">
                          <use xlink:href="#btn-rgt-arrow-sm-white-icon-svg"></use>
                        </svg> 
                      </i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>


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
            <li>
              <div class="cln-rv-grid-item">
                <div class="cln-rv-grid-item-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/cln-rv-grid-item-img-1.jpg">
                </div>
                <div class="cln-rv-grid-item-des">
                  <h3>Titel</h3>
                  <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue.</p>
                  <ul>
                    <li>Verleende dienst</li>
                    <li>Gebruikt product</li>
                    <li>Verleende dienst</li>
                    <li>Verleende dienst</li>
                    <li>Gebruikt product</li>
                    <li>Verleende dienst</li>
                  </ul>
                  <a href="#">Lees meer</a>
                </div>
              </div>
            </li>
            <li>
              <div class="cln-rv-grid-item">
                <div class="cln-rv-grid-item-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/cln-rv-grid-item-img-2.jpg">
                </div>
                <div class="cln-rv-grid-item-des">
                  <h3>Titel</h3>
                  <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue.</p>
                  <ul>
                    <li>Verleende dienst</li>
                    <li>Gebruikt product</li>
                    <li>Verleende dienst</li>
                    <li>Verleende dienst</li>
                    <li>Gebruikt product</li>
                    <li>Verleende dienst</li>
                  </ul>
                  <a href="#">Lees meer</a>
                </div>
              </div>
            </li>
            <li>
              <div class="cln-rv-grid-item">
                <div class="cln-rv-grid-item-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/cln-rv-grid-item-img-3.jpg">
                </div>
                <div class="cln-rv-grid-item-des">
                  <h3>Titel</h3>
                  <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue.</p>
                  <ul>
                    <li>Verleende dienst</li>
                    <li>Gebruikt product</li>
                    <li>Verleende dienst</li>
                    <li>Verleende dienst</li>
                    <li>Gebruikt product</li>
                    <li>Verleende dienst</li>
                  </ul>
                  <a href="#">Lees meer</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div> 
    </div>
  </div>
</section>
<?php get_footer(); ?>