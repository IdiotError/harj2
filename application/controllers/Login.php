<?php

class Login extends CI_Controller
{

  public function avaa_lomake(){
    $data['sivu']='login/avaa_lomake'; //sivun nimi(.php) jolla data nautetaan
    $this->load->view('menu/content',$data); //käsky näyttää sivu
  }
  public function kirjaudu(){ //demon vuoksi tämä hyväksyy automaattisesti
    $_SESSION['user']=$this->input->post('tunnus');
    $_SESSION['kirjautunut']=true;
    redirect('oppilas/nayta_oppilaat');
  }
  public function kirjaudu_ulos(){
    $_SESSION['kirjautunut']=false;
    $data['sivu']='login/ulos';
    $this->load->view('menu/content',$data);
  }
}
