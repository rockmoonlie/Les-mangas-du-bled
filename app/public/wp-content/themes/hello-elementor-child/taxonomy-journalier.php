<?php
// Check if WordPress is loaded
if ( function_exists( 'get_terms' ) && function_exists( 'is_wp_error' ) && function_exists( 'get_term_link' ) && function_exists( 'esc_html' ) && function_exists( 'esc_url' ) ) {
    // Get terms from the "Journalier" taxonomy
    $terms = get_terms( array(
        'taxonomy' => 'journalier',
        'hide_empty' => false,
    ) );

    // Check if terms were found
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
        // Start an unordered list
        echo '<ul>';

        // Loop through each term
        foreach ( $terms as $term ) {
            // Generate the URL for the term
            $term_link = get_term_link( $term );
            // Output the term as a list item with the generated URL
            echo '<li><a href="' . esc_url( $term_link ) . '">' . esc_html( $term->name ) . '</a></li>';
        }

        // Close the unordered list
        echo '</ul>';
    } else {
        // No terms found
        echo '<p>No terms found</p>';
    }
} else {
    // WordPress functions not available
    echo '<p>Error: WordPress functions are not available.</p>';
}
?>
