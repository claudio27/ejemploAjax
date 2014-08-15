<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nuevo extends CI_Controller {

	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('Testmodel');
    }

	public function index()
	{
	$data['query'] = $this->Testmodel->get_actors();
	$this->load->view('inicio',$data);

	}

	 function hola()
	{
		$this->load->view('home');
	}
	// entrega el valor pedido en formato JSON
	 function recuperaActores(){

		     $data['query'] = $this->Testmodel->get_actors();
		     echo json_encode($data);
		     // carga la vista con el arreglo de objetos obtenidos con result
        	// $this->load->view('inicio', $data);
	}

	 function recuperaActoresId($id){

		     $data['query'] = $this->Testmodel->get_actores_id($id);
		     echo json_encode($data);
		     // carga la vista con el arreglo de objetos obtenidos con result
//        	 $this->load->view('inicio', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
