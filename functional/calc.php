<?php
  function calc_grade($mid,$final) {
    $sum = $mid+$final;

    if($sum >= 80) {
      $_SESSION['A'] = $_SESSION['A'] + 1;
    }
    else if($sum > 70) {
      return 'B';
    }
  }


?>