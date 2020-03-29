<?php
/*
  Template Name: Magazijnnrichting
*/
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
              <h1 class="page-banner-title">Magazijninrichting</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->




<section class="warehouse-layout-page-entry-hdr-sec">
  <div class="container">
      <div class="row">
      <?php
        $showhide_intro = get_field('showhide_intro', $thisID);
        if( $showhide_intro ):
          $introsec = get_field('introsec', $thisID);
      ?>
        <div class="col-md-12">
          <div class="wlpeds-inr">
            <?php 
            if( !empty($introsec['subtitel']) ) printf('<h2 class="wlpeds-title">%s</h2>', $introsec['subtitel']); 
            if( !empty($introsec['beschrijving']) ) echo wpautop( $introsec['beschrijving'] );
            ?>
          </div>
        </div>
        <?php endif; ?>
        <div class="col-md-12">
          <div class="wlpeds-filters">
            <ul class="reset-list">
              <li class="wlpeds-filter-1">
                <div class="fl-select">
                  <select class="selectpicker">
                    <option selected="selected">Palletstellingen</option>
                     <option>Palletstellingen 1</option>
                     <option>Palletstellingen 2</option>
                     <option>Palletstellingen 3</option>
                     <option>Palletstellingen 4</option>
                  </select>
                </div>
              </li>
              <li class="wlpeds-filter-2">
                <div class="fl-select">
                  <select class="selectpicker">
                    <option selected="selected">Magazijnrekken</option>
                     <option>Magazijnrekken 1</option>
                     <option>Magazijnrekken 2</option>
                     <option>Magazijnrekken 3</option>
                     <option>Magazijnrekken 4</option>
                  </select>
                </div>
              </li>
              <li class="wlpeds-filter-3">
                <div class="fl-select">
                  <select class="selectpicker">
                    <option selected="selected">Tussenvloeren (Mezzanine)</option>
                     <option>Tussenvloeren (Mezzanine) 1</option>
                     <option>Tussenvloeren (Mezzanine) 2</option>
                     <option>Tussenvloeren (Mezzanine) 3</option>
                     <option>Tussenvloeren (Mezzanine) 4</option>
                  </select>
                </div>
              </li>
              <li class="wlpeds-filter-4">
                <div class="fl-select">
                  <select class="selectpicker">
                    <option selected="selected">Stapelrekken</option>
                     <option>Stapelrekken 1</option>
                     <option>Stapelrekken 2</option>
                     <option>Stapelrekken 3</option>
                     <option>Stapelrekken 4</option>
                  </select>
                </div>
              </li>
              <li class="wlpeds-filter-5">
                <div class="fl-select">
                  <select class="selectpicker">
                    <option selected="selected">Andere systemen</option>
                     <option>Andere systemen 1</option>
                     <option>Andere systemen 2</option>
                     <option>Andere systemen 3</option>
                     <option>Andere systemen 4</option>
                  </select>
                </div>
              </li>
            </ul>
          </div>
          <hr>
        </div>
      </div>
  </div>    
</section>


<section class="pallet-racking-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="fl-sec-hdr">
            <h3 class="fl-sec-hdr-title">Palletstellingen</h3>
            <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.  A in consectetur convallis ut aliquam etiam odio.</p>
          </div>
        </div>
      </div>
  </div>  
  <div class="filter-sec-grds-wrap">
    <div class="filter-sec-grds clearfix filterSecGrdsSlider" id="filterSecGrdsSlider">
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="#" class="overlay-link"></a>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/pallet-racking-fea-img-01.jpg);">
              <img src="<?php echo THEME_URI; ?>/assets/images/pallet-racking-fea-img-01.jpg">
            </div>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="#">Palletstellingen</a></h4>
            <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
            <a href="#">Bekijk</a>
          </div>
        </div>
      </div>
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="#" class="overlay-link"></a>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/pallet-racking-fea-img-02.jpg);">
              <img src="<?php echo THEME_URI; ?>/assets/images/pallet-racking-fea-img-02.jpg">
            </div>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="#">Inrijstellingen</a></h4>
            <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
            <a href="#">Bekijk</a>
          </div>
        </div>
      </div>
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="#" class="overlay-link"></a>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/pallet-racking-fea-img-03.jpg);">
              <img src="<?php echo THEME_URI; ?>/assets/images/pallet-racking-fea-img-03.jpg">
            </div>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="#">Doorrolstellingen</a> </h4>
            <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
            <a href="#">Bekijk</a>
          </div>
        </div>
      </div>
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="#" class="overlay-link"></a>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/pallet-racking-fea-img-04.jpg);">
              <img src="<?php echo THEME_URI; ?>/assets/images/pallet-racking-fea-img-04.jpg">
            </div>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="#">Pallet shuttle </a></h4>
            <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
            <a href="#">Bekijk</a>
          </div>
        </div>
      </div>
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="#" class="overlay-link"></a>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/pallet-racking-fea-img-05.jpg);">
              <img src="<?php echo THEME_URI; ?>/assets/images/pallet-racking-fea-img-05.jpg">
            </div>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="#">Pushback stellingen</a></h4>
            <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
            <a href="#">Bekijk</a>
          </div>
        </div>
      </div>
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="#" class="overlay-link"></a>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/pallet-racking-fea-img-06.jpg);">
              <img src="<?php echo THEME_URI; ?>/assets/images/pallet-racking-fea-img-06.jpg">
            </div>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="#">Mobiele palletstellingen</a></h4>
            <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
            <a href="#">Bekijk</a>
          </div>
        </div>
      </div>

    </div>
    <div class="filter-sec-grds-more-btn">
      <a href="#">Laat je gratis adviseren en ontdek het beste voor jouw project.</a>
    </div>
  </div>  
