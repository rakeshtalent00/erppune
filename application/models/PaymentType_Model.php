<?php
class PaymentType_Model extends CI_Model{
    
    public $tableName = 'payment_type';

    function getPaymentTypes($id = 0)
    {
        $this->db->where('is_deleted',0);
        $this->db->where('status',1);
        if($id != 0) {
            $this->db->where('id',$id);
        }
        $this->db->select('id,name');
        $query=$this->db->get($this->tableName);
        return $id != 0 ? $query->row() : $query->result();
    }


}
?>                                                                                                                                              