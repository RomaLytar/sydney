<?php

add_action( 'admin_menu', 'rom_options_page' );
add_action( 'admin_init', 'rom_setting' );

function rom_options_page(){
  // $page_title, $menu_title, $capability, $menu_slug, $function
  add_options_page( 'Опции темы', 'Опции темы', 'manage_options', 'rom-options-theme', 'rom_option_page' );
}

function rom_setting(){
  // $option_group, $option_name, $sanitize_callback
  register_setting( 'rom_options_group', 'rom_options_theme', 'rom_options_sanitize' );
  register_setting( 'rom_options_group', 'rom_options_theme', 'rom_options_sanitize_2' );
  register_setting( 'rom_options_group', 'rom_options_theme', 'rom_options_sanitize_3' );

  // $id, $title, $callback, $page
  add_settings_section( 'rom_options_section', 'Опции темы', '', 'rom-options-theme' );

  // $id, $title, $callback, $page, $section, $args
  add_settings_field( 'rom_body_title_id', 'Заголовок сайта', 'rom_body_title_cb', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_body_title_id' ) );
  add_settings_field( 'rom_body_sub_title_id', 'Заголовок в хедере', 'rom_body_sub_title_cb', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_body_sub_title_id' ) );
  add_settings_field( 'rom_header_facebook', 'Ссылка на facebook', 'rom_body_facebook', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_header_facebook' ) );
  add_settings_field( 'rom_header_twitter', 'Ссылка на twitter', 'rom_body_twitter', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_header_twitter' ) );
  add_settings_field( 'rom_header_google', 'Ссылка на google', 'rom_body_google', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_header_google' ) );
  add_settings_field( 'rom_header_you_tube', 'Ссылка на You Tube', 'rom_body_you_tube', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_header_you_tube' ) );
  add_settings_field( 'rom_address', 'Адресс', 'rom_address', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_address' ) );
  add_settings_field( 'rom_phone', 'Телефон', 'rom_phone', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_phone' ) );
  add_settings_field( 'rom_site_1', 'Ссылка на сайт 1', 'rom_site_1', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_site_1' ) );
  add_settings_field( 'rom_site_2', 'Ссылка на сайт 2', 'rom_site_2', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_site_2' ) );
  add_settings_field( 'rom_site_3', 'Ссылка на сайт 3', 'rom_site_3', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_site_3' ) );
  add_settings_field( 'rom_header_pic_id', 'Картинка в шапке 1', 'rom_header_pic_cb', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_header_pic_id' ) );
  add_settings_field( 'rom_header_pic_2_id', 'Картинка в шапке 2', 'rom_header_pic_2_cb', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_header_pic_2_id' ) );
  add_settings_field( 'rom_header_pic_3_id', 'Картинка в шапке 3', 'rom_header_pic_3_cb', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_header_pic_3_id' ) );
  add_settings_field( 'rom_check_pic_id', 'Удалить картинку 1', 'rom_check_pic_cb', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_check_pic_id' ) );
  add_settings_field( 'rom_check_pic_2_id', 'Удалить картинку 2', 'rom_check_pic_2_cb', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_check_pic_2_id' ) );
  add_settings_field( 'rom_check_pic_3_id', 'Удалить картинку 3', 'rom_check_pic_3_cb', 'rom-options-theme', 'rom_options_section', array( 'label_for' => 'rom_check_pic_3_id' ) );
}

function rom_body_title_cb(){
  $options = get_option( 'rom_options_theme' );
  ?>
  <input type="text" name="rom_options_theme[body_title]" id="rom_body_title_id" value="<?php echo esc_attr($options['body_title']); ?>" class="regular-text">
  <?php
}
function rom_address(){
  $options = get_option( 'rom_options_theme' );
  ?>
    <input type="text" name="rom_options_theme[body_address]" id="rom_body_title_id" value="<?php echo esc_attr($options['body_address']); ?>" class="regular-text">
  <?php
}
function rom_phone(){
  $options = get_option( 'rom_options_theme' );
  ?>
    <input type="text" name="rom_options_theme[body_phone]" id="rom_body_title_id" value="<?php echo esc_attr($options['body_phone']); ?>" class="regular-text">
  <?php
}
function rom_site_1(){
  $options = get_option( 'rom_options_theme' );
  ?>
    <input type="text" name="rom_options_theme[body_site_1]" id="rom_body_title_id" value="<?php echo esc_attr($options['body_site_1']); ?>" class="regular-text">
  <?php
}
function rom_site_2(){
  $options = get_option( 'rom_options_theme' );
  ?>
    <input type="text" name="rom_options_theme[body_site_2]" id="rom_body_title_id" value="<?php echo esc_attr($options['body_site_2']); ?>" class="regular-text">
  <?php
}
function rom_site_3(){
  $options = get_option( 'rom_options_theme' );
  ?>
    <input type="text" name="rom_options_theme[body_site_3]" id="rom_body_title_id" value="<?php echo esc_attr($options['body_site_3']); ?>" class="regular-text">
  <?php
}
function rom_body_facebook(){
  $options = get_option( 'rom_options_theme' );
  ?>
    <input type="text" name="rom_options_theme[body_facebook]" id="rom_body_title_id" value="<?php echo esc_attr($options['body_facebook']); ?>" class="regular-text">
  <?php
}
function rom_body_twitter(){
  $options = get_option( 'rom_options_theme' );
  ?>
    <input type="text" name="rom_options_theme[body_twitter]" id="rom_body_title_id" value="<?php echo esc_attr($options['body_twitter']); ?>" class="regular-text">
  <?php
}
function rom_body_google(){
  $options = get_option( 'rom_options_theme' );
  ?>
    <input type="text" name="rom_options_theme[body_google]" id="rom_body_title_id" value="<?php echo esc_attr($options['body_google']); ?>" class="regular-text">
  <?php
}
function rom_body_you_tube(){
  $options = get_option( 'rom_options_theme' );
  ?>
    <input type="text" name="rom_options_theme[body_you_tube]" id="rom_body_title_id" value="<?php echo esc_attr($options['body_you_tube']); ?>" class="regular-text">
  <?php
}
function rom_body_sub_title_cb(){
  $options = get_option( 'rom_options_theme' );
  ?>
    <input type="text" name="rom_options_theme[body_sub_title]" id="rom_body_title_id" value="<?php echo esc_attr($options['body_sub_title']); ?>" class="regular-text">
  <?php
}

function rom_header_pic_cb(){
  ?>
  <input type="file" name="rom_options_theme_file" id="rom_header_pic_id">
  <?php
  $options = get_option( 'rom_options_theme' );
  if( !empty($options['file']) ){
    echo "<p><img src='{$options['file']}' alt='' width='200'></p>";
  }
}

function rom_header_pic_2_cb(){
  ?>
    <input type="file" name="rom_options_theme_file_2" id="rom_header_pic_2_id">
  <?php
  $options = get_option( 'rom_options_theme');
  if( !empty($options['file_2']) ){
    echo "<p><img src='{$options['file_2']}' alt='' width='200'></p>";
  }
}
function rom_header_pic_3_cb(){
  ?>
    <input type="file" name="rom_options_theme_file_3" id="rom_header_pic_3_id">
  <?php
  $options = get_option( 'rom_options_theme');
  if( !empty($options['file_3']) ){
    echo "<p><img src='{$options['file_3']}' alt='' width='200'></p>";
  }
}

function rom_check_pic_cb(){
  ?>
  <input type="checkbox" name="rom_options_theme_file_check" id="rom_check_pic_id">
  <?php
}
function rom_check_pic_2_cb(){
  ?>
    <input type="checkbox" name="rom_options_theme_file_check_2" id="rom_check_pic_2_id">
  <?php
}
function rom_check_pic_3_cb(){
  ?>
    <input type="checkbox" name="rom_options_theme_file_check_3" id="rom_check_pic_3_id">
  <?php
}
function rom_options_sanitize_3($options)
{
  if (!empty($_FILES['rom_options_theme_file_3']['tmp_name'])) {
    $overrides = array('test_form' => false);
    $file = wp_handle_upload($_FILES['rom_options_theme_file_3'], $overrides);
    $options['file_3'] = $file['url'];
  } else {
    $old_oprions = get_option('rom_options_theme');
    $options['file_3'] = $old_oprions['file_3'];
  }

  if (isset($_POST['rom_options_theme_file_check_3']) && $_POST['rom_options_theme_file_check_3'] == 'on') {
    unset($options['file_3']);
  }
  $clean_options = array();
  foreach ($options as $k => $v) {
    $clean_options[$k] = strip_tags($v);
  }
  return $clean_options;
}

function rom_options_sanitize_2($options)
{
  if (!empty($_FILES['rom_options_theme_file_2']['tmp_name'])) {
    $overrides = array('test_form' => false);
    $file = wp_handle_upload($_FILES['rom_options_theme_file_2'], $overrides);
    $options['file_2'] = $file['url'];
  } else {
    $old_oprions = get_option('rom_options_theme');
    $options['file_2'] = $old_oprions['file_2'];
  }

  if (isset($_POST['rom_options_theme_file_check_2']) && $_POST['rom_options_theme_file_check_2'] == 'on') {
    unset($options['file_2']);
  }
  $clean_options = array();
  foreach ($options as $k => $v) {
    $clean_options[$k] = strip_tags($v);
  }
  return $clean_options;
}

function rom_options_sanitize($options){
  if( !empty($_FILES['rom_options_theme_file']['tmp_name']) ){
    $overrides = array('test_form' => false);
    $file = wp_handle_upload( $_FILES['rom_options_theme_file'], $overrides );
    $options['file'] = $file['url'];
  }else{
    $old_oprions = get_option( 'rom_options_theme' );
    $options['file'] = $old_oprions['file'];
  }

  if( isset($_POST['rom_options_theme_file_check']) && $_POST['rom_options_theme_file_check'] == 'on' ){
    unset($options['file']);
  }
  $clean_options = array();
  foreach($options as $k => $v){
    $clean_options[$k] = strip_tags($v);
  }
  return $clean_options;
}

function rom_option_page(){
  ?>
  <div class="wrap">
    <form action="options.php" method="post" enctype="multipart/form-data">
      <?php settings_fields( 'rom_options_group' ); ?>
      <?php do_settings_sections( 'rom-options-theme' ); ?>
      <?php submit_button(); ?>
    </form>
  </div>
  <?php
}