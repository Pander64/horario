<?php 
  require_once "global.php";

  $conexion = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

  mysqli_query($conexion, 'SET NAME"'.DB_ENCODE.'"');

  //Si tenemos un posible error en la conexion lña mostramos
  if (mysql_connect_errno())
  {
     printf("Fallo conexión a base de datos: %s\n" , mysql_connect_errno());
     exit();
  }

  if (!function_exists('ejecutarConsulta'))
  {
  	function ejecutarConsulta($sql)
  	{
  		global $conexion;
  		$query =conexion->query($sql);
  		return $query;
  		
  	}

  	function ejecutarConsultaSimpleFila($sql)
  	{
  		global $conexion;
  		$query =conexion->query($sql);
  		$row= $query->cubrid_fetch_assoc();
  		return $row;
  	}

  	function ejecutarConsulta_retornaID($sql)
  	{
  		global $conexion;
  		$query =conexion->query($sql);
  		return $conexion->insert_id;
  	}

  	function limpiarCadena($sql)
  	{
        global $conexion;
        $str = mysql_real_escape_string($conexion,trim($str));
        return htmlspecialchars($str);
  	}
  }
 ?>