<?php 
class Testmodel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
         $this->load->database();
    }
    
    function get_actors()
    {
        $query = $this->db->get('actor', 10);
        return $query->result();
    }

    function get_actores_id($id){

      $query = $this->db->get_where('actor', array('actor_id' => $id));
      return $query->result(); // usar result para que devuelva un arreglo de objetos

    }


}

?>