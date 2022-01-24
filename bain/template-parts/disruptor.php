
<?php $disruptor = get_field('disruptor');  ?>

<?php  if( $disruptor ): ?>




<section class="disruptor-side-by-side">
                <div class="row column disruptor-side-by-side__content">
                    <div class="column">
                        <h2 class=""><?php echo $disruptor['disruptor_left']['question_1'] ?></h2>

                        <a href="<?php echo $disruptor['disruptor_left']['button_1_url'] ?>" class="btn" data-ctabuttonclick="true"><?php echo $disruptor['disruptor_left']['button_1_text'] ?></a>
                    </div>
                    <div class="column">
                        <h2 class=""><?php echo $disruptor['disruptor_right']['question_2'] ?></h2>

                        <a href="<?php echo $disruptor['disruptor_right']['button_2_url'] ?>" class="btn" data-ctabuttonclick="true"><?php echo $disruptor['disruptor_right']['button_2_text'] ?></a>
                    </div>
                </div>
            </section>

<?php endif; ?>