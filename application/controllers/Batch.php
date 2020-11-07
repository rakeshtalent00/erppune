<?php 

class Batch extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Batch_Model');
    }

    function start_end_date_check($start_date, $end_date)
    {
        $this->form_validation->set_message('start_end_date_check',"Start Date should be less than End Date");
        return strtotime($end_date) > strtotime($start_date) ? true : false;
    }

    function _is_unique_code($code,$id)
    {
        $this->form_validation->set_message('_is_unique_code',"Code is already exists");

        return !$this->Batch_Model->isCodeExists($code,$id);

    }
    
    function index()
    {
        $allBatches = $this->Batch_Model->getBatches();
        $this->data['batches'] = $allBatches;
        $this->title = "Batches List";
        $this->page = "batch/listBatch";
        $this->layout();
    }

    function create()
    {
        # code...
        if($this->input->method() == 'post')
        {
            $this->form_validation->set_rules($this->Batch_Model->rules());
			if($this->form_validation->run() != FALSE)
			{
                $res = $this->Batch_Model->createBatch($this->input->post());
				if($res)
				{
					$this->session->set_flashdata('success', 'Batch Successfully Created');
					redirect('batch/create');
				}
				else
				{
					$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
					redirect('batch/create');
				}
            }
        }
        $this->title = "Create Batch";
        $this->page = "batch/createBatch";
        $this->layout();
    }


    function update($id = NULL)
    {
        $batch = $this->Batch_Model->getBatches($id);

        if($id)
        {
            $batch->start_date = (explode(" ",$batch->start_date))[0];
            $batch->end_date = (explode(" ",$batch->end_date))[0];
        }
        

      
		$this->data['batch'] = $batch;
		$this->page = "batch/updateBatch";
		$this->title = "Batch Update";
		if($this->input->method() == 'post')
		{
			$this->form_validation->set_rules($this->Batch_Model->rules());
			if($this->form_validation->run())
			{
				$res = $this->Batch_Model->updateBatch($this->input->post());
				if($res)
				{
					$this->session->set_flashdata('success', 'Batch Successfully Updated');
					redirect('batch');
				}
				else
				{
					$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
					redirect('batch');
				}
			}
		}
		$this->layout();

    }
}

?>