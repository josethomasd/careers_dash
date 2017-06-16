<?php  
   class select extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('careers');  
         return $query;  
      }
      public function get_count()
      {
         $query = $this->db->query('SELECT * FROM careers');

         return $query->num_rows();
      }
   }  
?>  