<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    function render_backadmin($content, $data = null)
    {
        $data['header'] = $this->load->view('back/template/header', $data, true);
        $data['sidebar'] = $this->load->view('back/template/sidebar', $data, true);
        $data['topbar'] = $this->load->view('back/template/topbar', $data, true);
        $data['content'] = $this->load->view($content, $data, true);
        $data['modal'] = $this->load->view('back/template/modal', $data, true);
        $data['footer'] = $this->load->view('back/template/footer', $data, true);

        $this->load->view('back/template/index', $data);
    }

    function render_backlogin($content, $data = null)
    {
        $data['header'] = $this->load->view('back/auth/_parts/header', $data, true);
        $data['content'] = $this->load->view($content, $data, true);
        $data['footer'] = $this->load->view('back/auth/_parts/footer', $data, true);

        $this->load->view('back/auth/_parts/index', $data);
    }


    function render_front($content, $data = null)
    {
        $data['header'] = $this->load->view('front/template/header', $data, true);
        // $data['sidebar'] = $this->load->view('front/template/sidebar', $data, true);
        // $data['topbar'] = $this->load->view('front/template/topbar', $data, true);
        $data['content'] = $this->load->view($content, $data, true);
        // $data['modal'] = $this->load->view('front/template/modal', $data, true);
        $data['footer'] = $this->load->view('front/template/footer', $data, true);

        $this->load->view('front/template/index', $data);
    }
}
