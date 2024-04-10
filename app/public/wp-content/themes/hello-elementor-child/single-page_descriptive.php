<?php
/*
 * Template Name: Page Descriptive
 * Template Post Type: bandes_dessinee
 */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Start the Loop
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <div class="webcomic-details">
                        <p>Catégorie: <?php echo pods_field('Catégorie'); ?></p>
                        <p>Titre: <?php echo pods_field('Titre'); ?></p>
                        <p>J'aimes: <?php echo pods_field('J\'aimes'); ?></p>
                        <img src="<?php echo pods_image_url('Couverture'); ?>" alt="<?php the_title(); ?>">
                        <p>Nombres d'épisode: <?php echo pods_field('Nombres d\'épisode'); ?></p>
                        <p>Auteur: <?php echo pods_field('Auteur'); ?></p>
                        <p>Description: <?php echo pods_field('Description'); ?></p>
                        <img src="<?php echo pods_image_url('Bannière'); ?>" alt="<?php the_title(); ?>">
                        <!-- Add other fields as needed -->
                    </div>
                </div><!-- .entry-content -->

            </article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile; // End of the loop. ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
