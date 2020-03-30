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
        <div class="col-md-12">
          <div class="hm-services-items">
            <div class="hm-services-items-row clearfix">
              <div class="hm-services-item-col">
                <div class="hm-services-item mHc">
                  <a href="#" class="overlay-link"></a>
                  <i>
                    <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hm-services-item-icon-01.svg"></a>
                  </i>
                  <h3 class="hm-services-item-title"><a href="#">Advies</a></h3>
                  <p>Condimentum mi at malesuada commodo. Neque ultricies lobortis aenean.</p>
                  <div class="hm-services-item-more-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
              <div class="hm-services-item-col">
                <div class="hm-services-item mHc">
                  <a href="#" class="overlay-link"></a>
                  <i>
                    <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hm-services-item-icon-02.svg"></a>
                  </i>
                  <h3 class="hm-services-item-title"><a href="#">Inspectie</a></h3>
                  <p>Sapien ultrices ipsum, lacinia eu consequat, at laoreet. Dictum sed amet, semper orci.</p>
                  <div class="hm-services-item-more-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
              <div class="hm-services-item-col">
                <div class="hm-services-item mHc">
                  <a href="#" class="overlay-link"></a>
                  <i>
                    <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hm-services-item-icon-03.svg"></a>
                  </i>
                  <h3 class="hm-services-item-title"><a href="#">Montage</a></h3>
                  <p>Egestas vulputate mattis leo integer quis bibendum amet. Vel felis luctus diam mattis.</p>
                  <div class="hm-services-item-more-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
              <div class="hm-services-item-col">
                <div class="hm-services-item mHc">
                  <a href="#" class="overlay-link"></a>
                  <i>
                    <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hm-services-item-icon-04.svg"></a>
                  </i>
                  <h3 class="hm-services-item-title"><a href="#">Productontwikkeling</a></h3>
                  <p>Malesuada et quis condimentum in phasellus diam cursus pretium maecenas. A aliquam praesent in.</p>
                  <div class="hm-services-item-more-link">
                    <a href="#">Meer Info</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
  <div class="block-1510">
    <div class="hm-referenties-sec-con hmReferentiesSecSlider" id="hmReferentiesSecSlider">
      <div class="hm-referenties-sec-con-item">
        <div class="hm-referenties-sec-con-item-inr clearfix">
          <div class="hm-rsci-col mHc">
            <div class="hm-rsci-col-testi">
              <div class="dft-blockquote">
                <i>
                  <svg class="quote-white-icon-svg" width="70" height="70" viewBox="0 0 70 70" fill="#ffff">
                    <use xlink:href="#quote-white-icon-svg"></use>
                  </svg> 
                </i>
                <blockquote>Magna tempus etiam congue ornare euismod. Gravida a non sed vitae enim. Bibendum egestas donec orci fermentum. Egestas mattis pulvinar.
                <span><strong>Naam Voornaam, Bedrijf</strong></span>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="hm-rsci-col mHc">
            <div class="hm-rsci-col-des">
              <p>Sed tristique sit pellentesque volutpat diam integer mi tortor eget. Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.</p>
              <ul>
                <li>Sem sit ornare proin aliquet a sollicitudin.</li>
                <li>Sit consequat dui pellentesque urna sollicitudin a. Tellus faucibus.</li>
                <li>Netus sed volutpat pretium magna duis. Lorem id aliquam quis.</li>
              </ul>
              <div class="hm-rsci-col-des-btns">
                <div class="hm-rsci-col-des-btn-1">
                  <a href="#">Lees meer</a>
                </div>
                <div class="hm-rsci-col-des-btn-2">
                  <a href="#">Contacteer Ons</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hm-referenties-sec-con-item hm-referenties-sec-con-item-2">
        <div class="hm-referenties-sec-con-item-inr clearfix">
          <div class="hm-rsci-col mHc">
            <div class="hm-rsci-col-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-rsci-col-fea-img-01.jpg);"></div>
          </div>
          <div class="hm-rsci-col mHc">
            <div class="hm-rsci-col-testi">
              <div class="dft-blockquote">
                <i>
                  <svg class="quote-white-icon-svg" width="70" height="70" viewBox="0 0 70 70" fill="#ffff">
                    <use xlink:href="#quote-white-icon-svg"></use>
                  </svg> 
                </i>
                <blockquote>Magna tempus etiam congue ornare euismod. Gravida a non sed vitae enim. Bibendum egestas donec orci fermentum. Egestas mattis pulvinar.
                <span><strong>Naam Voornaam, Bedrijf</strong></span>
                </blockquote>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="hm-referenties-sec-con-item hm-referenties-sec-con-item-3">
        <div class="hm-referenties-sec-con-item-inr clearfix">
          <div class="hm-rsci-col mHc">
            <div class="hm-rsci-col-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-rsci-col-fea-img-01.jpg);"></div>
          </div>
          <div class="hm-rsci-col mHc">
            <div class="hm-rsci-col-des">
              <p>Sed tristique sit pellentesque volutpat diam integer mi tortor eget. Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.</p>
              <ul>
                <li>Sem sit ornare proin aliquet a sollicitudin.</li>
                <li>Sit consequat dui pellentesque urna sollicitudin a. Tellus faucibus.</li>
                <li>Netus sed volutpat pretium magna duis. Lorem id aliquam quis.</li>
              </ul>
              <div class="hm-rsci-col-des-btns">
                <div class="hm-rsci-col-des-btn-1">
                  <a href="#">Lees meer</a>
                </div>
                <div class="hm-rsci-col-des-btn-2">
                  <a href="#">Contacteer Ons</a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
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
      <div class="col-md-12">
        <div class="hm-nieuws-sec-grds hm-nieuws-sec-grds-slider" id="hmNieuwsSecGrdsSlider">
          <div class="hm-nieuws-sec-grds-slide">
            <div class="hm-nieuws-sec-grd-item">
              <div class="hm-nieuws-sec-grd-item-fea-img-cntlr">
                <a href="#" class="overlay-link"></a>
                <div class="hm-nieuws-sec-grd-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/new-fea-img-01.jpg);">
                </div>
              </div>
              <div class="hm-nieuws-sec-grd-item-des mHc">
                <div class="hm-nieuws-sec-grd-des-date">
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/calender-gray-icon.svg"></i>
                  <span>02.06.2020</span>
                </div>
                <h3 class="hm-nieuws-sec-grd-item-des-title"><a href="#">Amet aliquet eleifend viverra purus quam in nunc.</a></h3>
                <p>Bibendum risus eget id ipsum aliquet at proin vitae vitae. Neque donec elit blandit tellus posuere nec. Mattis eu aenean sem laoreet.</p>
                <a href="#">Meer Info</a>
              </div>
            </div>
          </div>
          <div class="hm-nieuws-sec-grds-slide">
            <div class="hm-nieuws-sec-grd-item">
              <div class="hm-nieuws-sec-grd-item-fea-img-cntlr">
                <a href="#" class="overlay-link"></a>
                <div class="hm-nieuws-sec-grd-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/new-fea-img-02.jpg);">
                </div>
              </div>
              <div class="hm-nieuws-sec-grd-item-des mHc">
                <div class="hm-nieuws-sec-grd-des-date">
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/calender-gray-icon.svg"></i>
                  <span>02.06.2020</span>
                </div>
                <h3 class="hm-nieuws-sec-grd-item-des-title"><a href="#">Et quam massa eu vulputate tempus erat sed.</a></h3>
                <p>Bibendum risus eget id ipsum aliquet at proin vitae vitae. Neque donec elit blandit tellus posuere nec. Mattis eu aenean sem laoreet.</p>
                <a href="#">Meer Info</a>
              </div>
            </div>
          </div>
          <div class="hm-nieuws-sec-grds-slide">
            <div class="hm-nieuws-sec-grd-item">
              <div class="hm-nieuws-sec-grd-item-fea-img-cntlr">
                <a href="#" class="overlay-link"></a>
                <div class="hm-nieuws-sec-grd-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/new-fea-img-03.jpg);">
                </div>
              </div>
              <div class="hm-nieuws-sec-grd-item-des mHc">
                <div class="hm-nieuws-sec-grd-des-date">
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/calender-gray-icon.svg"></i>
                  <span>02.06.2020</span>
                </div>
                <h3 class="hm-nieuws-sec-grd-item-des-title"><a href="#">Eu aliquam, fermentum habitasse vestibulum. At.</a></h3>
                <p>Bibendum risus eget id ipsum aliquet at proin vitae vitae. Neque donec elit blandit tellus posuere nec. Mattis eu aenean sem laoreet.</p>
                <a href="#">Meer Info</a>
              </div>
            </div>
          </div>
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
    </div>   
  </div> 
</section>
<?php endif; ?>
<?php get_footer(); ?>