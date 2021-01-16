<div class="col-11 col-md-8 col-lg-4">
                <article class="blog-card mb-5 pt-4 d-flex flex-column  align-items-center">
                  <div class="blog-card-body text-center d-flex flex-column justify-content-around align-items-center">
                  <header class="entry-header">

		<?php the_title( '<h5 class="entry-title blog-card-title font-weight-bold mb-4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a> </h5>' ); ?>

	
	</header>
                    
	<div class="entry-excerpt blog-card-text px-4 px-lg-0">

<?php the_excerpt(); ?>

</div>
                   
                 <div class="blog-card-img">
                 <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                 </div>
                 <div class="blog-card-bottom py-4 row d-flex justify-content-between font-weight-bold">
                  <div class="col-4"> <i class="fas fa-heart"></i> <span class="ml-2">699 </span></div> <div class="col-4">
                  <i class="fas fa-comment-dots"></i>
                   <span class="ml-2">145</span>
                  </div> <a class="col-4 font-weight-bold" href="#">SHARE</a>
                 </div>
                  </div>
                </article>
              </div>