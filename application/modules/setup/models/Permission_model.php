<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Permission_model (Permission Model)
 * Permission model class to get to handle permission related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Permission_model extends CI_Model
{
    /**
     * This function is used to get the permission listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function permissionListingCount()
    {
        $this->db->select('BaseTbl.permissionId, BaseTbl.code,BaseTbl.description');
        $this->db->from('tbl_permissions as BaseTbl');
         $query = $this->db->get();
        
        return $query->num_rows();
    }
    /**
     * This function is used to get the permission listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function latestPermissionListing()
    {
        $this->db->select('BaseTbl.permissionId, BaseTbl.code,BaseTbl.description');
        $this->db->from('tbl_permissions as BaseTbl');
        $this->db->limit(10, 0);
        $this->db->order_by("permissionId", "desc");

         $query = $this->db->get();
         $result = $query->result();        
         return $result;
    }
    
    /**
     * This function is used to get the permission listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function permissionListing()
    {
        $this->db->select('BaseTbl.permissionId, BaseTbl.code,BaseTbl.description');
        $this->db->from('tbl_permissions as BaseTbl');
         $query = $this->db->get();
         $result = $query->result();        
         return $result;
    }
     /**
     * This function is used to add new permission to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewPermission($permissionInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_permissions', $permissionInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
    /**
     * This function used to get permission information by id
     * @param number $permissionId : This is permission id
     * @return array $result : This is permission information
     */
    function getPermissionInfo($permissionId)
    {
        $this->db->select('permissionId, code,description');
        $this->db->from('tbl_permissions');
        $this->db->where('permissionId', $permissionId);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    
    /**
     * This function is used to update the permission information
     * @param array $permissionInfo : This is permissions updated information
     * @param number $permissionId : This is permission id
     */
    function editPermission($permissionInfo, $permissionId)
    {
        $this->db->where('permissionId', $permissionId);
        $this->db->update('tbl_permissions', $permissionInfo);
        
        return TRUE;
    }
    
    
    
    /**
     * This function is used to delete the permission information
     * @param number $permissionId : This is permission id
     * @return boolean $result : TRUE / FALSE
     */
    function deletePermission($permissionId, $permissionInfo)
    {
        $this->db->where('permissionId', $permissionId);
        $this->db->update('tbl_permissions', $permissionInfo);
        
        return $this->db->affected_rows();
    }

}

  