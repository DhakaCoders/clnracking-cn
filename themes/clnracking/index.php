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
              <h1 class="page-banner-title">NIEUWS</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->

<section class="hm-nieuws-sec">
  <div class="container">
    <div class="row">
      <?php 
        if( have_posts() ):
      ?>
      <div class="col-md-12">
        <div class="hm-nieuws-sec-grds" id="hmNieuwsSecGrdsSlider">
        <?php 
          while(have_posts()): the_post(); 
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
      <div class="pagi-select-area clearfix">
        <div class="fl-pagi-pagi-ctlr">
        <?php
          global $wp_query;

          $big = 999999999; // need an unlikely integer
          $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

          echo paginate_links( array(
            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'type'      => 'list',
            'prev_text' => __('«'),
            'next_text' => __('»'),
            'format'    => '?paged=%#%',
            'current'   => $current,
            'total'     => $wp_query->max_num_pages
          ) );
        ?>
        </div>
      </div>
      <?php endif; ?>
    </div>   
  </div> 
</section>

<?php get_footer(); ?>