<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('cari')) {
    function cari($CI, $controller, $args = array ()) {
        $CI->load->view('header');
        $CI->load->view('menu_pop');
        if (!$CI->tank_auth->is_logged_in()) {
            $CI->load->view('unauthorized');
        } else {
            $data['user_id'] = $CI->tank_auth->get_user_id();
            $data['username'] = $CI->tank_auth->get_username();
            $data['controller'] = $controller;
            $data['args'] = $args;
            $CI->load->view('cari/index', $data);
        }

        $CI->load->view('footer');
    }
}

