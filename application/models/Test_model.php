<?php
class Test_model extends CI_Model{
  private $nimet=array(
    array("en"=>'Ville',"sn"=>'Virta'),
    array("en"=>'Anna',"sn"=>'Virta'),
    array("en"=>'Kale',"sn"=>'Heinonen')
  );
  public function hae_nimet(){
    return $this->nimet;
  }
}
