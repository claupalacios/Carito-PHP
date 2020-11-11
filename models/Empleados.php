<?php
// MODELS/Empleados.php
class Empleados extends Model {
	
	/**
    * Función que retorna los empleados
    *
    * @return array retorna los empleados
    */
	public function getTodos(){
		$this->db->query("select * from empleados");
		return $this->db->fetchAll();
	}
	/**
    * Función que da de alta un nuevo empleado en la base
    *
    * @param string $nombre string representa el nombre del empleado
    * @param string $apellido string representa el apellido del empleado
    * @param string $dni string representa el dni del empleado
    * @param int $anio entero representa el año de nacimiento del empleado
    * @param int $mes entero representa el mes de nacimiento del empleado
    * @param int $dia entero representa el dia de nacimiento del empleado
    * @param string $direccion string representa la direccion del empleado
    * @param string $telefono string representa el telefono del empleado
    * @param string $mail string representa el mail del empleado
    */
	public function alta($nombre, $apellido, $dni, $anio, $mes, $dia, $direccion, $telefono, $mail){

		
		if(strlen($nombre)<2) die("Nombre no puede estar vacio");
		$nombre=substr($nombre, 0, 20);
		$nombre=$this->db->escapeString($nombre);
		
		if(strlen($apellido)<2) die("Apellido no puede estar vacio");
		$apellido=substr($apellido, 0, 20);
		$apellido=$this->db->escapeString($apellido);
		
		if(strlen($dni)<8 || strlen($dni)>8) die("Dni debe contener 8 digitos"); 
		$dni=substr($dni, 0, 8);
		$dni=$this->db->escapeString($dni);
		
		if(!ctype_digit($anio)) die("Año no es un digito");
		if($anio>date("Y")) die("Año no puede ser mayor al año actual");

		$y= $anio;
			
		$today= date("Y-m-d");

			
		if(!ctype_digit($mes)) die("mes no es un digito");
		if($mes>12) die("mes no puede ser mayor a 12");
		if(date($y."-".$mes."-".$dia)>$today) die("fecha no puede ser mayor a la fecha de hoy");

		$mes=$mes;

		
		if(!ctype_digit($dia)) die("dia no es un digito");
		if($dia>32) die("dia no puede ser mayor a 32");
		if(date($y."-".$mes."-".$dia)>$today) die("fecha no puede ser mayor a la fecha de hoy");

		$dia=$dia;

		$hoy=date("'".$y."-".$mes."-".$dia."'");

			
		if(strlen($direccion)<2) die("direccion no puede estar vacio");
		$direccion=substr($direccion, 0, 30);
		$direccion=$this->db->escapeString($direccion);
		
		if(strlen($telefono)<2) die("Telefono no puede estar vacio");
		$telefono=substr($telefono, 0, 20);
		$telefono=$this->db->escapeString($telefono);

		if(strlen($mail)<2) die("Mail no puede estar vacio"); 
		$mail=substr($mail, 0, 50);
		$mail=$this->db->escapeString($mail);
		
			
		$this->db->query("INSERT into empleados
						(nombre, apellido, dni, fecha_nacimiento, direccion, telefono, mail)
						values 
						('$nombre', '$apellido', '$dni', $hoy, '$direccion', 
						'$telefono', '$mail')");

	}

	/**
    * Función que modifica los datos de un empleado en la base
    *
    * @param string $nombre string representa el nombre del empleado
    * @param string $apellido string representa el apellido del empleado
    * @param string $dni string representa el dni del empleado
    * @param int $fecha entero representa el año de nacimiento del empleado
    * @param string $direccion string representa la direccion del empleado
    * @param string $telefono string representa el telefono del empleado
    * @param string $mail string representa el mail del empleado
    */
	
	public function modificar($id, $nombre, $apellido, $dni, $fecha, $direccion, $telefono, $mail){
		
		if(!ctype_digit($id)) die("id no es un digito");

		if(strlen($nombre)<2) die("nombre no puede estar vacio");
		$nombre=substr($nombre, 0, 20);
		$nombre=$this->db->escapeString($nombre);

		if(strlen($apellido)<2) die("apellido no puede estar vacio");
		$apellido=substr($apellido, 0, 20);
		$apellido=$this->db->escapeString($apellido);
		
		if(strlen($dni)<8||strlen($dni)>8) die("dni debe ser de 8 digitos");
		$dni=substr($dni, 0, 8);
		$dni=$this->db->escapeString($dni);
		

		
		if(strlen($direccion)<2) die("direccion no puede estar vacio");
		$direccion=substr($direccion, 0, 30);
		$direccion=$this->db->escapeString($direccion);
		
		if(strlen($telefono)<2) die("telefono no puede estar vacio");
		$telefono=substr($telefono, 0, 20);
		$telefono=$this->db->escapeString($telefono);

		if(strlen($mail)<2) die("mail no puede estar vacio");
		$mail=substr($mail, 0, 50);
		$mail=$this->db->escapeString($mail);

	
		
		$this->db->query("UPDATE empleados
						SET nombre='$nombre', apellido='$apellido',dni='$dni', fecha_nacimiento='$fecha', direccion='$direccion', telefono='$telefono', mail='$mail'
						WHERE id_empleado=$id");
}
	/**
    * Función que elimina un empleado de la base
    *
    * @param int $id entero representa el id del empleado a eliminar
   	*/	
	public function borrar($id){
		if(!ctype_digit($id)) die("error1");

		$this->db->query("DELETE
		FROM empleados
		WHERE id_empleado=$id
		LIMIT 1
		");

}
	/**
    * Función que retorna un empleado especifico
    *
    * @param int $id entero representa el id del empleado a buscar
    * @return array retorna un empleado especifico
   	*/
	public function busquedaEspecifica($id){
		if(!ctype_digit($id)) die("error1");

		$this->db->query("SELECT *
		FROM empleados
		WHERE id_empleado=$id
		");

		if($this->db->numRows()!=1) die("error numrows");
		return $this->db->fetch();
		}

}