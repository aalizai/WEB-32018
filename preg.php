<?php 
  $patt="/^[a-z]+$/";
  $tex="asghdhhkkksdk9";
  if (preg_match($patt, $tex)) {
      echo "you text is right";
  } else {
      echo "Enter correct text";
  }
?> 