<?php
/**
 * AdvocatusB Theme Customizer
 *
 * @package AdvocatusB
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function advocatusb_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'advocatusb_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'advocatusb_customize_partial_blogdescription',
        ));
    }

    //All our unique sections, settings, and controls will be added here

    //Add settings for the banner button
    $wp_customize->add_section('banner_button', array(
        'title' => __('Main part button ', 'advocatusb'),
        'priority' => 20,
    ));

    $wp_customize->add_setting('text_button', array(
        'default' => __('Button text', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('text_button', array(
        'label' => __('Button settings', 'advocatusb'),
        'section' => 'banner_button',
        'settings' => 'text_button',
        'type' => 'text',
    ));

    $wp_customize->add_setting('url_button', array(
        'default' => __('Url button', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('url_button', array(
        'label' => __('Button url', 'advocatusb'),
        'section' => 'banner_button',
        'settings' => 'url_button',
        'type' => 'dropdown-pages',
    ));

    $wp_customize->add_setting('button_display', array(
        'default' => true,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('button_display', array(
        'label' => 'Button Display',
        'section' => 'banner_button',
        'settings' => 'button_display',
        'type' => 'radio',
        'choices' => array(
            'show' => 'Show Button',
            'hide' => 'Hide Button',
        ),
    ));

    $wp_customize->add_setting('header_button_color', array(
        'default' => '#e8bf5d',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_color', array(
        'label' => 'Button Color',
        'section' => 'banner_button',
        'settings' => 'header_button_color',
    )));


    //Add a section for customization
    //Section 01 ABOUT US
    $wp_customize->add_section('section_01', array(
        'title' => __('01 section ', 'advocatusb'),
        'priority' => 25,
        'active_callback' => 'is_front_page',
    ));

    //01 Section description
    $wp_customize->add_setting('section_number', array(
        'default' => __('00', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('number', array(
        'label' => __('Section number ', 'advocatusb'),
        'section' => 'section_01',
        'settings' => 'section_number',
        'type' => 'text',
    ));

    //01 Section Title
    $wp_customize->add_setting('section_name', array(
        'default' => __('Section title', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('section_title', array(
        'label' => __('Title for section 01 ', 'advocatusb'),
        'section' => 'section_01',
        'settings' => 'section_name',
        'type' => 'text',
    ));

    //01 Section description
    $wp_customize->add_setting('section_description', array(
        'default' => __('Section description', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('description', array(
        'label' => __('Description for section 01 ', 'advocatusb'),
        'section' => 'section_01',
        'settings' => 'section_description',
        'type' => 'textarea',
    ));

    //01 Left subtitle
    $wp_customize->add_setting('first_subtitle', array(
        'default' => __('Subtitle', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('left_subtitle', array(
        'label' => __('Subtitle for left part ', 'advocatusb'),
        'section' => 'section_01',
        'settings' => 'first_subtitle',
        'type' => 'text',
    ));

    //01 Right subtitle
    $wp_customize->add_setting('second_subtitle', array(
        'default' => __('Subtitle', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('right_subtitle', array(
        'label' => __('Subtitle for right part ', 'advocatusb'),
        'section' => 'section_01',
        'settings' => 'second_subtitle',
        'type' => 'text',
    ));

    //01 Second discription
    $wp_customize->add_setting('right_part_description', array(
        'default' => __('Section description', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('right_description', array(
        'label' => __('Description for right part ', 'advocatusb'),
        'section' => 'section_01',
        'settings' => 'right_part_description',
        'type' => 'textarea',
    ));


    //Background for 01 section
    $wp_customize->add_setting('section_background', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'section_background', array(
        'label' => __('Section Background Image', 'notify'),
        'section' => 'section_01',
        'type' => 'background',
    )));

    $wp_customize->add_setting('background_color', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background', array(
        'label' => 'Section Background Color',
        'section' => 'section_01',
        'settings' => 'background_color',
    )));


    //Add the settings of social networking icons
    $wp_customize->add_section('social_section', array(
        'title' => __('Social settings', 'advocatusb'),
        'priority' => 30,
    ));

    $wp_customize->add_control('social_menu', array(
        'label' => __('Social menu in footer', 'advocatusb'),
        'section' => 'social_section',
        'settings' => 'social_menu',
        'type' => 'text',
    ));

    $wp_customize->add_setting('facebook_social', array(
        'default' => __('Url facebook', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('twitter_social', array(
        'default' => __('Url twitter', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('google_plus_social', array(
        'default' => __('Url google_plus', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('instagram_social', array(
        'default' => __('Url instagram', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('facebook_social', array(
        'label' => __('Facebook profile url', 'advocatusb'),
        'section' => 'social_section',
        'settings' => 'facebook_social',
        'type' => 'text',
    ));

    $wp_customize->add_control('twitter_social', array(
        'label' => __('Twitter profile url', 'advocatusb'),
        'section' => 'social_section',
        'settings' => 'twitter_social',
        'type' => 'text',
    ));

    $wp_customize->add_control('google_plus_social', array(
        'label' => __('Google Plus profile url', 'advocatusb'),
        'section' => 'social_section',
        'settings' => 'google_plus_social',
        'type' => 'text',
    ));

    $wp_customize->add_control('instagram_social', array(
        'label' => __('Instagram profile url', 'advocatusb'),
        'section' => 'social_section',
        'settings' => 'instagram_social',
        'type' => 'text',
    ));

    //Add settings for the copyright field
    $wp_customize->add_section('footer_setting', array(
        'title' => __('Footer settings', 'advocatusb'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('footer_copy', array(
        'default' => __('Copyright text', 'advocatusb'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_copy', array(
        'label' => __('Footer settings', 'advocatusb'),
        'section' => 'footer_setting',
        'settings' => 'footer_copy',
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'advocatusb_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function advocatusb_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function advocatusb_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function advocatusb_customize_preview_js()
{
    wp_enqueue_script('advocatusb-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'advocatusb_customize_preview_js');
