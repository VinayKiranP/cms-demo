<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('role_model');
        $this->load->model('permission_model');
        $this->load->model('country_model');
        $this->load->model('state_model');
        $this->isLoggedIn();    
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        
        $this->global['pageTitle'] = 'School : Dashboard';
        $userCount = $this->user_model->userListingCount();
        $roleCount = $this->role_model->roleListingCount();
        $permissionCount = $this->permission_model->permissionListingCount();
        $countryCount = $this->country_model->countryListingCount();
        $stateCount = $this->state_model->stateListingCount();
        
        // $latestLeads = $this->lead_model->latestLeadListing();
        // $latestOrders = $this->order_model->latestOrderListing();
        // $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
        $data['userCount'] = $userCount;
        $data['roleCount'] = $roleCount;
        $data['countryCount'] = $countryCount;
        $data['permissionCount'] = $permissionCount;
        $data['stateCount'] = $stateCount;
        // $data['orderCount'] = $orderCount;
        // $data['latestLeads'] = $latestLeads;
        // $data['latestOrders'] = $latestOrders;
        
        $this->loadViews("user/dashboard", $this->global, $data , NULL);
    }
    
    /**
     * This function is used to load the user list
     */
    function list()
    {
        try{
            if( $this->checkAccess('user.list') == 1)
            {
    
                $this->loadAccessRestricted();
            }
            else
            {         
                if ($this->input->method() == "post") {

                    // Get XSS cleaned values
                    $name = $this->security->xss_clean($this->input->post('name'));
                    $email = $this->security->xss_clean($this->input->post('email'));
                    $mobile = $this->security->xss_clean($this->input->post('mobile'));
                    $role = $this->security->xss_clean($this->input->post('role'));
                } else {
    
                    $name = '';
                    $email = '';
                    $mobile = '';
                    $role = '';
                }
    
                // Setting the entered values back to the form
    
                $data['name'] = $name;
                $data['email'] = $email;
                $data['mobile'] = $mobile;
                $data['role'] = $role;
    
                $data['userRecords'] = $this->user_model->userListing($name,$email,$mobile,$role);
                $data['roles'] = $this->role_model->roleListing('');
                
                $this->global['pageTitle'] = 'School : User Listing';
                
                $this->loadViews("user/list", $this->global, $data, NULL);
            }   
        }
        catch(Throwable $e){
            echo $e;
        }
       
    }
    /**
     * This function is used to load the add new form
     */
    function add()
    {
        if($this->checkAccess('user.add') == 1)
        {
            $this->loadAccessRestricted();
        }
        else
        {
            $data['roles'] = $this->user_model->getUserRoles();
            
            $this->global['pageTitle'] = 'School : Add New User';

            $this->loadViews("user/add", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }
    
    /**
     * This function is used to add new user to the system
     */
    function addNewUser()
    {
        if($this->checkAccess('user.add') == 1)
        {
            $this->loadAccessRestricted();
        }
        else
        {
           
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $email = strtolower($this->security->xss_clean($this->input->post('email')));
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                
                $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId, 'name'=> $name,
                                    'mobile'=>$mobile, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->user_model->addNewUser($userInfo);
                
                redirect('/setup/user/list');
            }
    }

    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function edit($userId = NULL)
    {
        if($this->checkAccess('user.edit') == 1)
        {
            $this->loadAccessRestricted();
        }
        else
        {
            if($userId == null)
            {
                redirect('/setup/user/list');
            }
            
            $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getUserInfo($userId);
            
            $this->global['pageTitle'] = 'School : Edit User';
            
            $this->loadViews("user/edit", $this->global, $data, NULL);
        }
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
        if($this->checkAccess('user.edit') == 1)
        {
            $this->loadAccessRestricted();
        }
        else
        {
        
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $email = strtolower($this->security->xss_clean($this->input->post('email')));
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                
                $userInfo = array();
                
                if(empty($password))
                {
                    $userInfo = array('email'=>$email, 'roleId'=>$roleId, 'name'=>$name,
                                    'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                else
                {
                    $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId,
                        'name'=>ucwords($name), 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 
                        'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                
                $result = $this->user_model->editUser($userInfo, $userId);
                
                redirect('/setup/user/list');
        }
    }


    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function delete()
    {
        if($this->checkAccess('user.delete') == 1)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $userId = $this->input->post('userId');
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteUser($userId, $userInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
    /**
     * Page not found : error 404
     */
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'School : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    /**
     * This function is used to show users profile
     */
    function profile($active = "details")
    {
        if($this->checkAccess('user.profile') == 1)
        {
            $this->loadAccessRestricted();
        }
        else
        {
        $data["userInfo"] = $this->user_model->getUserInfoWithRole($this->vendorId);
        $data["active"] = $active;
        
        $this->global['pageTitle'] = $active == "details" ? 'School : My Profile' : 'School : Change Password';
        $this->loadViews("user/profile", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to update the user details
     * @param text $active : This is flag to set the active tab
     */
    function profileUpdate($active = "details")
    {
        if($this->checkAccess('user.profile') == 1)
        {
            $this->loadAccessRestricted();
        }
        else
        {
      
            $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
            $mobile = $this->security->xss_clean($this->input->post('mobile'));
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            
            $userInfo = array('name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->editUser($userInfo, $this->vendorId);
            
            redirect('/setup/user/profile/'.$active);
    }
    }

    /**
     * This function is used to change the password of the user
     * @param text $active : This is flag to set the active tab
     */
    function changePassword($active = "changepass")
    {
        if($this->checkAccess('user.changepassword') == 1)
        {
            $this->loadAccessRestricted();
        }
        else
        {
       
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');
            
            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
            
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password is not correct');
                redirect('/setup/user/profile/'.$active);
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->user_model->changePassword($this->vendorId, $usersData);
                
                redirect('/setup/user/profile/'.$active);
            }
    }
    }

    /**
     * This function is used to check whether email already exist or not
     * @param {string} $email : This is users email
     */
    function emailExists($email)
    {
        $userId = $this->vendorId;
        $return = false;

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ $return = true; }
        else {
            $this->form_validation->set_message('emailExists', 'The {field} already taken');
            $return = false;
        }

        return $return;
    }
}
