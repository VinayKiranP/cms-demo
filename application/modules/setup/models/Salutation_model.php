<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Salutation_model extends CI_Model
{
    function salutationList()
    {
        $this->db->select('*');
        $this->db->from('salutation_setup');
        $this->db->order_by("name", "ASC");
         $query = $this->db->get();
         $result = $query->result();  
         return $result;
    }

    function salutationListSearch($search)
    {
        $this->db->select('*');
        $this->db->from('salutation_setup');
        if (!empty($search))
        {
            $likeCriteria = "(name  LIKE '%" . $search . "%' or sequence  LIKE '%" . $search . "%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by("name", "ASC");
         $query = $this->db->get();
         $result = $query->result();  
         return $result;
    }

    function getSalutation($id)
    {
        $this->db->select('*');
        $this->db->from('salutation_setup');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    
    function addNewSalutation($data)
    {
        $this->db->trans_start();
        $this->db->insert('salutation_setup', $data);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }

    function editSalutation($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('salutation_setup', $data);
        return TRUE;
    }
}

