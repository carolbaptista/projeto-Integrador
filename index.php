    <?php get_header(); ?> 
    <div class="container">

    <p>&nbsp;</p>
<?php get_sidebar(); ?>
<div class="row">
     <?php // INICIO IMPRIMIR POSTS  ?>
       
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
            <div class="card text-white bg-dark col-mb-3" style="max-width: 18rem; border-radius: 10px; margin: 20px">
                <div class="card-header bg-success ">
                    <center>
                    <a href="<?php echo get_attachment_link(); ?>">
                        <?php the_title(); ?>
                    </a> 
                    </center>
                </div>
                <div class="card-body">
                <h5 class="card-title"><center> <?php the_content(); ?> </center></h5>
                <p class="card-text "><center><?php comments_number('0 Comentários', '1 Comentário', '% Comentários' );?> </center></p>
                    
             </div>
             <div class="card-footer card text-white bg-success">
                 <a href="#" class="btn btn-dark">Ver mais</a>

             </div>
            </div>
        <?php endwhile; else : ?>
        <p><?php _e( 'Nenhum post encontrado!' ); ?>
                    <?php endif; ?></p>
            

            <?php // FIM IMPRIMIR POST ?>


    </div>
    </div>
    <?php get_footer(); ?>

    <?php // get_header() = puxa o arquivo header para a pagina inicial;
          // > if have_post... = imprime os posts ;
          // GET_SIDEBAR = PUXA O SIDEBAR;
          // ... FOOTER = PUXA O FOOTER; 
    ?>