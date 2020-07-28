
<?php 
include 'conexionBd.php';
if (isset($_POST["Verifica"])):
	$cel=$_POST["celular"];
	$mensaje='';

	$sql="SELECT * FROM usuario WHERE numero like '$cel';";
	$result=mysqli_query($conn,$sql);
	
	echo '<table class="datos">';
	while($fila=mysqli_fetch_row($result))
			{
				$mensaje='Si';
				echo "<tr>";
				echo "<td>".$fila[0]."</td>";
				echo "<td>".$fila[1]."</td>";
				echo "</tr>";
			}
			if(empty($mensaje)){
				echo'<tr><td>NO FORMA PARTE DE LA EMPRESA</td></tr>';
				$mensaje='no';
			}
	echo '</table><br>';
endif ?>
<p>Campo que se llena una vez verificado</p>
<br>
<input type="text" name="cond" value='<?php if(!empty($mensaje))echo $mensaje; ?>'>
<br><br>


