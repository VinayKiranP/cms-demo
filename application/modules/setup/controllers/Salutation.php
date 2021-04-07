<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Salutation extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('salutation_model');
        $this->isLoggedIn();

        echo "<>":exit;
    }

    function list()
    {
        if ($this->checkAccess('salutation.list') == 0)
        {
            $this->loadAccessRestricted();
        }
        else
        {
            $name = $this->security->xss_clean($this->input->post('name'));
            $data['searchName'] = $name;
            $data['salutationList'] = $this->salutation_model->salutationListSearch($name);
            $this->global['pageTitle'] = 'Scholarship Management System : Salutation List';
            $this->loadViews("salutation/list", $this->global, $data, NULL);
        }
    }
    
    function add()
    {
        if ($this->checkAccess('salutation.add') == 0)
        {
            $this->loadAccessRestricted();
        }
        else
        {
            if($this->input->post())
            {
                $name = $this->security->xss_clean($this->input->post('name'));
                $sequence = $this->security->xss_clean($this->input->post('sequence'));
                $status = $this->security->xss_clean($this->input->post('status'));
            
                $data = array(
                    'name' => $name,
                    'sequence' => $sequence,
                    'status' => $status
                );
                //echo "<Pre>"; print_r($subjectDetails);exit;

                $result = $this->salutation_model->addNewSalutation($data);
                redirect('/setup/salutation/list');
            }
            $this->global['pageTitle'] = 'Scholarship Management System : Add Salutation';
            $this->loadViews("salutation/add", $this->global, NULL, NULL);
        }
    }


    function edit($id = NULL)
    {
        if ($this->checkAccess('salutation.edit') == 0)
        {
            $this->loadAccessRestricted();
        }
        else
        {
            if ($id == null)
            {
                redirect('/setup/salutation/list');
            }
            if($this->input->post())
            {
                $name = $this->security->xss_clean($this->input->post('name'));
                $sequence = $this->security->xss_clean($this->input->post('sequence'));
                $status = $this->security->xss_clean($this->input->post('status'));
            
                $data = array(
                    'name' => $name,
                    'sequence' => $sequence,
                    'status' => $status
                );

                $result = $this->salutation_model->editSalutation($data,$id);
                redirect('/setup/salutation/list');
            }
            $data['salutation'] = $this->salutation_model->getSalutation($id);
            $this->global['pageTitle'] = 'Scholarship Management System : Edit Salutation';
            $this->loadViews("salutation/edit", $this->global, $data, NULL);
        }
    }
}
