                    <div class="tour">
                        
                        <?php if (has_post_thumbnail()) {
            $thumb = get_post_thumbnail_id();
            $img_url = wp_get_attachment_url( $thumb,'full'); //get img URL
            if($col == 6):
            $image = aq_resize( $img_url, 559, 327, true ); //resize & crop img
            else:
            $image = aq_resize( $img_url, 450, 368, true ); //resize & crop img
            endif;
            $button_label = get_sub_field('button_label');
            ?>
            <a href="<?php the_permalink() ?>" class="tile-image">
                <img alt="<?=$image?>" src="<?=$image?>" class="img-responsive center-block" />
                <div class="tile-tint"></div>
            </a>
            <?php
        }
        ?>
                        <div class="title-excerpt">
                            <strong>
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title(); ?>
                                </a>
                            </strong>
                            
                        </div>
                        
                        <div class="view-btn-wrapper">
                            <div class="view-tour-btn">
                                <a href="<?php the_permalink() ?>">
                                    <?php echo $button_label; ?>
                                </a>
                            </div>
                        </div>
                        
                    </div>
