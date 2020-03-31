<?php
/*
  Template Name: Magazijnnrichting
*/
get_header(); 
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>

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
                  <a class="scrollto" data-to="#palletstellingen-sec" href="#">
                    <span>Palletstellingen</span>
                    <i>
                      <svg class="magazijnnrichting-link-down" width="14" height="14" viewBox="0 0 14 14" fill="#fff">
                        <use xlink:href="#magazijnnrichting-link-down"></use>
                      </svg> 
                    </i>
                  </a>
                </div>
              </li>
              <li class="wlpeds-filter-2">
                <div class="fl-select">
                  <a class="scrollto" data-to="#magazijnrekken-sec" href="#">
                    <span>Magazijnrekken</span>
                    <i>
                      <svg class="magazijnnrichting-link-down" width="14" height="14" viewBox="0 0 14 14" fill="#fff">
                        <use xlink:href="#magazijnnrichting-link-down"></use>
                      </svg> 
                    </i>
                  </a>
                </div>
              </li>
              <li class="wlpeds-filter-3">
                <div class="fl-select">
                  <a class="scrollto" data-to="#tussenvloeren-stapelrekken-sec" href="#">
                    <span>Tussenvloeren (Mezzanine)</span>
                    <i>
                      <svg class="magazijnnrichting-link-down" width="14" height="14" viewBox="0 0 14 14" fill="#fff">
                        <use xlink:href="#magazijnnrichting-link-down"></use>
                      </svg> 
                    </i>
                  </a>
                </div>
              </li>
              <li class="wlpeds-filter-4">
                <div class="fl-select">
                  <a class="scrollto" data-to="#tussenvloeren-stapelrekken-sec" href="#">
                    <span>Stapelrekken</span>
                    <i>
                      <svg class="magazijnnrichting-link-down" width="14" height="14" viewBox="0 0 14 14" fill="#fff">
                        <use xlink:href="#magazijnnrichting-link-down"></use>
                      </svg> 
                    </i>
                  </a>
                </div>
              </li>
              <li class="wlpeds-filter-5">
               <div class="fl-select">
                  <a class="scrollto" data-to="#andere-systemen-sec" href="#">
                    <span>Andere systemen</span>
                    <i>
                      <svg class="magazijnnrichting-link-down" width="14" height="14" viewBox="0 0 14 14" fill="#fff">
                        <use xlink:href="#magazijnnrichting-link-down"></use>
                      </svg> 
                    </i>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <hr>
        </div>
      </div>
  </div>    
</section>

<?php 
 $catID1 = 2;
 $temrm1 = get_term( $catID1 );
 $catID2 = 3;
 $temrm2 = get_term( $catID2 );
 $catID3 = 4;
 $temrm3 = get_term( $catID3 );
 $catID4 = 5;
 $temrm4 = get_term( $catID4 );
 $catID5 = 6;
 $temrm5 = get_term( $catID5 );
?>
<section class="pallet-racking-section" id="palletstellingen-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="fl-sec-hdr">
            <?php 
            if( !empty($temrm1->name) ) printf('<h3 class="fl-sec-hdr-title">%s</h3>', $temrm1->name); 
            if( !empty($temrm1->description) ) echo wpautop($temrm1->description);
            ?>
          </div>
        </div>
      </div>
  </div> 
  <?php 
    $Query1 = new WP_Query(array(
      'post_type' => 'magazijn',
      'posts_per_page'=> 6,
      'orderby' => 'date',
      'order'=> 'desc',
      'tax_query' => array(
        array(
          'taxonomy' => 'magazijn_cat',
          'field' => 'term_id',
          'terms' => $catID1
        )
      )

    ));
    if( $Query1->have_posts() ):
  ?>
  <div class="filter-sec-grds-wrap">
    <div class="filter-sec-grds clearfix filterSecGrdsSlider" id="filterSecGrdsSlider">
      <?php 
        while($Query1->have_posts()): $Query1->the_post();
          $overview = get_field('overviewsec', get_the_ID());  
      ?>
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
            <?php if( !empty($overview['featured_afbeelding']) ): $gridsrc = cbv_get_image_src( $overview['featured_afbeelding'], 'magazijgrid' );?>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo $gridsrc; ?>);">
              <?php echo cbv_get_image_tag( $overview['featured_afbeelding'], 'magazijgrid' ); ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php if( !empty($overview['beschrijving']) ) echo wpautop($overview['beschrijving']); ?>
            <a href="<?php the_permalink(); ?>">Bekijk</a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="filter-sec-grds-more-btn">
      <a href="<?php echo esc_url( home_url('contact') );?>">Laat je gratis adviseren en ontdek het beste voor jouw project.</a>
    </div>
  </div> 
  <?php endif; wp_reset_postdata(); ?> 
