<?php
  namespace TDD\Test;

  require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

  use PHPUnit\Framework\TestCase;
  use TDD\kostenBenefietConcert;

  class kostenBenefietConcertTest extends TestCase {

    public $kostenBenefietConcert;

    public function setUp() {
      $this->kostenBenefietConcert = new kostenBenefietConcert();
    }

    public function tearDown() {
      unset($this->kostenBenefietConcert);
    }

    /**
     * @dataProvider provideTotal
     */
    public function testantal($input, $expected) {
      $output = $this->kostenBenefietConcert->aantal($input);      
      $this->assertEquals(
        $expected,
        $output,
        "Wanneer ik de getallen optel moet er het $expected uitkomen"
      );
    }

    public function provideaantal() {
      return [
        [[1200]]
      ];
    }


    /**
     * @dataProvider provideProduct
     */
    public function testprijs($input, $expected, $text) {
      $output = $this->kostenBenefietConcert->prijs($input);      
      $this->assertEquals(
        $expected,
        $output,
        "Wanneer alles the getal minder is dan 600 $expected uitkomen bij de $text"
      );
    }

    public function provideProduct() {
      return [
        'ints_totaal_24' => [[1200], 45, "Eerste test"]
      ];
    }

  }

?>