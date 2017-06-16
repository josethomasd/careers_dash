<?php  
   class admin_delete extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function delete_row($id)  
      {  
         //data is retrive from this query  
         $this->db->where('id', $id);
         $query = $this->db->delete('careers');
         return $query;
      }  
   }  
?>