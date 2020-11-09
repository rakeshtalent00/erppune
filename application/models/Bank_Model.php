<?php
class Bank_Model extends CI_Model{
    
    private $tableName = 'banks';
    private $fields = "id,name,branch_name,ifsc_code,address,account_no,shortcode,status";
    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Bank Name',
            'rules' => 'required'],

            ['field' => 'branch_name',
            'label' => 'Branch Name',
            'rules' => 'required|alpha'],

            ['field' => 'address',
            'label' => 'Address',
            'rules' => 'required'],

            ['field' => 'ifsc_code',
            'label' => 'IFSC Code',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required'],

            ['field' => 'account_no',
            'label' => 'Account No',
            'rules' => 'required|numeric|callback__is_unique['.$this->input->post('id').']'],

            ['field' => 'shortcode',
            'label' => 'Short Code',
            'rules' => 'required'],

            ['field' => 'payment_type[]',
            'label' => 'Payment Type',
            'rules' => 'required'],
        ];
    }

    function __construct(){
        $this->load->database();
    } 
    function __destruct() 
    {        
    }  


    function createBank($formData)
    {   
        $bankId = 0;
        $paymentTypeIds = $formData['payment_type'];
        unset($formData['payment_type']);

        //Inserting Bank
        if($this->db->insert($this->tableName, $formData)){
            $bankId = $this->db->insert_id();
            if($bankId != 0)
            {
                foreach($paymentTypeIds as $id)
                {
                    $insertData[] = array(
                        'bank_id' => $bankId,
                        'payment_type_id' => $id
                    );
                }

                //Inserting
                $this->db->insert_batch('bank_payment_type_mappings',$insertData);
                return true;
            }
            else
            {
                return false;
            }

        }
        else
        {
            return false;
        }

    }

    function updateBank($formData)
    {
        # code...
        $this->db->where('id',$formData['id']);
        $paymentTypeIds = $formData['payment_type'];
        unset($formData['payment_type']);
        $this->db->update($this->tableName, $formData);

        
        //Deleting Mapping Entries
        $this->db->where('bank_id',$formData['id']);
        $this->db->delete('bank_payment_type_mappings');
        foreach($paymentTypeIds as $id)
        {
            $insertData[] = array(
                'bank_id' => $formData['id'],
                'payment_type_id' => $id
            );
        }

        //Inserting
        return $this->db->insert_batch('bank_payment_type_mappings',$insertData);


    }

    function getBanks($id = 0)
    {

        $this->db->select('a.*,c.name as payment_type');
        $this->db->from('banks a'); 
        $this->db->join('bank_payment_type_mappings b', 'b.bank_id=a.id','left');
        $this->db->join('payment_type c', 'c.id=b.payment_type_id','left');  


        //$this->db->select($this->fields);
        $this->db->where('a.is_deleted',0);
        /* if($id != 0) {
            $this->db->where('a.id',$id);
        } */
        $query=$this->db->get();
        return /* $id != 0 ? $query->row() :  */$query->result();
    }

    function getBankById($id)
    {
        # code...
        $this->db->where('id',$id);
        $this->db->select($this->fields);
        $bankDetails = $this->db->get($this->tableName)->row();

        //Getting Payment Types from Mapping Table
        $sql="SELECT pt.id,pt.name FROM bank_payment_type_mappings bpm JOIN payment_type pt ON pt.id = bpm.payment_type_id WHERE bpm.bank_id =".$id;
        $query = $this->db->query($sql);
        $bankPaymentMethods = $query->result_array();

        $bankDetails->payment_types = $bankPaymentMethods;
        return $bankDetails;

    }


}
?>                                                                                                                                              