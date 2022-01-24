<?php $featured_multimedia = get_field('featured_multimedia');  ?>

<?php  if( $featured_multimedia ): ?>


<section class="featured-multimedia row">
                <a href="<?php echo $featured_multimedia['button_url'] ?>" class="featured-multimedia__text-content large-5 column">
                    <p class="featured-multimedia__tag"><?php echo $featured_multimedia['subtitle'] ?></p>

                    <h2 class="featured-multimedia__title"><?php echo $featured_multimedia['title'] ?></h2>

                    <span class="btn btn--secondary btn--light"><?php echo $featured_multimedia['button_text'] ?></span>

                </a>
                <div class="featured-multimedia__image center">


                    <picture>
                        <img data-object-fit src="<?php echo $featured_multimedia['background_image']['url'] ?>" />
                    </picture>

                </div>
            </section>

<?php endif; ?>