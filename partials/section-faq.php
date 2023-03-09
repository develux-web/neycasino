<section class="faq_section">
    <div class="container">
        <div class="wrapper">
            <div class="col5">
                <div class="name_faq"><?php echo $args['title']; ?></div>
                <div class="desc_faq">
                    <?php echo $args['text']; ?>
                </div>
                <div class="image_faq">
                    <img src="<?php echo $args['image']; ?>" alt="<?php echo $args['title']; ?>" loading="lazy">
                </div>
            </div>
            <div class="col7">
                <div class="wrapper_accordion">
                    <?php
                    $featured_faq = $args['faq'];
                    if( $featured_faq ): ?>
                            <?php foreach( $featured_faq as $faq ):
                                $title = get_the_title( $faq->ID );
                                $answer = get_field( 'answer', $faq->ID );
                                ?>
                                <div class="accordion_item">
                                    <button class="accordion"><?php echo $title; ?></button>
                                    <div class="panel">
                                        <div class="list_recent">
                                            <?php echo $answer; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
