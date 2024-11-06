<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
<select name="desplegable">
    <option value="1">opcion 1</option>
    <option value="2">opcion 2</option>

</select>
<br> <br>
<button type="submit">enviar</button>
</form>

<table border="1">
    <thead>
        <th>documentos</th>
        <th>nombres</th>
        <th>telefono</th>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>  
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>  
        </tr>
       
      <?php

      $inicio = 1;
      while($inicio < 10){
        $inicio++;

      ?>  
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>  
        </tr>
        
      <?php  
      }
      ?>

    </tbody>
</table>

</body>
</html>