<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<main id="content" <?php post_class( 'site-main' ); ?>>

    <?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
        <header class="page-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header>
    <?php endif; ?>

    <div class="page-content">
        <?php the_content(); ?>

        <?php
        // Retrieve permalink for the current post.
        $post_link = get_permalink();
        ?>

        <div class="webcomic">
            <!-- Output webcomic content here, such as title, image, etc. -->
            <h2><a href="<?php echo esc_url( $post_link ); ?>"><?php the_title(); ?></a></h2>
            <div class="webcomic-image">
                <a href="<?php echo esc_url( $post_link ); ?>">
                    <img src="<?php echo pods_image_url( 'Couverture' ); ?>" alt="<?php echo pods_field( 'Titre' ); ?>">
                </a>
            </div>
            <!-- Other webcomic content goes here -->
        </div>
    </div>

    <div class="post-tags">
        <?php the_tags( '<span class="tag-links">' . esc_html__( 'Tagged ', 'hello-elementor' ), null, '</span>' ); ?>
    </div>

    <?php wp_link_pages(); ?>

    <?php comments_template(); ?>

</main>
