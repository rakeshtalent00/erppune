<?php
class Subject_Model extends CI_Model{
    private $conn='';
    
    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'code',
            'label' => 'Code',
            'rules' => 'required|alpha'],

            ['field' => 'passing_marks',
            'label' => 'Passing Marks',
            'rules' => 'required|numeric|greater_than[0]|callback_passing_marks_check['.$this->input->post('total_marks').']'],

            ['field' => 'total_marks',
            'label' => 'Total Marks',
            'rules' => 'required|numeric|greater_than[0]'],

            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required'],
        ];
    }

    function __construct(){
        $this->load->database();
    } 
    function __destruct() 
    {        
    }  


    function createSubject($formData)
    {
        return $this->db->insert('subjects', $formData) ? true : false;
    }

    function updateSubject($formData)
    {
        # code...
        $this->db->where('id',$formData['id']);
        return $this->db->update('subjects', $formData) ? true : false;
    }

    function getSubjects($id = 0)
    {
        $this->db->where('is_deleted',0);
        if($id != 0) {
            $this->db->where('id',$id);
        }
        $query=$this->db->get('subjects');
        return $id != 0 ? $query->row() : $query->result();
    }


}
?>                                                                                                                                              