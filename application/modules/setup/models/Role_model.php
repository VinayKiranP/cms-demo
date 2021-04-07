<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Role_model extends CI_Model
{

    function roleListingCount()
    {
        $this->db->select('BaseTbl.id, BaseTbl.role');
        $this->db->from('user_roles as BaseTbl');
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function latestRoleListing()
    {
        $this->db->select('BaseTbl.id, BaseTbl.role');
        $this->db->from('user_roles as BaseTbl');
        $this->db->limit(10, 0);
        $this->db->order_by("id", "desc");

         $query = $this->db->get();
         $result = $query->result();        
         return $result;
    }

    function roleListing($role)
    {
        $this->db->select('BaseTbl.id, BaseTbl.role');
        $this->db->from('user_roles as BaseTbl');
        if(!empty($role))
        {
            $likeCriteria = "(BaseTbl.role  LIKE '%".$role."%')";
            $this->db->where($likeCriteria);
        }

        $query = $this->db->get();
        $result = $query->result();        
        
        return $result;
    }

    function rolePermissions($id)
    {
        $this->db->select('BaseTbl.permissionId');
        $this->db->from('role_permissions as BaseTbl');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();        
        
        return $result;
    }

    function addNewRole($roleInfo)
    {
        $this->db->trans_start();
        $this->db->insert('user_roles', $roleInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function updateRolePermissions($permissions,$id)
    {
        $this->db->trans_start();
        $SQL = "delete from role_permissions where id = ".$id;
        $query = $this->db->query($SQL);
        
        foreach($permissions as $permission)
        {
            $info = array('id'=>$id,'permissionId'=>$permission);
            $this->db->insert('role_permissions', $info);
        }
        
        $this->db->trans_complete();
        
        return ;
    }
    

    function getRoleInfo($id)
    {
        $this->db->select('id, role');
        $this->db->from('user_roles');
        $this->db->where('id', $id);
        $query = $this->db->get();
            // echo "<pre>";print_r($query);die;
        
        return $query->row();
    }

    function checkAccess($id_role,$code)
    {
        // return 0;
        $this->db->select('rp.id');
        $this->db->from('role_permissions as rp');
        $this->db->join('permissions as p', 'rp.id_permission = p.id');

        $this->db->where('rp.id_role', $id_role);
        $this->db->where('p.code', $code);
        $query = $this->db->get();
        $result = $query->row();
        // echo "<pre>";print_r($result);die;
        if(empty($result))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    
    function editRole($roleInfo, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('user_roles', $roleInfo);
        
        return TRUE;
    }
    
    function deleteRole($id, $roleInfo)
    {
        $this->db->where('id', $id);
        $this->db->update('user_roles', $roleInfo);
        
        return $this->db->affected_rows();
    }

}

  