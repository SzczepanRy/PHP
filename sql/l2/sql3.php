<?php
  for($i=0; $i<10; $i++)
    { $liczby[$i] = rand()%10; }
  header("Content-type: image/jpeg");
  $rysunek = imagecreate (200,200)
    or die("Biblioteka graficzna nie została zainstalowana!");
  $kolorbialy = imagecolorallocate ($rysunek, 255, 255, 255);
  $kolorczarny = imagecolorallocate ($rysunek, 0, 0, 0);
  imagefill($rysunek, 0, 0, $kolorbialy);

  for( $i=0; $i<10; $i++)
  {
    $kolorslupka = imagecolorallocate ($rysunek, 25*$i, 25*$i,0);
    imagefilledrectangle ($rysunek, $i*10+3, 150-$liczby[$i]*10, $i*10+7, 150, $kolorslupka);
    imagefilledpolygon ($rysunek,array( $i*10+3, 150, $i*10+7, 150, $i*10+7, 140-$liczby[$i]*10, $i*10+20, 140-$liczby[$i]*10),4, $kolorslupka);
    #imagefilledrectangle ($rysunek, $i*10+3, 150-$liczby[$i]*10, $i*10+7, 150, $kolorslupka);
    imagestring ($rysunek, 1, 3+$i*10, 151, $i, $kolorczarny);
  }
  imagejpeg($rysunek);
?>
