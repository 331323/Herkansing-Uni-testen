<?php
  namespace TDD;
  
  class kostenBenefietConcert {

    public function aantal($aantalBezoekers) {
      return array_sum($aantalBezoekers);
    }

    public function prijs($prijsTickets) {
      return array_product($prijsTickets);
    } 
  }

  $TotalBedrag = round($aantalBezoekers * $prijsTickets);

  $maxBandUitgaven = round((20/100)* $TotalBedrag);

  return $maxBandUitgaven;

?>