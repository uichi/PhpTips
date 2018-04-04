<?php 
  // cake2のfind条件でNOT NULLを使いたい
  // idがNULLでなければ引っ張ってきて$dataに代入
  $data = $this->Model->find( 'all',
    array(
      'conditions' => array(
        'NOT' => array(
          'Model.id' => NULL)
      ),
      'fields'     => null,
      'order'      => null,
      'recursive'  => 1,
    )
  );
