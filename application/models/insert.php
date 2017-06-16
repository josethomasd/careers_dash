<?php  
   class insert extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function insert($data)  
      {  
         //data is retrive from this query  
         $query = $this->db->insert('careers',$data);  
         return $query;  
      }  
   }  
?>