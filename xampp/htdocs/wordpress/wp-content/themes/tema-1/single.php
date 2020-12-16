<?php get_header(); ?>

<div class="row">
  <!-- Entradas -->
  <div class="col-lg-12">
  
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Entrada -->
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <!--Titulo-->
                  <h2 class="m-0"><?php the_title(); ?></h2>
                  <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?></p>
                  <p class="small">
                    Categorías: <?php the_category(' / '); ?>
                  </p>
                </div>
                <!--Imagen-->
                <div class="col-2 p-0 d-flex justify-content-center mt-2">
                  <div>
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('tamañoImagen', array(
                        'class' => 'img-fluid mb-3'
                      ));
                    }
                    ?>
                  </div>
                </div>
                <!--Sinopsis-->
                <div class="col-12 col-md-10">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </div>
          <?php
          if (comments_open() || get_comments_number()) :
            comments_template();
          endif;
          ?>
        </div>
        <!-- Entrada -->
    <?php endwhile;
    endif; ?>

  </div>
  <!-- Entradas -->
</div>
</div>
<!-- Contenido -->


<?php get_footer(); ?>