</section>


<section class="pallet-racking-section has-top-border has-gray-bg" id="magazijnrekken-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="fl-sec-hdr">
            <?php 
            if( !empty($temrm2->name) ) printf('<h3 class="fl-sec-hdr-title">%s</h3>', $temrm2->name); 
            if( !empty($temrm2->description) ) echo wpautop($temrm2->description);
            ?>
          </div>
        </div>
      </div>
  </div>  
<?php 
  $Query2 = new WP_Query(array(
    'post_type' => 'magazijn',
    'posts_per_page'=> 6,
    'orderby' => 'date',
    'order'=> 'desc',
    'tax_query' => array(
      array(
        'taxonomy' => 'magazijn_cat',
        'field' => 'term_id',
        'terms' => $catID2
      )
    )

  ));
  if( $Query2->have_posts() ):
  ?>
  <div class="filter-sec-grds-wrap">
    <div class="filter-sec-grds filterSecGrdsSlider" id="filterSecGrdsSlider">
      <?php 
        while($Query2->have_posts()): $Query2->the_post();
          $overview = get_field('overviewsec', get_the_ID());  
      ?>
      <div class="filter-sec-grd-item">
        <div class="filter-sec-grd-item-inr">
          <div class="filter-pallet-fea-img-cntlr">
            <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
            <?php if( !empty($overview['featured_afbeelding']) ): $gridsrc = cbv_get_image_src( $overview['featured_afbeelding'], 'magazijgrid' );?>
            <div class="filter-pallet-fea-img" style="background: url(<?php echo $gridsrc; ?>);">
              <?php echo cbv_get_image_tag( $overview['featured_afbeelding'], 'magazijgrid' ); ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="filter-pallet-des mHc">
            <h4 class="filter-pallet-des-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php if( !empty($overview['beschrijving']) ) echo wpautop($overview['beschrijving']); ?>
            <a href="<?php the_permalink(); ?>">Bekijk</a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="filter-sec-grds-more-btn">
      <a href="<?php echo esc_url( home_url('contact') );?>">Laat je gratis adviseren en ontdek het beste voor jouw project.</a>
    </div>
  </div>  
  <?php endif; wp_reset_postdata(); ?> 
</section>


<section class="floors-section-wrap" id="tussenvloeren-stapelrekken-sec">
  <div class="container">
      <div class="row">
        <?php 
        $Query3 = new WP_Query(array(
          'post_type' => 'magazijn',
          'posts_per_page'=> 1,
          'orderby' => 'date',
          'order'=> 'desc',
          'tax_query' => array(
            array(
              'taxonomy' => 'magazijn_cat',
              'field' => 'term_id',
              'terms' => $catID3
            )
          )

        ));
        if( $Query3->have_posts() ):
           while($Query3->have_posts()): $Query3->the_post();
          $overview = get_field('overviewsec', get_the_ID());  
        ?>
        <div class="col-md-6">
          <div class="floors-sec-grd-item">
            <div class="floors-sec-grd-item-fea-img-cntrl order-2">
            <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
            <?php if( !empty($overview['featured_afbeelding']) ): $gridsrc = cbv_get_image_src( $overview['featured_afbeelding'], 'magazijgrid2' );?>
            <div class="floors-sec-grd-item-fea-img" style="background: url(<?php echo $gridsrc; ?>);">
              <?php echo cbv_get_image_tag( $overview['featured_afbeelding'], 'magazijgrid2' ); ?>
            </div>
            <?php endif; ?>
            </div>
            <div class="floors-sec-grd-item-des order-1">
              <?php 
              if( !empty(get_the_title()) ) printf('<h4 class="fsgid-title">%s</h4>', get_the_title());
              if( !empty($overview['beschrijving']) ) echo wpautop($overview['beschrijving']); 
              ?>
              <a href="<?php the_permalink(); ?>">Less Meer</a>
            </div>
            
          </div>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?> 
        <?php 
        $Query4 = new WP_Query(array(
          'post_type' => 'magazijn',
          'posts_per_page'=> 1,
          'orderby' => 'date',
          'order'=> 'desc',
          'tax_query' => array(
            array(
              'taxonomy' => 'magazijn_cat',
              'field' => 'term_id',
              'terms' => $catID4
            )
          )

        ));
        if( $Query4->have_posts() ):
           while($Query4->have_posts()): $Query4->the_post();
          $overview = get_field('overviewsec', get_the_ID());  
        ?>
        <div class="col-md-6">
          <div class="floors-sec-grd-item">
            <div class="floors-sec-grd-item-fea-img-cntrl order-2">
            <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
            <?php if( !empty($overview['featured_afbeelding']) ): $gridsrc = cbv_get_image_src( $overview['featured_afbeelding'], 'magazijgrid2' );?>
            <div class="floors-sec-grd-item-fea-img" style="background: url(<?php echo $gridsrc; ?>);">
              <?php echo cbv_get_image_tag( $overview['featured_afbeelding'], 'magazijgrid2' ); ?>
            </div>
            <?php endif; ?>
            </div>
            <div class="floors-sec-grd-item-des order-1">
              <?php 
              if( !empty(get_the_title()) ) printf('<h4 class="fsgid-title">%s</h4>', get_the_title());
              if( !empty($overview['beschrijving']) ) echo wpautop($overview['beschrijving']); 
              ?>
              <a href="<?php the_permalink(); ?>">Less Meer</a>
            </div>
            
          </div>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?> 
      </div>
  </div>    
