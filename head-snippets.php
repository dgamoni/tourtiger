<script>
    <?php $fb_id = get_field('fb_id','option'); ?>
   //var fbID = "824505867653741";
   var fbID = "<?php echo $fb_id; ?>";
</script>
<?php if(have_rows('head_snippets', 'option')): ?>
                        
<?php while(have_rows('head_snippets', 'option')): the_row(); ?>
                           
<?php $snippet = get_sub_field('snippet'); ?>
<?php if($snippet):
echo $snippet;                             
endif; ?>
                                   
<?php endwhile; ?> 
                        
<?php endif; ?>

