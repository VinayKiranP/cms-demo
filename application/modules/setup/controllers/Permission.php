<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Permission (PermissionController)
 * Permission Class to control all permission related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Permission extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('permission_model');
        $this->isLoggedIn();   
    }
    
    
    /**
     * This function is used to load the permission list
     */
    function list()
    {
        if($this->checkAccess('permission.list') == 1)
        {
            $this->loadAccessRestricted();
        }
        else
        {         
            
            $data['permissionRecords'] = $this->permission_model->permissionListing();
            
            $this->global['pageTitle'] = 'School : Permission Listing';
            
            $this->loadViews("permission/list", $this->global, $data, NULL);
        }
    }
    /**
     * This function is used to load the add new form
     */
    function add()
    {
        if($this->checkAccess('permission.add') == 1)
        {
            $this->loadAccessRestricted();
        }
        else
        {
            $this->load->model('permission_model');
            
            $this->global['pageTitle'] = 'School : Add New Permission';

            $this->loadViews("permission/add", $this->global, NULL, NULL);
        }
    }

    /**
     * This function is used to add new permission to the system
     */
    function addNewPermission()
    {
        if($this->checkAccess('permission.add') == 1)
        {
            $this->loadAccessRestricted();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('code','Code','trim|required');
            $this->form_validation->set_rules('description','Description','trim|required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->add();
            }
            else
            {
                $code = $this->security->xss_clean($this->input->post('code'));
                $description = $this->security->xss_clean($this->input->post('description'));
                
                $permissionInfo = array('code'=>$code,'description'=>$description);
                
                $this->load->model('permission_model');
                $result = $this->permission_model->addNewPermission($permissionInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Permission created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Permission creation failed');
                }
                
                redirect('/setup/permission/list');
            }
        }
    }

    
    /**
     * This function is used load permission edit information
     * @param number $permissionId : Optional : This is permission id
     */
    function edit($permissionId = NULL)
    {
        if($this->checkAccess('permission.edit') == 1)
        {
            $this->loadAccessRestricted();
        }
        else
        {
            if($permissionId == null)
            {
                redirect('/setup/permission/list');
            }
            
            $data['permissionInfo'] = $this->permission_model->getPermissionInfo($permissionId);
            
            $this->global['pageTitle'] = 'School : Edit Permission';
            
            $this->loadViews("permission/edit", $this->global, $data, NULL);
        }
    }
    
    
    /**
     * This function is used to edit the permission information
     */
    function editPermission()
    {
        if($this->checkAccess('permission.edit') == 1)
        {
            $this->loadAccessRestricted();
        }
        else
        {
            $this->load->library('form_validation');
            
            $permissionId = $this->input->post('permissionId');
            
            $this->form_validation->set_rules('code','Code','trim|required');
            $this->form_validation->set_rules('description','Description','trim|required');
            
          
            if($this->form_validation->run() == FALSE)
            {
                $this->edit($permissionId);
            }
            else
            {
                $code = $this->security->xss_clean($this->input->post('code'));
                $description = $this->security->xss_clean($this->input->post('description'));
                
                $permissionInfo = array('code'=>$code,'description'=>$description);
                
                $result = $this->permission_model->editPermission($permissionInfo, $permissionId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Permission updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Permission updation failed');
                }
                
                redirect('/setup/permission/list');
            }
        }
    }


    /**
     * This function is used to delete the permission using permissionId
     * @return boolean $result : TRUE / FALSE
     */
    function delete()
    {
        if($this->checkAccess('permission.delete') == 1)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $permissionId = $this->input->post('permissionId');
            $permissionInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->permission_model->deletePermission($permissionId, $permissionInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
   
}

?>