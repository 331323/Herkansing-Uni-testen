<?php
  namespace TDD;

  include("./kostenBenefietConcert.php");

  $BenefietAvond = new kostenBenefietConcert();

  $BenefietAvond = [1200];


  echo dirname(dirname(__FILE__));
  echo "<br>";
  echo DIRECTORY_SEPARATOR;
  echo "<br>";
  echo dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
?>


<h1>Herkansing</h1>

<h3>Het totaalbezoekers van is: <?php echo $kostenBenefietConcert->aantal($BenefietAvond, "Hoi"); ?> euro</h3>

<h3>Het productbezoekers van is: <?php echo $kostenBenefietConcert->prijs($BenefietAvond); ?> euro</h3>

<hr>

