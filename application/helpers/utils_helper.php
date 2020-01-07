<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('_alert')) {
    function _alert($tipo, $mensagem){
        $CI =& get_instance();

        $msg = '<div class="alert alert-'.$tipo.' alert-dismissible fade show" role="alert">
              <strong>'.$mensagem.'</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';

        $CI->session->set_flashdata('message', $msg);
    }
}
