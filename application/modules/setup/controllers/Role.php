<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Role (RoleController)
 * Role Class to control all role related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Role extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('role_model');
        $this->load->model('permission_model');
        $this->isLoggedIn();
    }


    /**
     * This function is used to load the role list
     */
    function list()
    {
        if ($this->checkAccess('role.list') == 1) {
            $this->loadAccessRestricted();
        } else {
            if ($this->input->method() == "post") {
                $this->load->library('form_validation');
                $this->form_validation->set_rules('role', 'Role', 'trim|strtolower');
                $role = $this->security->xss_clean($this->input->post('role'));
            } else {
                $role = '';
            }
            $data['role'] = $role;

            $data['roleRecords'] = $this->role_model->roleListing($role);

            $this->global['pageTitle'] = 'School : Role Listing';

            $this->loadViews("role/list", $this->global, $data, NULL);
        }
    }
    /**
     * This function is used to load the add new form
     */
    function add()
    {
        if ($this->checkAccess('role.add') == 1) {
            $this->loadAccessRestricted();
        } else {
            $this->load->model('role_model');
            $data['permissions'] = $this->permission_model->permissionListing();

            $this->global['pageTitle'] = 'School : Add New Role';

            $this->loadViews("role/add", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to add new role to the system
     */
    function addNewRole()
    {
        if ($this->checkAccess('role.add') == 1) {
            $this->loadAccessRestricted();
        } else {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('role', 'Role', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->add();
            } else {
                $role = $this->security->xss_clean($this->input->post('role'));
                $permissions = $this->input->post('permissions');

                $roleInfo = array('role' => $role);

                $this->load->model('role_model');
                $roleId = $this->role_model->addNewRole($roleInfo);
                $this->role_model->updateRolePermissions($permissions, $roleId);

                if ($roleId > 0) {
                    $this->session->set_flashdata('success', 'New Role created successfully');
                } else {
                    $this->session->set_flashdata('error', 'Role creation failed');
                }

                redirect('/setup/role/list');
            }
        }
    }


    /**
     * This function is used load role edit information
     * @param number $roleId : Optional : This is role id
     */
    function edit($roleId = NULL)
    {
        if ($this->checkAccess('role.edit') == 1) {
            $this->loadAccessRestricted();
        } else {
            if ($roleId == null) {
                redirect('/setup/role/list');
            }

            $data['permissions'] = $this->permission_model->permissionListing();
            $data['roleInfo'] = $this->role_model->getRoleInfo($roleId);
            $data['rolepermissions'] = $this->role_model->rolePermissions($roleId);

            $this->global['pageTitle'] = 'School : Edit Role';
            // echo "<pre>";print_r($data);die;
            $this->loadViews("role/edit", $this->global, $data, NULL);
        }
    }


    /**
     * This function is used to edit the role information
     */
    function editRole()
    {
        if ($this->checkAccess('role.edit') == 1) {
            $this->loadAccessRestricted();
        } else {
            $this->load->library('form_validation');
            // echo "<pre>";print_r($this->input->post());die;

            $roleId = $this->input->post('roleId');
            $permissions = $this->input->post('permissions');

            $this->form_validation->set_rules('role', 'Role', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $this->edit($roleId);
            } else {
                $role = $this->security->xss_clean($this->input->post('role'));

                $roleInfo = array('role' => $role);

                $result = $this->role_model->editRole($roleInfo, $roleId);
                $this->role_model->updateRolePermissions($permissions, $roleId);

                if ($result == true) {
                    $this->session->set_flashdata('success', 'Role updated successfully');
                } else {
                    $this->session->set_flashdata('error', 'Role updation failed');
                }

                redirect('/setup/role/list');
            }
        }
    }


    /**
     * This function is used to delete the role using roleId
     * @return boolean $result : TRUE / FALSE
     */
    function delete()
    {
        if ($this->checkAccess('role.delete') == 1) {
            echo (json_encode(array('status' => 'access')));
        } else {
            $roleId = $this->input->post('roleId');
            $roleInfo = array('isDeleted' => 1, 'updatedBy' => $this->vendorId, 'updatedDtm' => date('Y-m-d H:i:s'));

            $result = $this->role_model->deleteRole($roleId, $roleInfo);

            if ($result > 0) {
                echo (json_encode(array('status' => TRUE)));
            } else {
                echo (json_encode(array('status' => FALSE)));
            }
        }
    }
}
