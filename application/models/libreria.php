<?php 

	class Libreria extends CI_Model {

		public function consultaLibros() {
			$this->db->select('*');
			$this->db->order_by('titulo');
			$query = $this->db->get('libros');
			//retornar un array php con el libro seleccionado
			return $query->result_array();


		}

		public function consultaLibro($id) {
			$sql="SELECT * FROM libros WHERE idlibros = $id";
			$query=$this->db->query($sql);
			
			//respuesta del modelo

			//control del error
			$error = $this->db->error();
			if ($error['code']!=0) {	
				return $error['code'].' '.$error['message'];
			}

			//$codigo['code']="00";
			//$codigo['message']="consulta realizada ";
			//$datos['libro']=$query;
			//$datos['codigo']=$codigo['code'];
			//$datos['mensaje']=$codigo['message'];
			//$codigo['code'].' '.$codigo['message'];
			//funciona con objetos no codeIgniter
			//return $datos;
			return $query->result_array();
			//funciona con objetos codeIgniter
			//return $datos->row_array();
		}

		public function altaLibro($alta) {
			//insertar los datos
			$this->db->insert('libros', $alta);
			
			//control del error
			$error = $this->db->error();
			if ($error['code']!=0) {	
				if ($error['code']==1062) { 
					return 'libro ya existe'; 
				} else { 
					return $error['code'].' '.$error['message'];
				}
			} 

			//recuperar el id del libro insertado
			$id = $this->db->insert_id();

			//respuesta del modelo
			$codigo['code']="00";
			$codigo['message']="alta efectuada con id: $id ";
			//$codigo['code'].' '.$codigo['message'];
			return $codigo['message'];
					

		}


		public function bajaLibro($id) {

			if (!$id) {
				$codigo['code']="1064";
				$codigo['message']="id libro no recibido o error en sintasis del sql. Id: $id";
				return $codigo['code'].' '.$codigo['message'];
				
			}
			//$this->db->delete('libros', array('idlibros' => $id));
			$sql="DELETE FROM libros WHERE idlibros = $id";
			$this->db->query($sql);
			
			//respuesta del modelo

			//control del error
			$error = $this->db->error();
			if ($error['code']!=0) {	
				return $error['code'].' '.$error['message'];
			}

			$codigo['code']="00";
			$codigo['message']="baja efectuada ";
			//$codigo['code'].' '.$codigo['message'];
			return $codigo['code'].' '.$codigo['message'];

		}

		public function modificaLibro($id, $titulo, $precio) {
			$sql="UPDATE libros SET titulo='$titulo', precio='$precio' WHERE idlibros=$id";
			$this->db->query($sql);

			//respuesta del modelo
			//control del error
			$error = $this->db->error();
			if ($error['code']!=0) {	
				return $error['code'].' '.$error['message'];
			}

			$codigo['code']="00";
			$codigo['message']="Modificación efectuada ";
			//$codigo['code'].' '.$codigo['message'];
			return $codigo['code'].' '.$codigo['message'];


		}





	}  // fin clase




 ?>