<?php
  $string = "Ubuntu,Arch,CentOS,Kali,fedora";
  print_r($string . "\n");
  $list = explode(',', $string);
  foreach($list as $value)
  {
    print_r($value . "\n");
  }
