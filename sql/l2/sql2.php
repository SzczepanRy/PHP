<?php
  for($i=0; $i<10; $i++)
    { $liczby[$i] = rand()%10; }
  header("Content-type: image/jpeg");
  $rysunek = imagecreate (300,100)
    or die("Biblioteka graficzna nie została zainstalowana!");
  $kolorbialy = imagecolorallocate ($rysunek, 255, 255, 255);
  $kolorczarny = imagecolorallocate ($rysunek, 0, 0, 0);
  imagefill($rysunek, 0, 0, $kolorbialy);

  for( $i=0; $i<10; $i++)
  {
    $kolorslupka = imagecolorallocate ($rysunek, 25*$i, 25*$i,0);
    imagefilledrectangle ($rysunek,10,  $i*10+3, 90+$liczby[$i]*10 , $i*10+7, $kolorslupka);
    imagestring ($rysunek, 0,  1 ,1+$i*10, $i, $kolorczarny);
    imagestring ($rysunek, 0, 100+$liczby[$i]*10 ,1+$i*10, $liczby[$i], $kolorczarny);
  
  }
  imagejpeg($rysunek);
?>


