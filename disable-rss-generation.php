<?php
/*
  Plugin Name: Disable RSS Generation
  Plugin URI: https://github.com/osawa-naotaka/disable-rss-generation
  Description: disable RSS generation.
  Version: 1.0.0
  Author: osawa naotaka
  Author URI: https://github.com/osawa-naotaka
  License: MIT
 */

add_action('init', function () {
    // stop generating RSS feeds.
    remove_action('do_feed_rdf', 'do_feed_rdf');
    remove_action('do_feed_rss', 'do_feed_rss');
    remove_action('do_feed_rss2', 'do_feed_rss2');
    remove_action('do_feed_atom', 'do_feed_atom');

    // remove feed link
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
});
