<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CodeIgniter esimerkki</title>
  </head>
  <body>
    <ul>
      <li><a href="<?php echo site_url('');?>">Etusivu</a></li>
      <li><a href="<?php echo site_url('test/kolmas');?>">test/kolmas</a></li>
      <li><a href="<?php echo site_url('test/neljas');?>">test/neljäs</a></li>
      <li><a href="<?php echo site_url('oppilas/nayta_oppilaat');?>">Opiskelijat</a></li><!--site urliin ei tiedostonimi vaan class ja controllerissa oleva funktion nimi-->

    </ul>
