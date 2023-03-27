<?php

/**
 * @file
 * Provides an additional config form for theme settings.
 */

use Drupal\Core\Form\FormStateInterface;

function yg_magazine_form_system_theme_settings_alter(array &$form, FormStateInterface $form_state) {
  $form['yg_magazine_settings']= array(
    '#type' => 'details',
    '#title' => t('YG Magazine Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#group' => 'bootstrap',
    '#weight' => 10,
  );

#social links    
  $form['yg_magazine_settings']['social_links'] = array(
    '#type' => 'details',
    '#title' => t('Social Links'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['yg_magazine_settings']['social_links']['news_update'] = array(
    '#type' => 'details',
    '#title' => t('Topbar News Update'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['yg_magazine_settings']['social_links']['news_update']['news_update_link_text'] = array(
    '#type' => 'textfield',
    '#title' => t('News Update Title'),
    '#description' => t('Please enter news post title'),
    '#default_value' => theme_get_setting('news_update_link_text'),
  );
  $form['yg_magazine_settings']['social_links']['news_update']['top_news_update_url'] = array(
    '#type' => 'textfield',
    '#title' => t('News Update Url'),
    '#description' => t('Please enter your news update url'),
    '#default_value' => theme_get_setting('top_news_update_url'),
  );
  $form['yg_magazine_settings']['social_links']['facebook_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook'),
    '#description' => t('Please enter your facebook url'),
    '#default_value' => theme_get_setting('facebook_url'),
  );
   $form['yg_magazine_settings']['social_links']['twitter_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter'),
    '#description' => t('Please enter your twitter url'),
    '#default_value' => theme_get_setting('twitter_url'),
  );
  $form['yg_magazine_settings']['social_links']['google_plus_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Plus'),
    '#description' => t('Please enter your google-plus url'),
    '#default_value' => theme_get_setting('google_plus_url'),
  );
  $form['yg_magazine_settings']['social_links']['instagram_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Instagram'),
    '#description' => t('Please enter your Instagram url'),
    '#default_value' => theme_get_setting('instagram_url'),
  ); 
  $form['yg_magazine_settings']['social_links']['youtube_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Youtube'),
    '#description' => t('Please enter your Youtube url'),
    '#default_value' => theme_get_setting('youtube_url'),
  );
  $form['yg_magazine_settings']['social_links']['linkedin_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Linkedin'),
    '#description' => t('Please enter your linkedin_url url'),
    '#default_value' => theme_get_setting('linkedin_url'),
  );

#Footer-News-Post
  $form['yg_magazine_settings']['news_post'] = array(
    '#type' => 'details',
    '#title' => t('Footer News Post'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['yg_magazine_settings']['news_post']['news_post_title'] = array(
    '#type' => 'textfield',
    '#title' => t('News Post Title'),
    '#description' => t('Please enter news post title'),
    '#default_value' => theme_get_setting('news_post_title'),
  ); 
    $news_post_desc = theme_get_setting('news_post_desc');
    $form['yg_magazine_settings']['news_post']['news_post_desc'] = array(
    '#type' => 'text_format',
    '#title' => t('News Post Description'),
    '#description' => t('Please enter news post description...'),
    '#default_value' => $news_post_desc['value'],
    '#foramt'        => $news_post_desc['format'],
  );
  $form['yg_magazine_settings']['news_post']['news_post_email'] = array(
    '#type' => 'email',
    '#title' => t('Email'),
    '#description' => t('Please enter news post email-id'),
    '#default_value' => theme_get_setting('news_post_email'),
    );

//footer custom text
  $form['yg_magazine_settings']['footer'] = array(
    '#type' => 'details',
    '#title' => t('Footer Section'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $sub_footer = theme_get_setting('sub_footer');
  $form['yg_magazine_settings']['footer']['sub_footer'] = array(
    '#type' => 'text_format',
    '#title' => t('Footer Description'),
    '#description' => t('Please enter footer description...'),
    '#default_value' => $sub_footer['value'],
    '#foramt'        => $sub_footer['format'],
  );
    
}
 
