<?php

add_action('wp_ajax_send_message_form', 'handle_message_form');
add_action('wp_ajax_nopriv_send_message_form', 'handle_message_form');

function handle_message_form(){

  if( 
    ! isset( $_POST['smf-nonce'] ) ||
    ! wp_verify_nonce( $_POST['smf-nonce'], 'send_message_form')
   ){

    wp_send_json_error([
      'message' => 'something fishy going on'
    ]);

   }

  // do form stuff

  wp_send_json_success($_POST);

  
}
