<?php
echo "<P>Reto Numero 6<P>";
$ropa = array("camisa", "patalon", "Cinturon");


sort($ropa);
foreach($ropa as $elemento){
      echo $elemento . "<BR>";
}

 array_push($ropa, "Gorra");
 array_push($ropa, "Calcetines");
 echo"<p>ropa en forma descendente<p>";

 rsort($ropa);
 foreach($ropa as $elemento){    
      echo $elemento . "<BR>";
  }
  ?>    