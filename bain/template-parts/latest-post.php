
<section class="section column row" id="2ffe7c60-906a-4dbe-aa25-6c09b5017735" data-magellan-target="2ffe7c60-906a-4dbe-aa25-6c09b5017735">
  <div class="section__midline-heading">
      <h3 class="">Our Latest Insights</h3>
  </div>

    <div class="card__grid column row feed__row">
        <div class="row small-up-1 medium-up-2 large-up-2">


        <?php

          $latestBlogPosts = new WP_QUERY(array(
              'posts_per_page' => 4,
              'order' => 'ASC',
          ));

          while ($latestBlogPosts->have_posts())
          {
              $latestBlogPosts->the_post();
          ?>
                  
          <div class="column">
                <div class="card card--insights " dir="ltr">
                    <div class="card__wrapper" data-click="true" data-url="/insights/the-working-future-more-human-not-less-future-of-work-report/" data-srcType="articleGrid">
                        <div class="card__image">
                            <a href="<?php the_permalink() ?>">
                                <div class="card__image-wrap">
                                  <picture>
                                    <img data-object-fit src="<?php the_post_thumbnail_url('post-thumbnail') ?>" />
                                  </picture>
                                </div>
                            </a>
                        </div>
                        <div class="card__content-container">

                            <div class="card__content">
                                

                                  <span class="card__tag">
                                    <?php the_category( ' ' ); ?>
                                  </span>

                                  <!-- <span class="card__tag">Organization</span> -->

                                  <a href="<?php the_permalink() ?>">
                                    <h5 class=""><?php the_title() ?></h5>
                                  </a>
                                  <div class="card__desc rte__heading"><?php echo wp_trim_words(get_the_excerpt(), 15) ?></div>

                                </a>
                            </div>
                            <div class="card__footer">
                                <div>
                                    <span class="">Report</span>

                                    <!--RED-3037 hiding dates from article grid blocks-->

                                </div>
                                <a href="#" class="card__bookmark" title="Save to Red Folder" data-hover-text="Save to Red Folder" data-remove-hover="Remove" data-redfoldersave="true" data-bookmark-link data-show-on="large" data-cookie-name="redFolder" data-add-message="#red-folder-added-message"
                                    data-remove-message="#red-folder-removed-message" data-tooltip aria-haspopup="true" data-disable-hover="false" data-click-open="false" data-template-classes="red-folder--tooltip" data-pageid="1367371" data-endpoint="/en/api/redfolder/getcontent"
                                    data-databaseendpointurl="/en/api/redfolder/addUpdateUserBookmark">
                                    <span class="icon-bookmark"></span>
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

          <?php } wp_reset_postdata() ?>

        

        </div>
    </div>


    <div class="column row centered">
        <a class="btn btn--secondary" href="insights/index30ce.html?filters=types(426,427,428)" data-ctabuttonclick="true">See all insights</a>
    </div>
</section>

