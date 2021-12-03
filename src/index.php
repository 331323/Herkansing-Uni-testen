<?php
  namespace TDD;

  include("./receipt.php");

  $receipt = new Receipt();

  // $rekening = array(56, 128, 89, 24, 133, 233, 212);

  $rekening = [56, 128, 89, 24, 133, 233, 212, 23];

  echo dirname(dirname(__FILE__));
  echo "<br>";
  echo DIRECTORY_SEPARATOR;
  echo "<br>";
  echo dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
?>


<h1>Voorbeeld Unittest</h1>

<h3>Het totaalbedrag van de rekening is: <?php echo $receipt->total($rekening, "Hoi"); ?> euro</h3>

<h3>Het productbedrag van de rekening is: <?php echo $receipt->product($rekening); ?> euro</h3>