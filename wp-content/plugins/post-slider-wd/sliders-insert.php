<?php

function wdps_insert() {
  global $wpdb;
  $wdpsslider = "CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "wdpsslider` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(127) NOT NULL,
    `published` tinyint(1) NOT NULL,
    `full_width` tinyint(1) NOT NULL,
    `width` int(4) NOT NULL,
    `height` int(4) NOT NULL,
    `bg_fit` varchar(16) NOT NULL,
    `align` varchar(8) NOT NULL,
    `effect` varchar(16) NOT NULL,
    `time_intervval` int(4) NOT NULL,
    `autoplay` tinyint(1) NOT NULL,
    `shuffle` tinyint(1) NOT NULL,
    `music` tinyint(1) NOT NULL,
    `music_url` mediumtext NOT NULL,
    `preload_images` tinyint(1) NOT NULL,
    `background_color` varchar(8) NOT NULL,
    `background_transparent` int(4) NOT NULL,
    `glb_border_width` int(4) NOT NULL,
    `glb_border_style` varchar(16) NOT NULL,
    `glb_border_color` varchar(8) NOT NULL,
    `glb_border_radius` varchar(32) NOT NULL,
    `glb_margin` int(4) NOT NULL,
    `glb_box_shadow` varchar(127) NOT NULL,
    `image_right_click` tinyint(1) NOT NULL,
    `layer_out_next` tinyint(1) NOT NULL,
    `layer_word_count` int(4) NOT NULL,
    `prev_next_butt` tinyint(1) NOT NULL,
    `play_paus_post_butt` tinyint(1) NOT NULL,
    `navigation` varchar(16) NOT NULL,
    `rl_butt_style` varchar(16) NOT NULL,
    `rl_butt_size` int(4) NOT NULL,
    `pp_butt_size` int(4) NOT NULL,
    `butts_color` varchar(8) NOT NULL,
    `butts_transparent` int(4) NOT NULL,
    `hover_color` varchar(8) NOT NULL,
    `nav_border_width` int(4) NOT NULL,
    `nav_border_style` varchar(16) NOT NULL,
    `nav_border_color` varchar(8) NOT NULL,
    `nav_border_radius` varchar(32) NOT NULL,
    `nav_bg_color` varchar(8) NOT NULL,
    `bull_position` varchar(16) NOT NULL,
    `bull_style` varchar(20) NOT NULL,
    `bull_size` int(4) NOT NULL,
    `bull_color` varchar(8) NOT NULL,
    `bull_act_color` varchar(8) NOT NULL,
    `bull_margin` int(4) NOT NULL,
    `film_pos` varchar(16) NOT NULL,
    `film_thumb_width` int(4) NOT NULL,
    `film_thumb_height` int(4) NOT NULL,
    `film_bg_color` varchar(8) NOT NULL,
    `film_tmb_margin` int(4) NOT NULL,
    `film_act_border_width` int(4) NOT NULL,
    `film_act_border_style` varchar(16) NOT NULL,
    `film_act_border_color` varchar(8) NOT NULL,
    `film_dac_transparent` int(4) NOT NULL,
    `css` mediumtext NOT NULL,
    `timer_bar_type` varchar(16) NOT NULL,
    `timer_bar_size` int(4) NOT NULL,
    `timer_bar_color` varchar(8) NOT NULL,
    `timer_bar_transparent` int(4) NOT NULL,
    `stop_animation`  tinyint(1) NOT NULL,
    `right_butt_url` varchar(255) NOT NULL,
    `left_butt_url` varchar(255) NOT NULL,
    `right_butt_hov_url` varchar(255) NOT NULL,
    `left_butt_hov_url` varchar(255) NOT NULL,
    `rl_butt_img_or_not` varchar(8) NOT NULL,
    `bullets_img_main_url` varchar(255) NOT NULL,
    `bullets_img_hov_url` varchar(255) NOT NULL,
    `bull_butt_img_or_not` varchar(8) NOT NULL,
    `play_paus_butt_img_or_not` varchar(8) NOT NULL,
    `play_butt_url` varchar(255) NOT NULL,
    `play_butt_hov_url` varchar(255) NOT NULL,
    `paus_butt_url` varchar(255) NOT NULL,
    `paus_butt_hov_url` varchar(255) NOT NULL,
    `start_slide_num` int(4) NOT NULL,
    `effect_duration` int(6) NOT NULL,
    `carousel` tinyint(1) NOT NULL,
    `carousel_image_counts` int(4) NOT NULL,
    `carousel_image_parameters` varchar(8) NOT NULL,
    `carousel_fit_containerWidth` tinyint(1) NOT NULL,
    `carousel_width` int(4) NOT NULL,
    `parallax_effect` tinyint(1) NOT NULL,
    `dynamic` tinyint(1) NOT NULL,
    `cache_expiration` varchar(16) NOT NULL,
    `posts_count` int(4) NOT NULL,
    `choose_post` varchar(16) NOT NULL,
    `post_sort` varchar(32) NOT NULL,
    `order_by_posts` tinyint(1) NOT NULL,
    `taxonomies` varchar(128) NOT NULL,
    `author_name` varchar(128) NOT NULL,
    `possib_add_ffamily` varchar(255) NOT NULL,
    `smart_crop` tinyint(1) NOT NULL,
    `crop_image_position` varchar(16) NOT NULL,
    `bull_back_act_color` varchar(8) NOT NULL,
    `bull_back_color` varchar(8) NOT NULL,
    `bull_radius` varchar(32) NOT NULL,
    `carousel_degree` int(4) NOT NULL,
    `carousel_grayscale` int(4) NOT NULL,
    `carousel_transparency` int(4) NOT NULL,
    PRIMARY KEY (`id`)
  ) DEFAULT CHARSET=utf8;";
  $wpdb->query($wdpsslider);
  $wdpsslide = "CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "wdpsslide` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `slider_id` bigint(20) NOT NULL,
    `title` varchar(127) NOT NULL,
    `type` varchar(128) NOT NULL,
    `image_url` mediumtext NOT NULL,
    `thumb_url` mediumtext NOT NULL,
    `published` tinyint(1) NOT NULL,
    `link` mediumtext NOT NULL,
    `order` bigint(20) NOT NULL,
    `post_id` bigint(20) NOT NULL,
    `target_attr_slide` tinyint(1) NOT NULL,
    PRIMARY KEY (`id`)
  ) DEFAULT CHARSET=utf8;";
  $wpdb->query($wdpsslide);
  $wdpslayer = "CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "wdpslayer` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(127) NOT NULL,
    `slide_id` bigint(20) NOT NULL,
    `type` varchar(8) NOT NULL,
    `depth` bigint(20) NOT NULL,
    `text` mediumtext NOT NULL,
    `link` mediumtext NOT NULL,
    `left` int(4) NOT NULL,
    `top` int(4) NOT NULL,
    `start` bigint(20) NOT NULL,
    `end` bigint(20) NOT NULL,
    `published` tinyint(1) NOT NULL,
    `color` varchar(8) NOT NULL,
    `size` bigint(20) NOT NULL,
    `ffamily` varchar(32) NOT NULL,
    `fweight` varchar(8) NOT NULL,
    `padding` varchar(32) NOT NULL,
    `fbgcolor` varchar(8) NOT NULL,
    `transparent` int(4) NOT NULL,
    `border_width` int(4) NOT NULL,
    `border_style` varchar(16) NOT NULL,
    `border_color` varchar(8) NOT NULL,
    `border_radius` varchar(32) NOT NULL,
    `shadow` varchar(127) NOT NULL,
    `image_url` mediumtext NOT NULL,
    `image_width` int(4) NOT NULL,
    `image_height` int(4) NOT NULL,
    `image_scale` varchar(8) NOT NULL,
    `alt` varchar(127) NOT NULL,
    `imgtransparent` int(4) NOT NULL,
    `social_button` varchar(16) NOT NULL,
    `hover_color` varchar(8) NOT NULL,
    `layer_effect_in` varchar(16) NOT NULL, 
    `duration_eff_in` bigint(20) NOT NULL,
    `layer_effect_out` varchar(16) NOT NULL,	
    `duration_eff_out` bigint(20) NOT NULL,
    `target_attr_layer` tinyint(1) NOT NULL,
    `hotp_width` int(4) NOT NULL,
    `hotp_fbgcolor`  varchar(8) NOT NULL,
    `hotp_border_width` int(4) NOT NULL,
    `hotp_border_style` varchar(16) NOT NULL,
    `hotp_border_color` varchar(8) NOT NULL,
    `hotp_border_radius` varchar(32) NOT NULL,
    `hotp_text_position` varchar(6) NOT NULL,
    `google_fonts` int(1) NOT NULL,
    `layer_characters_count` int(4) NOT NULL,
    PRIMARY KEY (`id`)
  ) DEFAULT CHARSET=utf8;";
  $wpdb->query($wdpslayer);
  return;
}
