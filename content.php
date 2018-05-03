
<!-- Blog Post -->

<div class="card mb-4">
  <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
  <div class="card-body">
    <h2 class="card-title"><?php the_title(); ?></h2>
    <p class="card-text"><?php the_content(); ?></p>
    <a href="#" class="btn btn-primary">Read More &rarr;</a>
  </div>

  <div class="card-footer text-muted">
    Posted on <?php the_date(); ?> by
    <a href="#"><?php the_author(); ?></a>
  </div>

</div>