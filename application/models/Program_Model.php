<?php 
class Program_Model extends CI_Model
{
    public $tableName='program';
    
    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required'],
        ];
    }

    function __construct(){
        $this->load->database();
    } 
    function __destruct() 
    {        
    }  


    function createProgram($formData)
    {
        return $this->db->insert($this->tableName, $formData) ? true : false;
    }

    function updateProgram($formData)
    {
        # code...
        $this->db->where('id',$formData['id']);
        return $this->db->update($this->tableName, $formData) ? true : false;
    }

    function getProgram($id = 0)
    {
        $this->db->where('is_deleted',0);
        if($id != 0) {
            $this->db->where('id',$id);
        }
        $query=$this->db->get($this->tableName);
        return $id != 0 ? $query->row() : $query->result();
    }
}

?>