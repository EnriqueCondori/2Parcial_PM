<?php

include "conexion.php";
$codFlujo=$_GET["codflujo"];
$codProceso=$_GET["codproceso"];
$codProcesoSiguiente=$_GET["codprocesosiguiente"];	
$tipo=$_GET["tipo"];
$archivo=$_GET["archivo"];
include "controlador".$archivo;
if($tipo=='C'){
	echo "controlador".$codProceso;
	$sql="select * from proceso where codFlujo='$codFlujo' and codProceso='$codProceso'";

	if (isset($_GET["Anterior"])) {
		$sql="select * from proceso where codFlujo='$codFlujo' and codProcesoSiguiente='$codProceso'";
	}
	echo($sql);
	$result=mysqli_query($conn,$sql);
	$fila=mysqli_fetch_array($result);
	$codprocesoEnvia=$fila['codProceso'];
	$archivoEnvia="motor.php?codflujo=".$codFlujo."&codproceso=".$codprocesoEnvia;
	// echo("Aca");

	header("Location: ".$archivoEnvia);
}
else{
	if (isset($_GET["Anterior"])) {
		$sql="select * from proceso where codFlujo='$codFlujo' and codProcesoSiguiente='$codProceso'";
	}
	if(isset($_GET["Siguiente"]))
	{
		$sql="select * from proceso where codFlujo='$codFlujo' and codProceso='$codProcesoSiguiente'";
	}
	if (isset($_GET["Anterior"])and $codProceso=='P3'){
		$sql="select * from procesocon where codFlujo='$codFlujo' && (codProcesoSi='$codProceso'|| codProcesoNo='$codProceso')";}
	

}
//include "conexion.inc.php";
$result=mysqli_query($conn,$sql);
$fila=mysqli_fetch_array($result);

//controla el error del anterior
if (!empty($fila['codProceso'])) {
	$codprocesoEnvia=$fila['codProceso'];
	$archivoEnvia="motor.php?codflujo=".$codFlujo."&codproceso=".$codprocesoEnvia;
	echo $archivoEnvia;
	header("Location: ".$archivoEnvia);
}


?>