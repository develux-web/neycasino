<section>
    <div class="container">
        <div class="wrapper">
            <div class="col12">
                <div class="block_casino">
                    <h2 class="name"><?php echo $args['title']; ?></h2>
                    <div class="list_casino">

                        <?php
                        $featured_casino = $args['casino'];
                        if( $featured_casino ): ?>
                            <?php foreach( $featured_casino as $casino ):
                                $i = 1;
                                $title = get_the_title( $casino->ID );
                                $color = get_field( 'color', $casino->ID );
                                $rating = get_field( 'rating', $casino->ID );
                                $offer = get_field( 'offers', $casino->ID );
                                $bonus = get_field( 'bonus', $casino->ID );
                                $link = get_field( 'link_casino', $casino->ID );
                                $image_url = wp_get_attachment_url(get_post_thumbnail_id($casino->ID), 'full');
                                ?>

                                <div class="item">
                                    <div class="image_logo" style="background: <?php echo $color;?>;">
                                        <img src="<?php echo $image_url; ?>" alt="">
                                    </div>
                                    <div class="right_item">
                                        <div class="middle_content">
                                            <div class="name_casino">
                                                <div class="title"><?php echo $i; ?>. <?php echo $title; ?></div>
                                                <div class="rating">
                                                    <div class="star">
                                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.88688 17.5684L5.3634 11.1853L0.411377 6.89203L6.9535 6.32414L9.49766 0.304474L12.0418 6.32414L18.5839 6.89203L13.6319 11.1853L15.1084 17.5684L9.49766 14.1838L3.88688 17.5684Z" fill="#FFC700"/>
                                                        </svg>
                                                    </div>
                                                    <div class="star">
                                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.88688 17.5684L5.3634 11.1853L0.411377 6.89203L6.9535 6.32414L9.49766 0.304474L12.0418 6.32414L18.5839 6.89203L13.6319 11.1853L15.1084 17.5684L9.49766 14.1838L3.88688 17.5684Z" fill="#FFC700"/>
                                                        </svg>
                                                    </div>
                                                    <div class="star">
                                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.88688 17.5684L5.3634 11.1853L0.411377 6.89203L6.9535 6.32414L9.49766 0.304474L12.0418 6.32414L18.5839 6.89203L13.6319 11.1853L15.1084 17.5684L9.49766 14.1838L3.88688 17.5684Z" fill="#FFC700"/>
                                                        </svg>
                                                    </div>
                                                    <div class="star">
                                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.88688 17.5684L5.3634 11.1853L0.411377 6.89203L6.9535 6.32414L9.49766 0.304474L12.0418 6.32414L18.5839 6.89203L13.6319 11.1853L15.1084 17.5684L9.49766 14.1838L3.88688 17.5684Z" fill="#FFC700"/>
                                                        </svg>
                                                    </div>
                                                    <div class="star">
                                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.11192 4.96119V12.0485L11.9741 13.7976L11.2245 10.5265L13.7459 8.34583L10.4294 8.05053L9.11192 4.96119ZM3.50114 17.5684L4.97766 11.1853L0.0256348 6.89203L6.56776 6.32414L9.11192 0.304474L11.6561 6.32414L18.1982 6.89203L13.2462 11.1853L14.7227 17.5684L9.11192 14.1838L3.50114 17.5684Z" fill="#FFC700"/>
                                                        </svg>
                                                    </div>
                                                    <div class="text">
                                                        <?php echo $rating; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                            <div class="offers_casino">
                                                <div class="title">CASINOT ERBJUDER:</div>
                                                <div class="description"><?php echo $offer; ?></div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <ul>
                                                <?php foreach( $bonus as $item ): ?>
                                                <li>
                                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.22509 13.4675L14.6309 7.06171L13.3588 5.78963L8.22509 10.9234L5.6355 8.33379L4.36342 9.60587L8.22509 13.4675ZM9.49717 18.3741C8.24024 18.3741 7.05902 18.1356 5.95352 17.6586C4.84802 17.1816 3.88639 16.5342 3.06863 15.7164C2.25086 14.8986 1.60346 13.937 1.12643 12.8315C0.649404 11.726 0.410889 10.5448 0.410889 9.28785C0.410889 8.03092 0.649404 6.8497 1.12643 5.7442C1.60346 4.6387 2.25086 3.67707 3.06863 2.85931C3.88639 2.04154 4.84802 1.39414 5.95352 0.917113C7.05902 0.440084 8.24024 0.201569 9.49717 0.201569C10.7541 0.201569 11.9353 0.440084 13.0408 0.917113C14.1463 1.39414 15.108 2.04154 15.9257 2.85931C16.7435 3.67707 17.3909 4.6387 17.8679 5.7442C18.3449 6.8497 18.5835 8.03092 18.5835 9.28785C18.5835 10.5448 18.3449 11.726 17.8679 12.8315C17.3909 13.937 16.7435 14.8986 15.9257 15.7164C15.108 16.5342 14.1463 17.1816 13.0408 17.6586C11.9353 18.1356 10.7541 18.3741 9.49717 18.3741Z" fill="#76d77e"/>
                                                    </svg>
                                                    <span><?php echo $item; ?></span>
                                                </li>
                                                <?php endforeach;  ?>
                                            </ul>
                                            <a href="<?php echo $link; ?>" class="btn">TILL EXPEXT</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            $i++;
                            endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
