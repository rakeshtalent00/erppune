<?php 
class Program extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Program_Model');
    }

    function index()
    {
        $allPrograms = $this->Program_Model->getProgram();
		$this->data['programs'] = $allPrograms;
		$this->page = "program/listPrograms";
		$this->title = "Program List";
		$this->layout();
    }

    function create()
    {
        # code...
        $this->title = "Create Program";
        $this->page = "program/createProgram";
        if($this->input->method() == 'post')
        {
            $this->form_validation->set_rules($this->Program_Model->rules());
			if($this->form_validation->run() != FALSE)
			{
                $res = $this->Program_Model->createProgram($this->input->post());
				if($res)
				{
					$this->session->set_flashdata('success', 'Program Successfully Created');
					redirect('program/create');
				}
				else
				{
					$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
					redirect('program/create');
				}
            }
        }
        $this->layout();
    }

    function update( $id = NULL)
	{
		# code...
		$program = $this->Program_Model->getProgram($id);
		$this->data['program'] = $program;
		$this->page = "program/updateProgram";
		$this->title = "Program Update";
		if($this->input->method() == 'post')
		{
			$this->form_validation->set_rules($this->Program_Model->rules());
			if($this->form_validation->run())
			{
				$res = $this->Program_Model->updateProgram($this->input->post());
				if($res)
				{
					$this->session->set_flashdata('success', 'Program Successfully Updated');
					redirect('program');
				}
				else
				{
					$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
					redirect('program');
				}
			}
		}
		$this->layout();
	}

}

?>