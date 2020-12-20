<?php 


$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
// $features_section_image = get_field('features_section_image');

?>




<section id="course-features">
        <div class="container">
            <div class="section-header">
                <?php 
                    if ( !empty($feature_section_image)) : ?>
                        <img src="<?php echo $feature_section_image['url']; ?>" alt="<?php echo $feature_section_image['alt ']; ?>">
                    
                <?php endif; ?>
                <h2><?php echo $features_section_title ?></h2>
            </div>

            <div class="row">

                <?php $loop = new WP_Query( array('post_type' => 'course_features', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

                <?php while( $loop->have_posts()) : $loop->the_post();?>   
                
                    <div class="col-sm-2">
                        <i class="<?php the_field('course_feature_icon'); ?>"></i>
                        <h4><?php the_title() ?></h4>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>