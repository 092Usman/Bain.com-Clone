
<?php $main_slider = get_field('main_slider');     ?>



<header class="hero hero--homepage hero--homepage-transparent">
        <div class="hero__carousel" data-homepage-carousel>



<?php
        foreach( $main_slider as $slide ) {


           ?>
         



            <div class="hero__slide row column" data-click="true" data-engagementclick="homepageherounit" data-url="/insights/the-working-future-more-human-not-less-future-of-work-report/">
                <a href="<?php echo $slide['slide_leran_more_url'] ?>" target="" class="hero__full-width-link" aria-label="Learn more"></a>
                <a href="<?php echo $slide['slide_leran_more_url'] ?>" target="" aria-label="Learn more" class="hero__text-content large-5 column">
                    <p class="hero__tag" data-slide-nav-title="<?php echo $slide['slide_title'] ?>"><?php echo $slide['slide_title'] ?></p>
                    <h2 class="showDesktopTitle hero__title"><?php echo $slide['slide_text'] ?></h2>

                    <h2 class="showMobileTitle hero__title"><?php echo $slide['slide_text'] ?></h2>

                    <span class="hero__cta ">Learn more<span class="icon-long-arrow-right"></span></span>
                </a>
                <div class="hero__image center">
                    <div class="hero__overlay"></div>
                    <picture>
                        <?php
                         //   $img_atts = wp_get_attachment_image_src( $slide['background_image'], $default );
                         //   $img_src = $img_atts[0];
                        ?>
                          <img src="<?php echo $slide['background_image']['url'] ?>" data-object-fit />
                    </picture>
                </div>
            </div>


            <?php   
        }
      
      ?>     
            
        </div>



        <div class="hero__nav-container row column">
            <div class="column" data-carousel-nav></div>
        </div>
        <div class="hero__scroll-indicator">
            <span class="hero__scroll-text">Scroll</span>
            <span class="icon-chevron-down" id="scrollToNextSection"></span>
        </div>
    </header>


