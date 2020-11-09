<?php
class Batch_Model extends CI_Model{
    
    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'code',
            'label' => 'Code',
            'rules' => 'required|callback__is_unique_code['.$this->input->post('id').']'],

            ['field' => 'start_date',
            'label' => 'Start Date',
            'rules' => 'required|callback_start_end_date_check['.$this->input->post('end_date').']'],

            ['field' => 'end_date',
            'label' => 'End Date',
            'rules' => 'required']
        ];
    }

    function __construct(){
        $this->load->database();
    } 
    function __destruct() 
    {        
    }  

    function isCodeExists($code,$id)
    {
        $this->db->where('code LIKE',$code);
        if($id != '')
        {
            $this->db->where('id !=',$id);
        }
        $query = $this->db->get('batches');

        if(count($query->result()) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    function createBatch($formData)
    {
        return $this->db->insert('batches', $formData) ? true : false;
    }

    function updateBatch($formData)
    {
        # code...
        $this->db->where('id',$formData['id']);
        return $this->db->update('batches', $formData) ? true : false;
    }

    function getBatches($id = 0)
    {
        $this->db->where('is_deleted',0);
        if($id != 0) {
            $this->db->where('id',$id);
        }
        $query=$this->db->get('batches');
        return $id != 0 ? $query->row() : $query->result();
    }


}
?>                                                                                                                                              