</section>


<section class="pallet-racking-section has-top-border has-gray-bg">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="fl-sec-hdr">
            <h3 class="fl-sec-hdr-title">Magazijnrekken</h3>
            <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.  A in consectetur convallis ut aliquam etiam odio.</p>
          </div>
        </div>
      </div>
  </div>  
  <div class="filter-sec-grds-wrap">
    <div class="filter-sec-grds filterSecGrdsSlider" id="filterSecGrdsSlider">
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="#" class="overlay-link"></a>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/warehouse-racks-fea-img-01.jpg);">
              <img src="<?php echo THEME_URI; ?>/assets/images/warehouse-racks-fea-img-01.jpg">
            </div>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="#">Palletstellingen</a></h4>
            <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
            <a href="#">Bekijk</a>
          </div>
        </div>
      </div>
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="#" class="overlay-link"></a>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/warehouse-racks-fea-img-02.jpg);">
              <img src="<?php echo THEME_URI; ?>/assets/images/warehouse-racks-fea-img-02.jpg">
            </div>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="#">Inrijstellingen</a></h4>
            <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
            <a href="#">Bekijk</a>
          </div>
        </div>
      </div>
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="#" class="overlay-link"></a>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/warehouse-racks-fea-img-03.jpg);">
              <img src="<?php echo THEME_URI; ?>/assets/images/warehouse-racks-fea-img-03.jpg">
            </div>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="#">Doorrolstellingen</a> </h4>
            <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
            <a href="#">Bekijk</a>
          </div>
        </div>
      </div>
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="#" class="overlay-link"></a>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/warehouse-racks-fea-img-04.jpg);">
              <img src="<?php echo THEME_URI; ?>/assets/images/warehouse-racks-fea-img-04.jpg">
            </div>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="#">Pallet shuttle </a></h4>
            <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
            <a href="#">Bekijk</a>
          </div>
        </div>
      </div>
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="#" class="overlay-link"></a>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/warehouse-racks-fea-img-05.jpg);">
              <img src="<?php echo THEME_URI; ?>/assets/images/warehouse-racks-fea-img-05.jpg">
            </div>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="#">Pushback stellingen</a></h4>
            <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
            <a href="#">Bekijk</a>
          </div>
        </div>
      </div>
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="#" class="overlay-link"></a>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/warehouse-racks-fea-img-06.jpg);">
              <img src="<?php echo THEME_URI; ?>/assets/images/warehouse-racks-fea-img-06.jpg">
            </div>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="#">Mobiele palletstellingen</a></h4>
            <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
            <a href="#">Bekijk</a>
          </div>
        </div>
      </div>
    </div>
    <div class="filter-sec-grds-more-btn">
      <a href="#">Laat je gratis adviseren en ontdek het beste voor jouw project.</a>
    </div>
  </div>  
</section>


