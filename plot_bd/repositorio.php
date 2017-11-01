<?php
  try{
      // Conecta com o MySQL
      $con = mysqli_connect("fdb4.awardspace.net", "1268420_zf2studentapp", "violeta1", "1268420_zf2studentapp");
      // Query
      $con->real_query("SELECT count(*) as votos, problema FROM 1268420_zf2studentapp.enquete group by problema");
      $query = $con->store_result();
      // Array
      $data = array('votos' => [] , 'problema' => []);
      // Associando dados
      while ($row = $query->fetch_assoc()) {
        array_push($data['votos'], $row['votos']);
        array_push($data['problema'], utf8_encode($row['problema']));
      }
      // Encerra a conexao
      $con->close();
      //json_encode
      echo json_encode($data);
   } catch (\Exception $e){
      var_dump($e);
      die();
   }

?>