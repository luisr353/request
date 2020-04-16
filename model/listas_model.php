<?php
require_once("../db/db.php");

class listas_model extends Conexion
{
 
	 public function get_areas(){
		  parent::conectar();
		 
        $consulta=parent::query("SELECT idareas, areas FROM areas WHERE estado='1' ORDER BY areas ASC");
		 while($filas=$consulta->fetch_assoc()){
            $this->areas[]=$filas;
        }
		 return $this->areas;
	 }
	
	public function get_categorias(){
		parent::conectar();
		
        $consulta=parent::query("SELECT idcategoria, categoriasolicitud FROM categorias WHERE estado='1' ORDER BY idcategoria ASC");
		 while($filas=$consulta->fetch_assoc()){
            $this->categorias[]=$filas;
        }
		 return $this->categorias;
	 }
	
	public function get_ciudades(){
		parent::conectar();
		 
        $consulta=parent::query("SELECT idciudades, ciudadempresa FROM ciudades WHERE estado='1' ORDER BY idciudades ASC");
		 while($filas=$consulta->fetch_assoc()){
            $this->ciudades[]=$filas;
        }
		 return $this->ciudades;
	 }
	
	public function get_clientes(){
		parent::conectar();
		 
        $consulta=parent::query("SELECT idcliente, cliente FROM clientes WHERE estado='1' ORDER BY idcliente ASC");
		 while($filas=$consulta->fetch_assoc()){
            $this->clientes[]=$filas;
        }
		 return $this->clientes;
	 }
	
	public function get_medios(){
		parent::conectar();
		 
        $consulta=parent::query("SELECT idmedios, medios FROM mediosentrega WHERE estado='1' ORDER BY idmedios ASC");
		 while($filas=$consulta->fetch_assoc()){
            $this->medios[]=$filas;
        }
		 return $this->medios;
	 }
	
	public function get_tiposolicitudes(){
		parent::conectar();
		 
        $consulta=parent::query("SELECT idsolicitud, tipo FROM tiposolicitud WHERE estado='1' ORDER BY idsolicitud ASC");
		 while($filas=$consulta->fetch_assoc()){
            $this->tiposolicitudes[]=$filas;
        }
		 return $this->tiposolicitudes;
	 }
	
	
	public function get_vias(){
		parent::conectar();
		 
        $consulta=parent::query("SELECT idvias, viascontacto FROM vias WHERE estado='1' ORDER BY idvias ASC");
		 while($filas=$consulta->fetch_assoc()){
            $this->vias[]=$filas;
        }
		 return $this->vias;
	 }
	

   public function eliminarArea($id){
	   parent::conectar();
	   
   		$consulta=parent::query("UPDATE areas SET estado='2' WHERE idareas=$id");
          return $this->consulta;        
  
       //ELIMINAR O ACTUALIZAR UNA REGISTRO
   }

   public function eliminarCategoria($id){
	   parent::conectar();
		 
   		$consulta=parent::query("UPDATE categorias SET estado='2' WHERE idcategoria=$id");
          return $this->consulta;        
  
       //ELIMINAR
   }
	
	   public function eliminarCiudad($id){
		   parent::conectar();
		 
   		$consulta=parent::query("UPDATE ciudades SET estado='2' WHERE idciudades=$id");
          return $this->consulta;        
  
       //ELIMINAR
   }
	   public function eliminarCliente($id){
   		parent::conectar();
		   
   		$consulta=parent::query("UPDATE clientes SET estado='2' WHERE idcliente=$id");
          return $this->consulta;        
  
       //ELIMINAR
   }
	
	   public function eliminarMedio($id){
   		parent::conectar();
		   
   		$consulta=parent::query("UPDATE mediosentrega SET estado='2' WHERE idmedios=$id");
          return $this->consulta;        
  
       //ELIMINAR
   }

	   public function eliminarTipoSolicitud($id){
   		parent::conectar();
		   
   		$consulta=parent::query("UPDATE tiposolicitud SET estado='2' WHERE idsolicitud=$id");
          return $this->consulta;        
       //ELIMINAR
   }
	
	
	   public function eliminarVias($id){
   		parent::conectar();
		   
   		$consulta=parent::query("UPDATE vias SET estado='2' WHERE idvias=$id");
          return $this->consulta;        
  
       //ELIMINAR
   }
	
	}
?>
