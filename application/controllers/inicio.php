<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Inicio extends  CI_Controller {
		public function index() {
			//echo 'HOLA MUNDO desde CodeIgniter';
				//parametro 1 la vista 2- datos a pasar y tercero si la quiero guardar

			//cargar las secciones comunes para enviar a la vista
			//$datos['header']= $this->load->view('header', '', true);
			//$datos['footer']= $this->load->view('footer', '', true);
			$datos = $this->cargarSecciones();
			//mostrar la vista con los contenidos externos
			$this->load->view('menu', $datos);
		}

		public function error404 () {
			$this->load->view('error404');
		}

		public function consulta () {
			//cargar la secciones comunes
					//$datos['header']= $this->load->view('header', '', true);
					//$datos['footer']= $this->load->view('footer', '', true);
			$datos = $this->cargarSecciones();
			
			//consulta al modelo para recuperar el array de libros
			$libros = $this->Libreria->consultaLibros();
			
			$datos['libros'] = $libros;
			//cargar las secciones comunes para enviar a la vista
			$this->load->view('consulta', $datos);
		}

		public function alta () {
			
			//cargar la secciones comunes
			$datos = $this->cargarSecciones();
			$datos['respuesta']="";
			//se encarga de cargar la vista de alta
			$this->load->view('alta', $datos);
		}

		public function baja () {
			//cargar la secciones comunes
			$datos = $this->cargarSecciones();

			//consulta al modelo para recuperar el array de libros
			$libros = $this->Libreria->consultaLibros();
			
			$datos['libros'] = $libros;
			$datos['respuesta']="";
			//se encarga de cargar la vista de baja
			$this->load->view('baja', $datos);
		}

		public function modificacion () {
			//cargar la secciones comunes
			$datos = $this->cargarSecciones();

			//consulta al modelo para recuperar el array de libros
			$libros = $this->Libreria->consultaLibros();
			$datos['libros'] = $libros;
			$datos['idlibros'] = "";
			$datos['titulo'] = "";
			$datos['precio'] = "";
			$datos['respuesta']="";
			//se encarga de cargar la vista de modificación
			$this->load->view('modificacion', $datos);
		}

		private function cargarSecciones() {
			return array('header'=>$this->load->view('header', '', true), 
						 'footer'=>$this->load->view('footer', '', true));	

		}	


	}



?>