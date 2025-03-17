<?php

// Add stylesheets and scripts
    function main_scripts() {

        $css_version = '1.8';
        $js_version = '1.5';

    	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), $css_version );
        wp_enqueue_script( 'feather-icons', 'https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js', array(), '4.0.0', true );
        wp_enqueue_script( 'index', get_template_directory_uri() . '/js/index.js', array( 'jquery' ), $js_version, true );
    }

    add_action( 'wp_enqueue_scripts', 'main_scripts' );

// Add Google Fonts
function main_google_fonts() {
    // Lägg till preconnect för bättre prestanda
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action('wp_head', 'main_google_fonts');

function enqueue_google_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap', false);
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');


// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Disable Cookies
function disable_all_cookies() {
    foreach ($_COOKIE as $cookie_name => $cookie_value) {
        setcookie($cookie_name, '', time() - 3600, '/');
    }
    
    $all_cookies = headers_list();
    foreach ($all_cookies as $cookie) {
        if (strpos($cookie, 'Set-Cookie') === 0) {
            header_remove('Set-Cookie');
        }
    }
}
add_action('init', 'disable_all_cookies');

function sheet_value_shortcode($atts) {
    $API = 'AIzaSyAOGMAyUhf2iwKt4F7GW-SWZkjZKtwK3qY';
    $google_spreadsheet_ID = '1-EQXuLObwE6NcKWdzAvgF4cCrdRFGK3NtMPjH5pQSj8';
    $api_key = esc_attr($API);

    $location = $atts['location'];

    $cell_url = "https://sheets.googleapis.com/v4/spreadsheets/$google_spreadsheet_ID/values/$location?key=$api_key";

    $cell_response = wp_remote_get($cell_url);

    if (is_wp_error($cell_response)) {
        return 'Fel vid hämtning av data.';
    }

    $json_body = json_decode(wp_remote_retrieve_body($cell_response), true);
    
    if (isset($json_body['values'][0][0])) {
        return $json_body['values'][0][0];
    } else {
        return 'Error!';
    }
}

add_shortcode('get_sheet_value', 'sheet_value_shortcode');


