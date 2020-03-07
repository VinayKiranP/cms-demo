<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Order_model (Order Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Order_model extends CI_Model
{
    /**
     * This function is used to get the order listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function orderListingCount()
    {
        $this->db->select('BaseTbl.id');
        $this->db->from('orders as BaseTbl');
        $query = $this->db->get();

        return $query->num_rows();
    }
    /**
     * This function is used to get the order listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function latestOrderListing()
    {
        $this->db->select('BaseTbl.id, BaseTbl.order_id, BaseTbl.product_id, BaseTbl.product_pack_id, BaseTbl.qty, BaseTbl.purchasing_price,AddressTbl.name,AddressTbl.email,AddressTbl.phone,PaymentTbl.total,PaymentTbl.payment_type,PaymentTbl.payment_status,PaymentTbl.date');
        $this->db->from('orders as BaseTbl');
        $this->db->join('orders_addresses as AddressTbl', 'AddressTbl.order_id = BaseTbl.order_id');
        $this->db->join('booking_payment as PaymentTbl', 'PaymentTbl.booking_id = BaseTbl.order_id');
        $this->db->limit(10, 0);
        $this->db->order_by("id", "desc");

        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    /**
     * This function is used to get the order listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function orderListing($searchText = '')
    {
        $this->db->select('BaseTbl.id, BaseTbl.order_id, BaseTbl.product_id, BaseTbl.product_pack_id, BaseTbl.qty, BaseTbl.purchasing_price,AddressTbl.name,AddressTbl.email,AddressTbl.phone,PaymentTbl.total,PaymentTbl.payment_type,PaymentTbl.payment_status,PaymentTbl.date');
        $this->db->from('orders as BaseTbl');
        $this->db->join('orders_addresses as AddressTbl', 'AddressTbl.order_id = BaseTbl.order_id');
        $this->db->join('booking_payment as PaymentTbl', 'PaymentTbl.booking_id = BaseTbl.order_id');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    function orderDetail($orderId = NULL)
    {
        $this->db->select('AddressTbl.order_id,AddressTbl.id, AddressTbl.order_id, AddressTbl.name, AddressTbl.email, AddressTbl.phone, AddressTbl.country,AddressTbl.city,AddressTbl.state,AddressTbl.region_code,AddressTbl.address,AddressTbl.pincode');
        $this->db->from('orders_addresses as AddressTbl');
        $this->db->where('AddressTbl.order_id', $orderId);
        $query = $this->db->get()->row();
        //  $result = $query->result();   
        $final_result['address'] = $query;
        $this->db->select('PaymentTbl.id, PaymentTbl.subtotal, PaymentTbl.tax, PaymentTbl.total, PaymentTbl.payment_type, PaymentTbl.payment_status,PaymentTbl.shipping,PaymentTbl.date');
        $this->db->from('booking_payment as PaymentTbl');
        $this->db->where('PaymentTbl.booking_id', $orderId);
        $query = $this->db->get();
        $result = $query->result();
        $final_result['payments'] = $result;
        $this->db->select('BaseTbl.id, BaseTbl.product_id, BaseTbl.product_pack_id, BaseTbl.qty, BaseTbl.purchasing_price,ProductTbl.product_name,ProductTbl.product_description');
        $this->db->from('orders as BaseTbl');
        $this->db->join('products as ProductTbl', 'ProductTbl.id = BaseTbl.product_id');
        $this->db->where('BaseTbl.order_id', $orderId);
        $query = $this->db->get();
        $result = $query->result();
        $final_result['products'] = $result;

        return $final_result;
    }
}
