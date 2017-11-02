<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
  public function index(){
    echo 'Tämä on Test Controllerin index metodi'; //ei näin, ei suoraa tulostusta täältä
  }
  public function toinen(){
    //echo 'Tämä on Test Controllerin toinen metodi'; //ei, ei, ei
    echo site_url('test/toinen');
  }
  public function kolmas(){
    $data['etunimi']='Ville';
    $data['sukunimi']='Virta';
    $data['sivu']='test/kolmas';
    $this->load->view('menu/content',$data);
  }
  public function neljas(){ //Näin. Haetaan modelista data hae_nimet funktiolla, lähetetään se viewiin
    $this->load->model('Test_model');
    $data['oppilaat']=$this->Test_model->hae_nimet();
    $data['sivu']='test/neljas';
    $this->load->view('menu/content',$data);
  }

}
