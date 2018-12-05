<html>
<head>
 <title>Rezervacija</title>
</head>
<a href="/">
 << Natrag
</a>
<?php

 require("ukljuci/konekcija.php");
 $oznaka = $_GET["ozn"];
 if(strlen($oznaka) < 2)
 {
  echo("");
  die();
 }
 $sql = "SELECT * FROM rezervacija WHERE oznDvorana = '" . $oznaka . "'";

 $rezult = $kon->query($sql);

 echo("<h2>Dvorana " . $oznaka . "</h2>");

 if($rezult->num_rows > 0)
 {
  while($red = $rezult->fetch_assoc())
  {
   echo($red["dan"] . ", " . $red["sati"] . ", " . $red["predmet"]);
  }
 }
 else
 {
  echo("Gre&#353;ka: nema rezervacija.");
 }

?>
</html>
