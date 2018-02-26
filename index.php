<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <?php $query = new WP_Query( array( 'category_name' => 'about' ) ); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

                get_template_part( 'page-components/about', get_post_format() );

            endwhile; endif;
            ?>

            <div class="row">
                <div class="col">
                    <h1>Editors</h1>
                </div>
            </div>

            <div class="row">
                <?php $query = new WP_Query( array( 'category_name' => 'editor' ) ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

                    get_template_part( 'page-components/editor', get_post_format() );

                endwhile; endif;
                ?>
            </div> <!-- /.row -->

        </div> <!-- /.col-md-8 -->

        <div class="col-md-4">
            <?php $query = new WP_Query( array( 'category_name' => 'guidelines' ) ); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

                get_template_part( 'page-components/about', get_post_format() );

            endwhile; endif;
            ?>
        </div> <!-- /.col-md-4 -->
    </div>
</div> <!-- /.container -->

<!-- Modal for Submissions -->
<?php while ( have_posts() ) : the_post();

get_template_part( 'page-components/submissions_modal', get_post_format() );

endwhile;
?>

<?php get_footer(); ?>