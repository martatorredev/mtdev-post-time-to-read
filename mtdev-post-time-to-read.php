<?php
/**
 * Plugin Name: MTDev – Post Time to Read Block
 * Description: Añade un bloque personalizado que muestra el tiempo estimado de lectura.
 * Version: 1.0.0
 * Author: Marta Torre
 * Author URI: https://martatorre.dev
 * Text Domain: mtdev-post-time-to-read
 */

function mtdev_register_time_to_read_block() {
    register_block_type( __DIR__ . '/build', [
        'render_callback' => 'mtdev_render_time_to_read_block',
    ]);
}
add_action( 'init', 'mtdev_register_time_to_read_block' );

function mtdev_render_time_to_read_block( $attributes, $content, $block ) {
    global $post;

    if ( ! $post || ! isset( $post->post_content ) ) {
        return '';
    }

    $word_count   = str_word_count( wp_strip_all_tags( $post->post_content ) );
    $reading_time = ceil( $word_count / 200 );

    return sprintf(
        '<p class="wp-block-mtdev-post-time-to-read">Tiempo de lectura: %d minutos</p>',
        $reading_time
    );
}

