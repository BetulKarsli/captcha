<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Captcha
 *
 * 
 */
class Captcha_Form extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index() {
        $captcha_form = $this->config->item('captcha_form');
        $data['captcha_form'] = $captcha_form;
        if ($captcha_form) {
            $data['captcha_html'] = $this->_create_captcha();
        }
        if ($this->input->post('register')) {
            $this->form_validation->set_rules('pwd', 'Password', 'required');
            $this->form_validation->set_rules('cnf_pwd', 'Password Confirmation', 'required|matches[pwd]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            if ($captcha_form) {
                $this->form_validation->set_rules('not_robot', 'Captcha', 'required|callback__check_captcha');
            }
            if ($this->form_validation->run()) {
                $data['captcha_html'] = $this->_create_captcha();
                $data['success'] = 'You have successfully registered';
            }
        }
        $this->load->view('captcha', $data);
    }

    function _create_captcha() {
        $this->load->helper('captcha');
        $cap_config = array(
            'img_path' => './' . $this->config->item('captcha_path'),
            'img_url' => base_url() . $this->config->item('captcha_path'),
            'font_path' => './' . $this->config->item('captcha_fonts_path'),
            'font_size' => $this->config->item('captcha_font_size'),
            'img_width' => $this->config->item('captcha_width'),
            'img_height' => $this->config->item('captcha_height'),
            'show_grid' => $this->config->item('captcha_grid'),
            'ip_address' => $this->input->ip_address(),
            // White background and border, black text and red grid
            'colors' => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );
        $cap = create_captcha($cap_config);
        // Save captcha params in database
        $data = array(
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => $cap['word']
        );
        $query = $this->db->insert_string('captcha', $data);
        $this->db->query($query);
        return $cap['image'];
    }

    function _check_captcha($code) {
        // First, delete old captchas
        $expiration = time() - $this->config->item('captcha_expire'); // 3 mins limit
        $this->db->where('captcha_time < ', $expiration)
                ->delete('captcha');
        // Then see if a captcha exists:
        $sql = 'SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?';
        $binds = array($code, $this->input->ip_address(), $expiration);
        $query = $this->db->query($sql, $binds);
        $row = $query->row();
        if ($row->count == 0) {
            $this->form_validation->set_message('_check_captcha', 'Captcha is incorrect');
            return FALSE;
        }
        return TRUE;
    }

}