<?php
  namespace TDD\Test;

  require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

  use PHPUnit\Framework\TestCase;
  use TDD\Receipt;

  class ReceiptTest extends TestCase {

    public function testTotal() {
      $receipt = new Receipt();
      $this->assertEquals(
        898,
        $receipt->total([56, 128, 89, 24, 133, 233, 212, 23]),
        'Wanneer ik de getallen optel moet er het volgende uitkomen'
      );
    }

    public function testProduct() {
      $receipt = new Receipt();
      $this->assertEquals(
        2313505327644672,
        $receipt->product([56, 128, 89, 24, 133, 233, 212, 23]),
        'Wanneer ik de getallen vermenigvuldig moet er het volgende uitkomen'
      );
    }

  }

?>