
    <footer class="footer " dir="ltr">
        <div class="row column">
            <div class="column footer__sign-up">
                <div class="description">
                    <p><?php echo the_field('footer_text', 'option'); ?></p>
                </div>

                <form id="form_637783817465669957" class="newsletter-sign-up" data-abide novalidate data-ajax-form="" data-post-url="" data-success-container=".success-container">
                    <div class="newsletter-sign-up__input-container">
                        <label class="input-field">
                            <span class="input-field__label-text show-for-sr">Your email address</span>

                            <input id="Email2" class="input-field__input" type="email" name="Email"
                                placeholder="Your email address" required />
                            <span class="form-error">Please enter a valid email address.</span>

                        </label>
                        <label class="checkbox">
                            <input name="privacy-policy" type="checkbox" required />
                            <span class="checkbox__styled"></span>
                            <span class="checkbox__label-text">
                                <p><span>*I have read the&nbsp;</span><a title="Privacy Policy"
                                        href="about/privacy/index.html" target="_blank">Privacy
                                        Policy</a><span>&nbsp;and agree to its terms.</span></p>
                            </span>
                            <span class="form-error">Please read and agree to the Privacy Policy.</span>

                        </label>
                        <input name="demb_annual_sales" type="hidden" value="">
                        <input name="demb_company_name" type="hidden" value="">
                        <input name="demb_data_source" type="hidden" value="">
                        <input name="demb_country_name" type="hidden" value="">
                        <input name="demb_demandbase_sid" type="hidden" value="">
                        <input name="demb_employee_count" type="hidden" value="">
                        <input name="demb_industry" type="hidden" value="">
                        <input name="demb_Sub_Industry" type="hidden" value="">
                        <input name="demb_website" type="hidden" value="">
                    </div>
                    <button id="newsletterBtn" class="btn" type="submit">SUBSCRIBE</button>
                </form>



            </div>
        </div>
        <div class="footer__small-view-border show-for-small-only">
        </div>

        <div class="row column footer__content  ">


            <div class="column footer__top-row">


                <?php  if ( has_custom_logo() ) : the_custom_logo(); else : ?>
                    <a href="<?php echo esc_url(home_url())  ?>">
                        <img src="<?php echo get_theme_file_uri( 'images/logo_white.svg' ) ?>" />
                    </a>  
                  <?php endif ?>
                <div class="footer__social">
                    <ul class="social-links ">
                        <li class="social-links__item">
                            <a class="social-links__link" href="<?php echo the_field('linked_in_url', 'option'); ?>" target="_blank">
                                <i class="icon-linkedin-in" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="social-links__item">
                            <a class="social-links__link" href="<?php echo the_field('twitter_url', 'option'); ?>" target="_blank">
                                <i class="icon-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="social-links__item">
                            <a class="social-links__link" href="<?php echo the_field('facebook_url', 'option'); ?>" target="_blank">
                                <i class="icon-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="social-links__item">
                            <a class="social-links__link" href="<?php echo the_field('youtube_url', 'option'); ?>" target="_blank">
                                <i class="icon-youtube" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="social-links__item">
                            <a class="social-links__link" href="<?php echo the_field('instagram', 'option'); ?>" target="_blank">
                                <i class="icon-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="column footer__bottom-row">
                <div class="footer__links">
                    <!-- <a href="about/contact-us/index.html" aria-label="Contact Bain" class="">Contact us</a>
                    <a href="about/contact-us/index.html" aria-label="Contact Bain" class="">Contact us</a>
                    <a href="about/contact-us/index.html" aria-label="Contact Bain" class="">Contact us</a>
                    <a href="about/contact-us/index.html" aria-label="Contact Bain" class="">Contact us</a>

                    -->
                        <?php
                                                
                          if(has_nav_menu('footer')){

                            wp_nav_menu([
                              'theme_loacation' => 'footer',
                              'container' => 'false',
                              'fallback_cd' => false,
                              'depth' => 4,
                              
                              
                              ]);
                          }
                    
                    ?>
            

                </div>
                <div class="footer__legal">
                    <p class=""><?php echo the_field('footer_copyright', 'option'); ?>.</p>

                </div>
            </div>
        </div>
    </footer>




    <input type="hidden" data-rectangle-image value="" />




    <div class="modal-component reveal modal-component--cookie" id="cookie-privacy" data-close-on-click="false" data-close-on-esc="false" data-reveal>
        <p class="heading">Cookies help us improve your experience</p>
        <div class="js-cookie-modal-description">
            <p>We use cookies to improve website functionality and performance throughout Bain.com.</p>
            <p>Click "<em>accept all cookies</em>&rdquo; to continue browsing the site with its full range of features enabled. Or, expand the section below to learn about the types of cookies we use and review your options. You can also read our <a href="about/cookie-policy/index.html">Cookie Policy</a>&nbsp;and
                our
                <a href="about/privacy/index.html">Privacy Policy</a> for more detailed information.
            </p>
        </div>

        <ul class="accordion">
            <li class="accordion-item">
                <a href="#" class="accordion-title js-accordion-title">How do we use cookies?</a>

                <div class="accordion-content">
                    <h5>Strictly necessary cookies</h5>
                    <p>These are essential for you to browse the website and use its core features.</p>
                    <h5>Functionality cookies</h5>
                    <p>These help us to remember the choices you made in the past, like the language you prefer.</p>
                    <h5>Analytical or performance cookies</h5>
                    <p>These help us understand how you use our site, like which pages you visited, so we can improve website functionality.</p>
                    <h5>Targeting or advertising cookies</h5>
                    <p>These are typically provided by third parties, such as social networks, to help deliver relevant content for you.</p>
                </div>
            </li>
        </ul>

        <div class="modal-component--cookie__ctas">
            <button class="btn " id="CookieModalAcceptAllLink" type="button" data-close>
                ACCEPT ALL COOKIES
            </button>

            <div class="modal-component--cookie__text-link js-cookie-modal-text-link hide">
                <a class="textlink" id="CookieModalStrictOnlyLink" data-close>Use only strictly necessary cookies</a>
            </div>
        </div>
    </div>



<?php wp_footer(); ?>

</body>

</html>