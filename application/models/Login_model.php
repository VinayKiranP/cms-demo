<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function loginMe($email, $password)
    {
        $this->db->select('u.*, r.name as role');
        $this->db->from('users as u');
        $this->db->join('user_roles as r','u.id_role = r.id');
        $this->db->where('u.email', $email);
        $this->db->where('u.is_deleted', 0);
        $query = $this->db->get();
        
        $user = $query->row();
        
        if(!empty($user))
        {
            if(verifyHashedPassword($password, $user->password))
            {
                return $user;
            }
            else
            {
                return array();
            }
        }
        else
        {
            return array();
        }
    }

    function checkEmailExist($email)
    {
        $this->db->select('id');
        $this->db->where('email', $email);
        $this->db->where('is_deleted', 0);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function resetPasswordUser($data)
    {
        $result = $this->db->insert('reset_user_password', $data);

        if($result)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    function getCustomerInfoByEmail($email)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('is_deleted', 0);
        $this->db->where('email', $email);
        $query = $this->db->get();

        return $query->row();
    }

    function checkActivationDetails($email, $activation_id)
    {
        $this->db->select('id');
        $this->db->from('reset_user_password');
        $this->db->where('email', $email);
        $this->db->where('activation_id', $activation_id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function createPasswordUser($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('is_deleted', 0);
        $this->db->update('users', array('password'=>getHashedPassword($password)));
        $this->db->delete('reset_user_password', array('email'=>$email));
    }

    function lastLogin($loginInfo)
    {
        $this->db->trans_start();
        $this->db->insert('user_last_login', $loginInfo);
        $this->db->trans_complete();
    }

    function lastLoginInfo($userId)
    {
        $this->db->select('l.created_dt_tm');
        $this->db->where('l.id_user', $userId);
        $this->db->order_by('l.id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('user_last_login as l');

        return $query->row();
    }
}
?>