</section>


<section class="other-systems-sec-wrap" id="andere-systemen-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="fl-sec-hdr">
            <?php 
            if( !empty($temrm5->name) ) printf('<h3 class="fl-sec-hdr-title">%s</h3>', $temrm5->name); 
            if( !empty($temrm5->description) ) echo wpautop($temrm5->description);
            ?>
          </div>
        </div>
      </div>
      <?php 
      $Query5 = new WP_Query(array(
        'post_type' => 'magazijn',
        'posts_per_page'=> 2,
        'orderby' => 'date',
        'order'=> 'desc',
        'tax_query' => array(
          array(
            'taxonomy' => 'magazijn_cat',
            'field' => 'term_id',
            'terms' => $catID5
          )
        )

      ));
      if( $Query5->have_posts() ):
      ?>
      <div class="row">
        <?php 
          while($Query5->have_posts()): $Query5->the_post();
            $overview = get_field('overviewsec', get_the_ID());  
        ?>
        <div class="col-md-6">
          <div class="other-systems-sec-item mHc">
            <div class="other-systems-sec-item-fea-img-cntlr">
            <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
            <?php if( !empty($overview['featured_afbeelding']) ): $gridsrc = cbv_get_image_src( $overview['featured_afbeelding'], 'magazijgrid3' );?>
            <div class="other-systems-sec-item-fea-img" style="background: url(<?php echo $gridsrc; ?>);">
              <?php echo cbv_get_image_tag( $overview['featured_afbeelding'], 'magazijgrid3' ); ?>
            </div>
            <?php endif; ?>
            </div>
            <div class="other-systems-sec-item-des">
              <div class="other-systems-sec-item-des-inr">
                <h4 class="ossi-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php if( !empty($overview['beschrijving']) ) echo wpautop($overview['beschrijving']); ?>
                <a href="<?php the_permalink(); ?>">Bekijk</a>
              </div>
            </div>
          </div>
        </div>
       <?php endwhile; ?>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="ossi-more-btn">
            <a href="<?php echo esc_url( home_url('contact') );?>">Laat je gratis adviseren en ontdek het beste voor jouw project.</a>
          </div>
        </div>
      </div>
      <?php endif; wp_reset_postdata(); ?> 
  </div>    
</section>
<?php
  $showhide_intro2 = get_field('showhide_intro2', $thisID);
  if( $showhide_intro2 ):
    $sections = get_field('sections', $thisID);
?>
<section class="floating-grds-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if( $sections ): ?>
        <div class="floating-grds">
          <?php $i = 1; foreach( $sections as $sec ): ?>
          <div class="floating-grd-row<?php if( $i%2 != 0 ): echo ' floating-grd-row-order-change'; endif; ?> clearfix">
            <div class="floating-grd-row-fea-img-cntrl mHc">
              <?php if( !empty($sec['afbeelding']) ): $secsrc = cbv_get_image_src($sec['afbeelding'], 'secgrid'); ?>
              <div class="floating-grd-row-fea-img" style="background: url(<?php echo $secsrc; ?>);"></div>
              <?php endif; ?>
            </div>
            <div class="floating-grd-row-des mHc">
              <?php 
                if( !empty($sec['titel']) ) printf('<h2 class="floating-grd-row-des-title">%s</h2>', $sec['titel']);
                if( !empty($sec['beschrijving']) ) echo wpautop( $sec['beschrijving'] );
              ?>
            </div>
          </div>
          <?php $i++; endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>    
</section>
<?php endif; ?>
<?php
$ctasec = get_field('ctasec', $thisID);
if( $ctasec ):
  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $show_telefoon = get_field('telephone', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
?>
<section class="cr-leg-post-grid-sec-wrp">
    <div class="ftr-top-dsc-wrp">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
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
                <i>
                  <svg class="ftr-telephone-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#C01718">
                    <use xlink:href="#ftr-telephone-icon-svg"></use>
                  </svg> 
                </i>
                <?php echo $show_telefoon; ?>
              </a>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>