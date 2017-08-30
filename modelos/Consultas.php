<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Consultas
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
//espera dos parametros, fecha_inicio y fecha_fin
	public function comprasfecha($fecha_inicio,$fecha_fin)
	{
	/*lo que hago con date(i.fecha_hora) es solo obtener la fecha dia mes y año*/
	/*		$sql="SELECT DATE(i.fecha_hora) as fecha,u.nombre as usuario, p.nombre as proveedor,i.tipo_comprobante,i.serie_comprobante,i.num_comprobante,i.total_compra,i.impuesto,i.estado FROM ingreso i INNER JOIN persona p ON i.idproveedor=p.idpersona INNER JOIN usuario u ON i.idusuario=u.idusuario WHERE DATE(i.fecha_hora)>='$fecha_inicio' AND DATE(i.fecha_hora)<='$fecha_fin'";
		return ejecutarConsulta($sql);	*/
		$sql="SELECT DATE(date) as fecha, time as tiempo, sensor_id as sensor, data as total  FROM estacion_64 WHERE DATE(date)>='$fecha_inicio' AND DATE(date)<='$fecha_fin' ORDER BY time DESC";
		return ejecutarConsulta($sql);		
	}

	public function ventasfechacliente($fecha_inicio,$fecha_fin,$idcliente)
	{
		$sql="SELECT DATE(v.fecha_hora) as fecha,u.nombre as usuario, p.nombre as cliente,v.tipo_comprobante,v.serie_comprobante,v.num_comprobante,v.total_venta,v.impuesto,v.estado FROM venta v INNER JOIN persona p ON v.idcliente=p.idpersona INNER JOIN usuario u ON v.idusuario=u.idusuario WHERE DATE(v.fecha_hora)>='$fecha_inicio' AND DATE(v.fecha_hora)<='$fecha_fin' AND v.idcliente='$idcliente'";
		return ejecutarConsulta($sql);		
	}

	public function totalcomprahoy()
	{
		/*primero le damos a la funcion SUM y seleccionamos todo el campo de total_compra de la fecha actual*/
		//la funcion IFNULL hace que no me arroje null cuando no hayan datos en con la fecha actual "curdate" actual
		/*		$sql="SELECT IFNULL(SUM(total_compra),0) as total_compra FROM ingreso WHERE DATE(fecha_hora)=curdate()";
		return ejecutarConsulta($sql);*/
		$sql="SELECT IFNULL(SUM(data),0) as total_compra FROM estacion_64 WHERE DATE(date)=curdate()";
		return ejecutarConsulta($sql);
	}

	public function totalventahoy()
	{
		$sql="SELECT IFNULL(SUM(data),0) as total_venta FROM estacion_64 WHERE DATE(date)=curdate()";
		return ejecutarConsulta($sql);
	}

	public function comprasultimos_10dias()
	{

		/*con la funcion "CONCAT" concateno primero el dia, para eso utilizo funciona "DAY", se concatena un "-" luego concateno el mes*/
		/*a todo ese campo que se genera al utilizar la funcion CONCAT lo renombro con el alias fecha, despues utilizando la funcion SUM voy a sumar el total de compra y lo renombro con el alias total. se agrupa por fecha_hora se ordena por el campo
		fecha_hora y utilizando la funcion LIMIT obtengo los 10 primeros registros*/
		/*	$sql="SELECT CONCAT(DAY(fecha_hora),'-',MONTH(fecha_hora)) as fecha,SUM(total_compra) as total FROM ingreso GROUP by fecha_hora ORDER BY fecha_hora DESC limit 0,10";
		return ejecutarConsulta($sql);*/

		$sql="SELECT CONCAT(DAY(date),'-',MONTH(date)) as fecha, SUM(data) as total FROM estacion_64 WHERE sensor_id='sueloH' GROUP by date ORDER BY date DESC limit 0,10";
		return ejecutarConsulta($sql);//llamo a la funcion ejecutarConsulta de mi archivo conexion.php y se envio como parametro la variable $sql
	}

	public function ventasultimos_12meses()
	{
		/*con la funcion DATE_FORMAT convertimos la fecha y hora a un formato de mes %M luego obtenemos con la funcion SUM la suma del campo total_venta y los ultimos 12 registros ordenados de manera descendente */
		/*$sql="SELECT DATE_FORMAT(fecha_hora,'%M') as fecha,SUM(total_venta) as total FROM venta GROUP by MONTH(fecha_hora) ORDER BY fecha_hora DESC limit 0,12";
		return ejecutarConsulta($sql);*/
		$sql="SELECT DATE_FORMAT(date,'%M') as fecha, SUM(date) as total FROM estacion_64 WHERE sensor_id='sueloH' GROUP by MONTH(date) ORDER BY date DESC limit 0,12";
		return ejecutarConsulta($sql);
	}
}

?>