 <h4>exo1</h4>
 <?php
 $i=4;
 while($i<=12){
     echo '' .$i. '<br>';
     $i++;
 }
 ?>
 <h4>exo2</h4>
 <?php
  function decrement($n) 
  {
    if($n > 0)
    {
      print("$n\n");
      decrement($n - 1);
    }
  }
  decrement(10);
?>
<h4>exo3</h4>
<?php
  if(!empty($_SERVER['HTTPS']))
  {
      echo 'HTTPS est utilisé';
  }
  else
  {
      echo 'HTTPS est utilisé';
  }
?>

<h4>exo4</h4>
 <?php
function concatener($argument1, $argument2) {
  return"$argument1" . "$argument2";
}

echo $resultat=concatener('Antoine', 'griezmane');
?>

 <h4>exo5</h4>
 <?php
function somme($argument1, $argument2) {
    return"$argument1" + "$argument2";
  }
  
  echo $resultat=somme(5,5);
 ?>

  <h4>exo6</h4>
 <?php
$array= array(1, 2, 2, 3, 3, 3, 4, 5, 5);
echo $array= array_unique ($array);
var_dump($array);
 ?>

<h4>exo7</h4>
<?php
  function fact($n){ 
    $f = 2; 
    for ($i = 3; $i <= $n; $i++){ 
      $f = $f * $i; 
    } 
    return $f; 
  } 
    
  $n = 3; 
  $f = fact($n); 
  echo "La factorielle de $n est $f"; 
?>

<h4>exo8</h4>
<?php
  function fact($n){
    if($n <= 1){
      return 1;   
    }
    else{
      return $n * fact($n - 1);
    }
  }
    
  $n = 3; 
  $f = fact($n); 
  echo "La factorielle de $n est $f"; 
?>
<h4>exo9</h4>
<?php
  for($ligne = 1; $ligne <= 10; $ligne++)  
  {  
     for ($etoile = 1; $etoile <= $ligne; $etoile++)  
    {  
       echo "*";   
    }  
     echo "\n";  
  } 
?>
 