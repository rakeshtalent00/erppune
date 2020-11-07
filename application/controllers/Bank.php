<?php 

class Bank extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('PaymentType_Model');
        $this->load->model('Bank_Model');
    }
    
    function _is_unique($acno,$id)
    {
        $this->form_validation->set_message('_is_unique',"Given account number already exists");
        $this->db->where('id !=',$id);
        $this->db->where('account_no',$acno);
        $exists = $this->db->get('banks')->row();
        return $exists ? false : true;
    }
    
    function index()
    {
        $allBanks = $this->Bank_Model->getBanks();
        
        $this->data['banks'] = $allBanks;
        $this->title = "Banks List";
        $this->page = "bank/listBank";
        $this->layout();
    }

    function create()
    {
        # code...
        if($this->input->method() == 'post')
        {
            $this->form_validation->set_rules($this->Bank_Model->rules());
			if($this->form_validation->run() != FALSE)
			{
                $res = $this->Bank_Model->createBank($this->input->post());
				if($res)
				{
					$this->session->set_flashdata('success', 'Bank Successfully Created');
					redirect('batch/create');
				}
				else
				{
					$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
					redirect('batch/create');
				}
            }
        }
        $this->title = "Create New Bank";
        $this->page = "bank/createBank";

        //Getting Payment Types
        $this->data['paymentTypes'] = $this->PaymentType_Model->getPaymentTypes();

        $this->layout();
    }


    function update($id = NULL)
    {
        
        $allPaymentTypes = $this->PaymentType_Model->getPaymentTypes();

        
        $this->data['all_paymentTypes'] = $allPaymentTypes;
		$this->page = "bank/updateBank";
		$this->title = "Bank Update";
		if($this->input->method() == 'post')
		{
			$this->form_validation->set_rules($this->Bank_Model->rules());
			if($this->form_validation->run())
			{
				$res = $this->Bank_Model->updateBank($this->input->post());
				if($res)
				{
					$this->session->set_flashdata('success', 'Bank Successfully Updated');
					redirect('bank');
				}
				else
				{
					$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
					redirect('bank');
				}
			}
        }
        
        $id = $id == NULL ? $this->input->post('id') : $id;
        $bank = $this->Bank_Model->getBankById($id); 
        $this->data['bank'] = $bank;
		$this->layout();

    }
}

?>