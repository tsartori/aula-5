<?php

namespace Fagoc\Core\;

class Model{

  protected $collection;


  public function create($data){
    $json = json_encode($data);
    $filename = __APP_ROOT__ . '/storage/' . $this->collection . 'json';

    $stored[] = $data;

    $json = json_encode($stored);

    return file_put_contents($filename, $json);
  }
}
