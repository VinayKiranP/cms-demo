<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class State extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        // Loading required models

        $this->load->model('state_model');
        $this->load->model('country_model');

        // Check valid User Login

        $this->isLoggedIn();
    }


    /**
     * This function is used to load the state list
     */
    function list()
    {
        // Check the user has permission or not

        if ($this->checkAccess('state.list') == 1) {

            // Load unauthorized access page

            $this->loadAccessRestricted();
        } else {

            // Check method is post, search form has been submitted or not

            if ($this->input->method() == "post") {

                // Get XSS cleaned values
                $name = $this->security->xss_clean($this->input->post('state'));
                $idCountry = $this->security->xss_clean($this->input->post('idCountry'));
            } else {

                $name = '';
                $idCountry = 0;
            }

            // Setting the entered values back to the form

            $data['name'] = $name;
            $data['idCountry'] = $idCountry;

            // Getting state records based on filter
            $data['stateRecords'] = $this->state_model->stateListing($name, $idCountry);
            $data['countries'] = $this->country_model->countryListing('');

            $this->global['pageTitle'] = 'School : State Listing';

            // Load View
            $this->loadViews("state/list", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function add()
    {
        // Check the user has permission or not

        if ($this->checkAccess('state.add') == 1) {

            // Load unauthorized access page

            $this->loadAccessRestricted();
        } else {

            // Get country values for dropdown

            $data['countries'] = $this->country_model->countryListing('');

            $this->global['pageTitle'] = 'School : Add New State';

            // Load View

            $this->loadViews("state/add", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to add new state to the system
     */
    function addNewState()
    {
        // Check the user has permission or not

        if ($this->checkAccess('state.add') == 1) {

            // Load unauthorized access page

            $this->loadAccessRestricted();
        } else {
            // Get XSS cleaned values

            $name = $this->security->xss_clean($this->input->post('name'));
            $idCountry = $this->security->xss_clean($this->input->post('idCountry'));

            $stateInfo = array('name' => $name, 'idCountry' => $idCountry);

            // Save to database

            $result = $this->state_model->addNewState($stateInfo);
            
            // Redirect to list page
            
            redirect('/setup/state/list');
        }
    }


    /**
     * This function is used load state edit information
     * @param number $stateId : Optional : This is state id
     */
    function edit($stateId = NULL)
    {
        // Check the user has permission or not

        if ($this->checkAccess('state.edit') == 1) {
           
            // Load unauthorized access page
           
            $this->loadAccessRestricted();
        
        } else {

            if ($stateId == null) {

                redirect('/setup/state/list');
            }

            $data['countries'] = $this->country_model->countryListing('');
            $data['stateInfo'] = $this->state_model->getStateInfo($stateId);

            $this->global['pageTitle'] = 'School : Edit State';

            // Load View

            $this->loadViews("state/edit", $this->global, $data, NULL);
        }
    }


    /**
     * This function is used to edit the state information
     */
    function editState()
    {
        // Check the user has permission or not
        
        if ($this->checkAccess('state.edit') == 1) {
        
            // Load unauthorized access page

            $this->loadAccessRestricted();

        } else {

            $stateId = $this->input->post('stateId');

            // Get XSS cleaned values
            
            $name = $this->security->xss_clean($this->input->post('name'));
            $idCountry = $this->security->xss_clean($this->input->post('idCountry'));

            $stateInfo = array('name' => $name, 'idCountry' => $idCountry);

            // Save to database
           
            $result = $this->state_model->editState($stateInfo, $stateId);

            // Redirect to list page

            redirect('/setup/state/list');
        }
    }


    /**
     * This function is used to delete the state using stateId
     * @return boolean $result : TRUE / FALSE
     */
    function delete()
    {
        if ($this->checkAccess('state.delete') == 1) {
            echo (json_encode(array('status' => 'access')));
        } else {
            $stateId = $this->input->post('stateId');
            $stateInfo = array('isDeleted' => 1, 'updatedBy' => $this->vendorId, 'updatedDtm' => date('Y-m-d H:i:s'));

            $result = $this->state_model->deleteState($stateId, $stateInfo);

            if ($result > 0) {
                echo (json_encode(array('status' => TRUE)));
            } else {
                echo (json_encode(array('status' => FALSE)));
            }
        }
    }
}
