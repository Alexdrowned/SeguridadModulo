<?php
  function strToBin($input)
  {
    if (!is_string($input))
      return false;
    $value = unpack('H*', $input);
    return bindec(base_convert($value[1], 16, 2));
  }

  $len="Gatos";
  $num=306577698675;
  $resul=strToBin($num);
  echo $resul;
  
  
?>