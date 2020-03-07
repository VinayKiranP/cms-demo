<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Role_model (Role Model)
 * Role model class to get to handle role related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Role_model extends CI_Model
{
    /**
     * This function is used to get the role listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function roleListingCount()
    {
        $this->db->select('BaseTbl.roleId, BaseTbl.role');
        $this->db->from('tbl_roles as BaseTbl');
         $query = $this->db->get();
        
        return $query->num_rows();
    }
    /**
     * This function is used to get the role listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function latestRoleListing()
    {
        $this->db->select('BaseTbl.roleId, BaseTbl.role');
        $this->db->from('tbl_roles as BaseTbl');
        $this->db->limit(10, 0);
        $this->db->order_by("roleId", "desc");

         $query = $this->db->get();
         $result = $query->result();        
         return $result;
    }
    
    /**
     * This function is used to get the role listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function roleListing($role)
    {
        $this->db->select('BaseTbl.roleId, BaseTbl.role');
        $this->db->from('tbl_roles as BaseTbl');
        if(!empty($role)) {
        $likeCriteria = "(BaseTbl.role  LIKE '%".$role."%')";
        $this->db->where($likeCriteria);
        }
         $query = $this->db->get();
         $result = $query->result();        
         return $result;
    }

     /**
     * This function is used to get the role listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function rolePermissions($roleId)
    {
        $this->db->select('BaseTbl.permissionId');
        $this->db->from('tbl_role_permissions as BaseTbl');
        $this->db->where('roleId', $roleId);
        $query = $this->db->get();
         $result = $query->result();        
         return $result;
    }

     /**
     * This function is used to add new role to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewRole($roleInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_roles', $roleInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

     /**
     * This function is used to add new role to system
     * @return number $insert_id : This is last inserted id
     */
    function updateRolePermissions($permissions,$roleId)
    {
        $this->db->trans_start();
        $SQL = "delete from tbl_role_permissions where roleId = ".$roleId;
        $query = $this->db->query($SQL);
        foreach($permissions as $permission){
            $info = array('roleId'=>$roleId,'permissionId'=>$permission);
            $this->db->insert('tbl_role_permissions', $info);
        }
        
        $this->db->trans_complete();
        
        return ;
    }
    
    /**
     * This function used to get role information by id
     * @param number $roleId : This is role id
     * @return array $result : This is role information
     */
    function getRoleInfo($roleId)
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId', $roleId);
        $query = $this->db->get();
            // echo "<pre>";print_r($query);die;
        
        return $query->row();
    }

     /**
     * This function used to get role information by id
     * @param number $roleId : This is role id
     * @return array $result : This is role information
     */
    function checkAccess($roleId,$code)
    {
        $this->db->select('id');
        $this->db->from('tbl_role_permissions');
        $this->db->join('tbl_permissions', 'tbl_role_permissions.permissionId = tbl_permissions.permissionId');

        $this->db->where('roleId', $roleId);
        $this->db->where('code', $code);
        $query = $this->db->get();
        if(empty($query->row())){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    
    /**
     * This function is used to update the role information
     * @param array $roleInfo : This is roles updated information
     * @param number $roleId : This is role id
     */
    function editRole($roleInfo, $roleId)
    {
        $this->db->where('roleId', $roleId);
        $this->db->update('tbl_roles', $roleInfo);
        
        return TRUE;
    }
    
    
    
    /**
     * This function is used to delete the role information
     * @param number $roleId : This is role id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteRole($roleId, $roleInfo)
    {
        $this->db->where('roleId', $roleId);
        $this->db->update('tbl_roles', $roleInfo);
        
        return $this->db->affected_rows();
    }

}

  