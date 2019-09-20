<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Menu_model', 'menu');
    }
    public function index()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Menu Management';
            $data['user'] = $this->db->get_where('hn_user', ['email' => $this->session->userdata('email')])->row_array();
            $data['menu'] = $this->db->get('hn_user_menu')->result_array();
            $this->render_backadmin('back/menu/index', $data);
        } else {
            $this->db->insert('hn_user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('menu');
        }
    }

    public function editMenu($id)
    {
        echo json_encode($this->db->get_where('hn_user_menu', ['id' => $id])->row_array());
    }

    public function updateMenu()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->render_backadmin('back/menu');
        } else {
            $data = array(
                'menu' => $this->input->post('menu')
            );
            $this->db->where('id', $_POST['id']);
            $this->db->update('hn_user_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu updated!</div>');
            redirect('menu');
        }
    }

    public function deleteMenu($id)
    {
        if ($this->db->delete('hn_user_menu', array('id' => $id))) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu deleted!</div>');
            redirect('menu');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Delete Failed!!</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Submenu Management';
            $data['user'] = $this->db->get_where('hn_user', ['email' => $this->session->userdata('email')])->row_array();
            $data['subMenu'] = $this->menu->getSubMenu();
            $data['menu'] = $this->db->get('hn_user_menu')->result_array();
            $this->render_backadmin('back/menu/submenu', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('hn_user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
            redirect('menu/submenu');
        }
    }

    public function editSubMenu($id)
    {
        echo json_encode($this->db->get_where('hn_user_sub_menu', ['id' => $id])->row_array());
    }

    public function updateSubMenu()
    {
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('is_active', 'Active', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->render_backadmin('back/menu/submenu');
        } else {
            $data = array(
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            );
            $this->db->where('id', $_POST['id']);
            $this->db->update('hn_user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu updated!</div>');
            redirect('menu/submenu');
        }
    }

    public function deleteSubMenu($id)
    {
        if ($this->db->delete('hn_user_sub_menu', array('id' => $id))) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu deleted!</div>');
            redirect('menu/submenu');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Delete Failed!!</div>');
            redirect('menu/submenu');
        }
    }
}
