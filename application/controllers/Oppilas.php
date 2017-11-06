<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oppilas extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($_SESSION['kirjautunut']== true){

    }else{
        redirect('login/avaa_lomake');
    }
  }
    public function nayta_oppilaat(){
        $this->load->model('Oppilas_model');//käyta modelia Oppilas_model
        $data['oppilaat']=$this->Oppilas_model->hae_oppilaat(); //palauta data taulukkoon oppilaat
        $data['sivu']='oppilas/nayta_oppilaat'; //sivun nimi(.php) jolla data nautetaan
        $this->load->view('menu/content',$data); //käsky näyttää sivu
    }

    public function poista_oppilas($idPoista){//painike sivulla välittää id:n
      $this->load->model('Oppilas_model');//käyta modelia Oppilas_model
      $this->Oppilas_model->poista_valittu($idPoista);//kutsutaan modelissa olevaa funktiota
      redirect('oppilas/nayta_oppilaat');
    }

    public function lisays_lomake(){
      $data['sivu']='oppilas/lisays_lomake'; //sivun nimi(.php) jolla data nautetaan
      $this->load->view('menu/content',$data); //käsky näyttää sivu
    }

    public function lisaa_opiskelija(){
      $this->load->model('Oppilas_model');
      $lisaa_data=array(
        "etunimi"=>$this->input->post('en'),
        "sukunimi"=>$this->input->post('sn'),
        "syntymavuosi"=>$this->input->post('sv')
      );
      $this->Oppilas_model->lisaa_tietokantaan($lisaa_data);
      redirect ('oppilas/nayta_oppilaat');
    }

}
 ?>
