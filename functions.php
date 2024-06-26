<?php
// Custom function to add content after the main content
function custom_content_after_main() {
    echo '<p>This is custom content added after the main content.</p>';
}
// Attach the custom function to the custom action hook
add_action('wprealizer_after_main_content', 'custom_content_after_main');
