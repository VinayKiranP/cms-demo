<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : State_model (State Model)
 * State model class to get to handle state related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class State_model extends CI_Model
{
    /**
     * This function is used to get the state listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function stateListingCount()
    {
        $this->db->select('BaseTbl.stateId, BaseTbl.name,BaseTbl.idCountry');
        $this->db->from('tbl_state as BaseTbl');
        $query = $this->db->get();

        return $query->num_rows();
    }
    /**
     * This function is used to get the state listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function latestStateListing()
    {
        $this->db->select('BaseTbl.stateId, BaseTbl.name,BaseTbl.idCountry');
        $this->db->from('tbl_state as BaseTbl');
        $this->db->limit(10, 0);
        $this->db->order_by("stateId", "desc");

        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    /**
     * This function is used to get the state listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function stateListing($state, $country)
    {
        $this->db->select('BaseTbl.stateId, BaseTbl.name,BaseTbl.idCountry,CountryTbl.name as CountryName');
        $this->db->from('tbl_state as BaseTbl');
        $this->db->join('tbl_country as CountryTbl', 'CountryTbl.countryId = BaseTbl.idCountry');
        if (!empty($state)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%" . $state . "%')";
            $this->db->where($likeCriteria);
        }
        if (!empty($country)) {
            $likeCriteria = "(BaseTbl.idCountry  = $country)";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    /**
     * This function is used to add new state to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewState($stateInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_state', $stateInfo);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }

    /**
     * This function used to get state information by id
     * @param number $stateId : This is state id
     * @return array $result : This is state information
     */
    function getStateInfo($stateId)
    {
        $this->db->select('stateId, name,idCountry');
        $this->db->from('tbl_state');
        $this->db->where('stateId', $stateId);
        $query = $this->db->get();
        // echo "<pre>";print_r($query);die;

        return $query->row();
    }


    /**
     * This function is used to update the state information
     * @param array $stateInfo : This is states updated information
     * @param number $stateId : This is state id
     */
    function editState($stateInfo, $stateId)
    {
        $this->db->where('stateId', $stateId);
        $this->db->update('tbl_state', $stateInfo);

        return TRUE;
    }



    /**
     * This function is used to delete the state information
     * @param number $stateId : This is state id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteState($stateId, $stateInfo)
    {
        $this->db->where('stateId', $stateId);
        $this->db->update('tbl_state', $stateInfo);

        return $this->db->affected_rows();
    }
}
