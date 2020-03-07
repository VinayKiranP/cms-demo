<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Country (CountryController)
 * Country Class to control all country related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Country extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('country_model');
        $this->isLoggedIn();
    }


    /**
     * This function is used to load the country list
     */
    function list()
    {
        if ($this->checkAccess('country.list') == 1) {
            $this->loadAccessRestricted();
        } else {
            if ($this->input->method() == "post") {

                // Get XSS cleaned values
                $name = $this->security->xss_clean($this->input->post('name'));
            } else {

                $name = '';
            }
            $data['name'] = $name;
            $data['countryRecords'] = $this->country_model->countryListing($name);

            $this->global['pageTitle'] = 'School : Country Listing';

            $this->loadViews("country/list", $this->global, $data, NULL);
        }
    }
    /**
     * This function is used to load the add new form
     */
    function add()
    {
        if ($this->checkAccess('country.add') == 1) {
            $this->loadAccessRestricted();
        } else {
            $this->load->model('country_model');

            $this->global['pageTitle'] = 'School : Add New Country';

            $this->loadViews("country/add", $this->global, NULL, NULL);
        }
    }

    /**
     * This function is used to add new country to the system
     */
    function addNewCountry()
    {
        if ($this->checkAccess('country.add') == 1) {
            $this->loadAccessRestricted();
        } else {
            $name = $this->security->xss_clean($this->input->post('name'));

            $countryInfo = array('name' => $name);

            $result = $this->country_model->addNewCountry($countryInfo);

            redirect('/setup/country/list');
        }
    }


    /**
     * This function is used load country edit information
     * @param number $countryId : Optional : This is country id
     */
    function edit($countryId = NULL)
    {
        if ($this->checkAccess('country.edit') == 1) {
            $this->loadAccessRestricted();
        } else {
            if ($countryId == null) {
                redirect('/setup/country/list');
            }

            $data['countryInfo'] = $this->country_model->getCountryInfo($countryId);

            $this->global['pageTitle'] = 'School : Edit Country';

            $this->loadViews("country/edit", $this->global, $data, NULL);
        }
    }


    /**
     * This function is used to edit the country information
     */
    function editCountry()
    {
        if ($this->checkAccess('country.edit') == 1) {
            $this->loadAccessRestricted();
        } else {

            $countryId = $this->input->post('countryId');

            $name = $this->security->xss_clean($this->input->post('name'));

            $countryInfo = array('name' => $name);

            $result = $this->country_model->editCountry($countryInfo, $countryId);

            redirect('/setup/country/list');
        }
    }


    /**
     * This function is used to delete the country using countryId
     * @return boolean $result : TRUE / FALSE
     */
    function delete()
    {
        if ($this->checkAccess('country.delete') == 1) {
            echo (json_encode(array('status' => 'access')));
        } else {
            $countryId = $this->input->post('countryId');
            $countryInfo = array('isDeleted' => 1, 'updatedBy' => $this->vendorId, 'updatedDtm' => date('Y-m-d H:i:s'));

            $result = $this->country_model->deleteCountry($countryId, $countryInfo);

            if ($result > 0) {
                echo (json_encode(array('status' => TRUE)));
            } else {
                echo (json_encode(array('status' => FALSE)));
            }
        }
    }
}