<section class="floors-section-wrap">
  <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="floors-sec-grd-item">
            <div class="floors-sec-grd-item-fea-img-cntrl order-2">
              <a href="#" class="overlay-link"></a>
              <div class="floors-sec-grd-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/floating-grd-fea-img-01.jpg);">
              </div>
            </div>
            <div class="floors-sec-grd-item-des order-1">
              <h4 class="fsgid-title"><a href="#">Tussenvloeren</a></h4>
              <p>Sed nibh arcu senectus amet, feugiat. Magna ut ullamcorper quis a, senectus vivamus duis volutpat. Ornare suspendisse tincidunt odio dolor mi malesuada. Dolor sem tellus proin pretium, id mus faucibus vel. </p>
              <a href="#">Less Meer</a>
            </div>
            
          </div>
        </div>
        <div class="col-md-6">
          <div class="floors-sec-grd-item">
            <div class="floors-sec-grd-item-fea-img-cntrl order-2">
              <a href="#" class="overlay-link"></a>
              <div class="floors-sec-grd-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/floating-grd-fea-img-02.jpg);">
              </div>
            </div>
            <div class="floors-sec-grd-item-des order-1">
              <h4 class="fsgid-title"><a href="#">Stapelrekken</a></h4>
              <p>Sed nibh arcu senectus amet, feugiat. Magna ut ullamcorper quis a, senectus vivamus duis volutpat. Ornare suspendisse tincidunt odio dolor mi malesuada. Dolor sem tellus proin pretium, id mus faucibus vel. </p>
              <a href="#">Less Meer</a>
            </div>
            
          </div>
        </div>
      </div>
  </div>    
</section>


<section class="other-systems-sec-wrap">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="fl-sec-hdr">
            <h3 class="fl-sec-hdr-title">Andere systemen</h3>
            <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.  A in consectetur convallis ut aliquam etiam odio.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="other-systems-sec-item mHc">
            <div class="other-systems-sec-item-fea-img-cntlr">
              <a href="#" class="overlay-link"></a>
              <div class="other-systems-sec-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/other-systems-fea-img-01.jpg);"></div>
            </div>
            <div class="other-systems-sec-item-des">
              <div class="other-systems-sec-item-des-inr">
                <h4 class="ossi-title"><a href="#">Draagarmstellingen</a></h4>
                <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
                <a href="#">bekijk</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="other-systems-sec-item mHc">
            <div class="other-systems-sec-item-fea-img-cntlr">
              <a href="#" class="overlay-link"></a>
              <div class="other-systems-sec-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/other-systems-fea-img-01.jpg);"></div>
            </div>
            <div class="other-systems-sec-item-des">
              <div class="other-systems-sec-item-des-inr">
                <h4 class="ossi-title"><a href="#">Oplossingen op maat</a></h4>
                <p>Orci odio imperdiet proin suspendisse quis eu amet, in. Eget nulla sagittis porta rhoncus ac nec. Viverra orci, diam odio.</p>
                <a href="#">bekijk</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="ossi-more-btn">
            <a href="#">Laat je gratis adviseren en ontdek het beste voor jouw project.</a>
          </div>
        </div>
      </div>
  </div>    
</section>

<section class="floating-grds-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="floating-grds">
          <div class="floating-grd-row floating-grd-row-order-change clearfix">
            <div class="floating-grd-row-fea-img-cntrl mHc">
              <div class="floating-grd-row-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/floating-grd-fea-img-01.jpg);"></div>
            </div>
            <div class="floating-grd-row-des mHc">
              <h2 class="floating-grd-row-des-title">Titel</h2>
              <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.  A in consectetur convallis ut aliquam etiam odio.</p>
              <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.  A in consectetur convallis ut aliquam etiam odio.</p>
              <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.  A in consectetur convallis ut aliquam etiam odio.</p>
            </div>
          </div>
          <div class="floating-grd-row clearfix">
            <div class="floating-grd-row-fea-img-cntrl mHc">
              <div class="floating-grd-row-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/floating-grd-fea-img-02.jpg);"></div>
            </div>
            <div class="floating-grd-row-des mHc">
              <h2 class="floating-grd-row-des-title">Titel</h2>
              <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.  A in consectetur convallis ut aliquam etiam odio.</p>
              <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.  A in consectetur convallis ut aliquam etiam odio.</p>
              <p>Sem sit ornare proin aliquet a sollicitudin. Odio ac mattis elementum augue. At est pharetra tortor, tellus mi habitasse netus nunc.  A in consectetur convallis ut aliquam etiam odio.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>    
</section>

<section class="cr-leg-post-grid-sec-wrp">
    <div class="ftr-top-dsc-wrp">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="ftr-top-dsc">
              <h2 class="ftr-top-dsc-title">Titel</h2>
              <p>Nisl consequat tristique ut commodo. Semper suspendisse enim, amet molestie tellus. Volutpat elit erat et sagittis auctor ut tristique facilisis sit. Justo, molestie nunc pellentesque odio felis faucibus.</p>
              <a href="#">Laat je gratis adviseren</a>
              <a href="#">
                <i>
                  <svg class="ftr-telephone-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#C01718">
                    <use xlink:href="#ftr-telephone-icon-svg"></use>
                  </svg> 
                </i>
                00 32 472 06 24 34
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<?php get_footer(); ?>