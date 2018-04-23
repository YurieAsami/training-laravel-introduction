@php
  $sta=0;
  $total=0;
for($i = 0 ; $i <= $star ; $i++){
  if($i % 2 == 0 AND $i != 0){
    echo "<i class='material-icons'>star</i>";
      $sta++;
  }else{
    $total++;
  }
}
 while ($sta < 5){
  if($total % 2 == 0){
  echo "<i class='material-icons'>star_border</i>";
    $sta++;
  }else{
  echo "<i class='material-icons'>star_half</i>";
      $sta++;
      $total++;
  }
}
@endphp
