<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('hn_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->render_backadmin('back/admin/index', $data);
    }

    public function role()
    {
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Role';
            $data['user'] = $this->db->get_where('hn_user', ['email' => $this->session->userdata('email')])->row_array();
            $data['role'] = $this->db->get('hn_user_role')->result_array();
            $this->render_backadmin('back/admin/role', $data);
        } else {
            $this->db->insert('hn_user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New role added!</div>');
            redirect('admin/role');
        }
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('hn_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('hn_user_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('hn_user_menu')->result_array();
        $this->render_backadmin('back/admin/role-access', $data);
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('hn_user_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('hn_user_access_menu', $data);
        } else {
            $this->db->delete('hn_user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access change!</div>');
    }

    public function editRole($id)
    {
        echo json_encode($this->db->get_where('hn_user_role', ['id' => $id])->row_array());
    }

    public function updateRole()
    {
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->render_backadmin('back/admin/role');
        }else{
            $data = array(
                'role' => $this->input->post('role')
            );
            $this->db->where('id', $_POST['id']);
            $this->db->update('hn_user_role', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role updated!</div>');
            redirect('admin/role');
        }
    }

    public function deleteRole($id)
    {
            if($this->db->delete('hn_user_role', array('id' => $id))){
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role deleted!</div>');
                redirect('admin/role');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Delete Failed!!</div>');
                redirect('admin/role');
            }
        
    }

}

 