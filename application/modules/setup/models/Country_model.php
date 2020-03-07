<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Country_model (Country Model)
 * Country model class to get to handle country related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Country_model extends CI_Model
{
    /**
     * This function is used to get the country listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function countryListingCount()
    {
        $this->db->select('BaseTbl.countryId, BaseTbl.name');
        $this->db->from('tbl_country as BaseTbl');
         $query = $this->db->get();
        
        return $query->num_rows();
    }
    /**
     * This function is used to get the country listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function latestCountryListing()
    {
        $this->db->select('BaseTbl.countryId, BaseTbl.name');
        $this->db->from('tbl_country as BaseTbl');
        $this->db->limit(10, 0);
        $this->db->order_by("countryId", "desc");

         $query = $this->db->get();
         $result = $query->result();        
         return $result;
    }
    
    /**
     * This function is used to get the country listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function countryListing($country)
    {
        $this->db->select('BaseTbl.countryId, BaseTbl.name');
        $this->db->from('tbl_country as BaseTbl');
        if (!empty($country)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%" . $country . "%')";
            $this->db->where($likeCriteria);
        }
         $query = $this->db->get();
         $result = $query->result();        
         return $result;
    }

    
     /**
     * This function is used to add new country to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewCountry($countryInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_country', $countryInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    
    /**
     * This function used to get country information by id
     * @param number $countryId : This is country id
     * @return array $result : This is country information
     */
    function getCountryInfo($countryId)
    {
        $this->db->select('countryId, name');
        $this->db->from('tbl_country');
        $this->db->where('countryId', $countryId);
        $query = $this->db->get();
            // echo "<pre>";print_r($query);die;
        
        return $query->row();
    }

    
    /**
     * This function is used to update the country information
     * @param array $countryInfo : This is countrys updated information
     * @param number $countryId : This is country id
     */
    function editCountry($countryInfo, $countryId)
    {
        $this->db->where('countryId', $countryId);
        $this->db->update('tbl_country', $countryInfo);
        
        return TRUE;
    }
    
    
    
    /**
     * This function is used to delete the country information
     * @param number $countryId : This is country id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteCountry($countryId, $countryInfo)
    {
        $this->db->where('countryId', $countryId);
        $this->db->update('tbl_country', $countryInfo);
        
        return $this->db->affected_rows();
    }

}

  