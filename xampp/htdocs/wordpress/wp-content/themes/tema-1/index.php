<?php get_header(); ?>

<div class="row">
  <!-- Entradas -->
  <div class="col-lg-12">
    <div class="row">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <!-- Entrada -->
          <div class="card-body col-12 col-md-4 col-lg-2 mt-3">
            <div class="row justify-content-center">
              <div class="col-12 d-flex justify-content-center">
                <a href="<?php the_permalink(); ?>">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('tamañoImagen', array(
                      'class' => 'img-fluid mb-3 portada'
                    ));
                  }
                  ?>
              </div>
              <div class="col-12">
                <h6 class="text-center"><?php the_title(); ?></h6>
              </div>
              </a>
            </div>
          </div>
          <!-- Entrada -->
      <?php endwhile;
      endif; ?>
    </div>
    <!-- Paginación -->
    <div class="card-body">
      <?php get_template_part('template-parts/content', 'paginacion'); ?>
    </div>
    <!-- Paginación -->

  </div>
  <!-- Entradas -->
</div>
</div>
<!-- Contenido -->


<?php get_footer(); ?>