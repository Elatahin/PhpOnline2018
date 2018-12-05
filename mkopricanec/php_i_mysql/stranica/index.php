<html>
<head>
 <title>Po&#269;etna stranica</title>
</head>
<?php

 require("ukljuci/konekcija.php");
 $sql = "SELECT * FROM dvorana ASC";

 $rezult = $kon->query($sql);

 if($rezult->num_rows > 0)
 {
  while($red = $rezult->fetch_assoc())
  {
   echo("<a href=\"/rezervacija.php?ozn=" . $red["oznDvorana"] . "\">" . $red["oznDvorana"] . "</a>");
  }
 }

?>
</html>
