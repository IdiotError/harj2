<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CodeIgniter esimerkki</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <ul>
      <li><a href="<?php echo site_url('');?>">Etusivu</a></li>
      <li><a href="<?php echo site_url('test/kolmas');?>">test/kolmas</a></li>
      <li><a href="<?php echo site_url('test/neljas');?>">test/neljäs</a></li>
      <li><a href="<?php echo site_url('oppilas/nayta_oppilaat');?>">Opiskelijat</a></li><!--site urliin ei tiedostonimi vaan class ja controllerissa oleva funktion nimi-->
    </ul>
<div class="container">
