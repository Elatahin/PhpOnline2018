<?php
include_once './dbconn_proc.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Popis studenata mysqli proceduralnim pristupom</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>
      <?php
      $query ="SELECT * FROM stud LIMIT 50";
      
      $result= mysqli_query($link, $query);
      echo "<pre>";
      var_dump($result);
      
      print_r($result);
      
      $row = mysqli_fetch_assoc($result);
       print_r($row);
      echo "</pre><hr>";
       echo "<br>Broj redova vraćenih querijem:".$result->num_rows;
       echo "<br>Broj redova vraćenih querijem:".mysqli_num_rows($result);
       
       function vrati_broj_redova($r){
           return $r->num_rows;
       }
       echo "<br>Broj redova vraćenih querijem:".vrati_broj_redova($result);
       echo "<hr>";
      
      while ($row = mysqli_fetch_assoc($result)) {
          echo $row['imeStud']." ".$row['prezStud']. " ".$row['mbrStud']."<br>";
      }
    ?>
    
    </div>
  </body>
</html>
<?php mysqli_close($link); ?>