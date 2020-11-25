<?php
/**
 * Template Name: Front Page Template
 *
 */
	get_header(); ?>

 <?php get_template_part( 'menu', 'mobile' ); ?>

<div class="front-page-hero">
		  <?php echo do_shortcode("[slideshow id=89]"); ?>
</div>

<div class="container uw-body">

  <div class="row">

    <div class="uw-content" role='main'>

      <div id='main_content' class="uw-body-copy" tabindex="-1">

        <?php
          // Start the Loop.
          while ( have_posts() ) : the_post();

            //the_content();
            get_template_part( 'content', 'page-noheader' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
              comments_template();
            }

          endwhile;
        ?>

      </div>

    </div>

  </div>
</div>
<?php get_footer(); ?>