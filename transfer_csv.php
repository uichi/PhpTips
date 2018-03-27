<?php
  $arrangement = array(
    array('a','b'),
    array('c','d'),
    array('e','f'),
    array('g','h')
  );

  $arrangement2 = array('i','j','k','l');
  $arrangement3 = array('m','n','o','p');
  
  /**
   *array_map(null, 配列, 配列, ..., 配列)となる
   */
  $result = call_user_func_array('array_map', array_merge(array(null), $arrangement));
  /**
   *array_mapの第1引数にnullを持ってくることで配列を結合できる
   */
  $result2 = array_map(array(null),$arrangement2, $arrangement3);
  
  print_r($result);
  print_r($result2);
