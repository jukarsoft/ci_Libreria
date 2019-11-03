<?php 
	class Procesos extends CI_Controller {

		public function altaLibro() {
			//recuperar los datos del formulario
			$titulo = $this->input->post('titulo'); 
			$precio = $this->input->post('precio'); 

			//validar si datos informados
			if (empty($titulo) || empty($precio)) {

				$respuesta = "todos los datos son obligatorios";
			} else {
				$alta = array ('titulo'=>$titulo, 'precio'=>$precio);
				$respuesta = $this->Libreria->altaLibro($alta);
			}

			//llamar al modelo para el alta del libro
			

			$datos = $this->cargarSecciones();
			//cargar la vista con la respuesta
			$datos['respuesta'] = $respuesta;
			
			$this->load->view('alta', $datos);
		}

		public function bajaLibro() {
			//recuperar los datos del formulario  ///atributo name de la select///
			$idlibros = $this->input->post('libro'); 
			//$baja = array ('idlibros'=>$idlibros);
			//validar si datos informados
			if (empty($idlibros)) {
				$respuesta = "Seleccionar un libro de la lista";
			} else {
				//llamar al modelo para la baja
				$respuesta = $this->Libreria->bajaLibro($idlibros);
			}

			//recuperar las secciones 
			$datos = $this->cargarSecciones();

			//consulta al modelo para recuperar el array de libros
			$libros = $this->Libreria->consultaLibros();
			
			//cargamos la vista
			$datos['libros']=$libros;
			$datos['respuesta'] = $respuesta;
			$this->load->view('baja', $datos);

		}

		public function cargaLibro() {
			//recuperar los datos del formulario  ///atributo name de la select///
			$idlibros = $this->input->post('libro'); 
			if (empty($idlibros)) {
				$respuesta = "Seleccionar un libro de la lista";
			} else {
				//llamar al modelo para recuperar el libro
				$libro = $this->Libreria->consultaLibro($idlibros);
			}

			//recuperar las secciones comunes
			$datos = $this->cargarSecciones();

			//consulta al modelo para recuperar el array de libros
			$libros = $this->Libreria->consultaLibros();
			
			//cargamos la vista
			$datos['libros'] = $libros;
			$datos['idlibros'] = $libro[0]['idlibros'];
			$datos['titulo'] = $libro[0]['titulo'];
			$datos['precio'] = $libro[0]['precio'];
			$datos['respuesta']="";
			$this->load->view('modificacion', $datos);




		}
		public function modificacionLibro() {
			//recuperar los datos del formulario  ///atributo name de la select///
			$idlibros = $this->input->post('idlibro'); 
			$titulo = $this->input->post('titulo'); 
			$precio = $this->input->post('precio'); 

			//validar si datos informados
			if (empty($titulo) || empty($precio) || empty($idlibros)) {
				$respuesta = "todos los datos son obligatorios";
			} else {
				//llamar al modelo para la modificación
				$libro = $this->Libreria->modificaLibro($idlibros, $titulo, $precio);
				$datos['libro']=$libro;
			}

			//recuperar las secciones 
			$datos = $this->cargarSecciones();

			//consulta al modelo para recuperar el array de libros
			$libros = $this->Libreria->consultaLibros();
			$datos['libros']=$libros;
			$respuesta="modificacion efectuada";
			//cargamos la vista
			$datos['idlibros'] = $idlibros;
			$datos['titulo'] = $titulo;
			$datos['precio'] = $precio;
			$datos['respuesta'] = $respuesta;
			$this->load->view('modificacion', $datos);

		}


		private function cargarSecciones() {
			return array('header'=>$this->load->view('header', '', true), 
						 'footer'=>$this->load->view('footer', '', true));	

		}	

	}





 ?>