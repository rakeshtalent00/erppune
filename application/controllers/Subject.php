<?php
class Subject extends MY_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Subject_Model');
	}
	
	function passing_marks_check($passing_marks,$total_marks)
	{
		# code...
		$this->form_validation->set_message('passing_marks_check',"Passing Marks should be less than total marks");
        return $total_marks >= $passing_marks ? true : false;
	}
	
	
	
	function index(){
		$allSubjects = $this->Subject_Model->getSubjects();
		$this->data['subjects'] = $allSubjects;
		$this->page = "subject/listSubject";
		$this->title = "Subject List";
		$this->layout();
	}

	function create()
	{
		if($this->input->method() == 'post')
		{
			//Setting validation rules
			$this->form_validation->set_rules($this->Subject_Model->rules());
			if($this->form_validation->run() != FALSE)
			{
				$res = $this->Subject_Model->createSubject($this->input->post());
				if($res)
				{
					$this->session->set_flashdata('success', 'Subject Successfully Created');
					redirect('subject/create');
				}
				else
				{
					$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
					redirect('subject/create');
				}
			}
			
		}
		$this->page = "subject/createSubject";
		$this->title = "Create Subject";
		$this->layout();
	}

	function update( $id = NULL)
	{
		# code...
		$subject = $this->Subject_Model->getSubjects($id);
		$this->data['subject'] = $subject;
		$this->page = "subject/updateSubject";
		$this->title = "Subject Update";
		if($this->input->method() == 'post')
		{
			$this->form_validation->set_rules($this->Subject_Model->rules());
			if($this->form_validation->run())
			{
				$res = $this->Subject_Model->updateSubject($this->input->post());
				if($res)
				{
					$this->session->set_flashdata('success', 'Subject Successfully Updated');
					redirect('subject');
				}
				else
				{
					$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
					redirect('subject');
				}
			}
		}
		$this->layout();
	}
}
?>