<?php 
if ($codProceso=='P2') {
  ?>
  <form action="" method="POST">
  <table>
      <tr><th>Celular :</th>
        <td><input type="text" name="celular" ></td>
      </tr>
 
      <tr> <td colspan="2"> 
        <input type="submit" name="Verifica" ></td></tr>
      </table>
      </form>

<?php 
  }
  if ($codProceso=='P4'):
  ?>
  <form  action="" method="POST">
  <h2>Registro de Datos</h2>
  <table align="center">
    <tr>
    <td >
      <input type="text" name="ci" placeholder="Num: CI" value="">
    </td>
    <td><input type="text" name="nombre" placeholder="Nombres" value=""></td>
    </tr>
    <tr>
      <td><input type="text" name="apeP" placeholder="Apellido Paterno" value=""></td>
      <td><input type="text" name="apeM" placeholder="Apellido Materno" value=""></td>
    </tr>
    <tr>
      <td><input type="text" name="fechanaci" placeholder="Año-Mes-Dia" value=""></td>
    </tr>
    <tr> 
    <td colspan="2"> 
    <input type="submit" name="envia" ></td>
    </tr>
  </table>
  </form>

  <?php endif ?>