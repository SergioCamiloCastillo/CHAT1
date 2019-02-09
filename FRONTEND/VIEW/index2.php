<html>
  <head>
    <script type=text/javascript>
      function load(time){
        setTimeout("location.reload(true);",time);
      }
    </script>
  </head>
<body onload="Javascript:load(10000)">
  <?php
   $nom='';
   $men='';
    $nom=$_POST['nombre'];
     $men=$_POST['mensaje'];
      
      $base=new PDO('mysql:host=localhost; dbname=chat','root','');
      $base->exec('SET CHARACTER SET UTF8');
      $sql ='insert into ejerci (Nombre, Mensaje) values(:nombre, :mensaje)';
      $resultado=$base->prepare($sql);
      $resultado->execute(array(':nombre'=> $nom, ':mensaje'=> $men));
      $stmt=$base->query('SELECT Nombre, Mensaje FROM ejerci');
      foreach($stmt as $row){
        echo "<br>". $row[0];
        echo "<br>". $row[1];
      }
      ?>

      <br>
      Nombre: <input type='text' id='txtnombre' required=''>
      Mensaje: <input type='text' id='txtmensaje' required=''>
      <button type='button' id='button'>Enviar</button>
      <script src='../CONTROL/funcion.js'></script>
      <div id='demo'></div> 
</body>

</html>


      
      