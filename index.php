
<?php get_header(); ?>

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a>
            <small><?php echo get_bloginfo( 'description' ); ?></small>
          </h1>
      
          <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
    
              get_template_part( 'content', get_post_format() );
  
           endwhile; endif; 
          ?>
          
          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

      <?php get_sidebar(); ?>

      </div>
      <!-- /.row -->

<?php get_footer(); ?>